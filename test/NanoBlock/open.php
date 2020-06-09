<?php

require_once __DIR__ . '/../../autoload.php';

use php4nano\NanoTool as NanoTool;

// Owner data
$private_key      = ''; // Owner account secret key
$public_key       = ''; // Owner account public key
$account          = ''; // Owner account

// Block data
$difficulty       = 'ffffffc000000000'; // Open difficulty
$pairing_block_id = ''; // Pairing block_id
$received_amount  = ''; // Received amount
$representative   = ''; // Opening representative

// Initialize NanoRPC and NanoBlocks
$nanorpc   = new php4nano\NanoRPCExt();
$nanoblock = new php4nano\NanoBlock($private_key);

// Get external block data
$account_info = $nanorpc->account_info(['account' => $account]);
$block_info   = $nanorpc->block_info([
                    'json_block' => true,
                    'hash'       => $account_info['frontier']       
                ]);
$work = NanoTool::getWork($public_key, $difficulty);

// Build block
$nanoblock->setWork($work);
$nanoblock->open($pairing_block_id, $received_amount, $representative);

// Publish block
$process = $nanorpc->process([
            'json_block' => 'true',
            'block' => $nanoblock->block
           ]);

// Results and debug
if ($nanorpc->error) {
    echo $nanorpc->error . PHP_EOL;
}

var_dump($process);
