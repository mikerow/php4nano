<?php

require __DIR__ . '/../autoload.php';

use MikeRow\NanoPHP\NanoTool;

// Owner data
$private_key = '';
$public_key  = '';
$account     = '';

// Block data
$send_difficulty = 'fffffff800000000';
$destination     = '';
$sending_amount  = '';
$representative  = '';

// Initialize NanoRpc and NanoBlock
$nanorpc    = new MikeRow\NanoPHP\NanoRpc();
$nanoblock  = new MikeRow\NanoPHP\NanoBlock($private_key);

// Get previous block data
$account_info = $nanorpc->account_info(['account' => $account]);
$block_info   = $nanorpc->block_info([
    'json_block' => true,
    'hash' => $account_info['frontier']
]);

// Generate work
$work = NanoTool::work($account_info['frontier'], $send_difficulty);

// Build block
$nanoblock->setPrev($account_info['frontier'], $block_info['contents']);
$nanoblock->setWork($work);
$nanoblock->send($destination, $sending_amount, $representative);

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
