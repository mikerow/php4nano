<?php

require_once __DIR__ . '/../../lib/NanoTools.php';

use php4nano\NanoTools as NanoTools;

$array = [34, 83, 255, 255, 90, 39, 02, 98];

$binary = NanoTools::arr2bin($array);

print_r(NanoTools::bin2arr($binary));
