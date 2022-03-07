<?php
include_once './vendor/autoload.php';

header("Content-Type: text/plain; charset=utf-8");

try {
    $tron = new \IEXBase\TronAPI\Tron();

    $generateAddress = $tron->generateAddress(); // or createAddress()
    $isValid = $tron->isAddress($generateAddress->getAddress());


    echo 'Address hex: '. $generateAddress->getAddress().PHP_EOL;
    echo 'Address base58: '. $generateAddress->getAddress(true).PHP_EOL;
    echo 'Private key: '. $generateAddress->getPrivateKey().PHP_EOL;
    echo 'Public key: '. $generateAddress->getPublicKey().PHP_EOL;
    echo 'Is Validate: '. $isValid;
    echo 'Raw data: '.$generateAddress->getRawData();

} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    echo $e->getMessage();
}
