<?php
include_once './vendor/autoload.php';
header("Content-Type: text/plain; charset=utf-8");

$fullNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}

$tron->setAddress('TWPmAxJE4sc1jauUa8WrKHzVod9uUojF2S');
$tron->setPrivateKey('b7e5124ce43828b46212259aff62855f59ba657452dcbf4dbdd06f9b5e7e18f2');

try {
    $transfer = $tron->send( 'TFLmn6FQL7LLrhg1mjhjGcnA4oh8pYBPTX', 3);
} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    die($e->getMessage());
}

var_dump($transfer);