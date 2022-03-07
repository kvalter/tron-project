<?php
include_once './vendor/autoload.php';
header("Content-Type: text/plain; charset=utf-8");

$tron = new \IEXBase\TronAPI\Tron();

var_dump($tron->toHex('TT67rPNwgmpeimvHUMVzFfKsjL9GZ1wGw8'));
//result: 41BBC8C05F1B09839E72DB044A6AA57E2A5D414A10

var_dump($tron->fromHex('41BBC8C05F1B09839E72DB044A6AA57E2A5D414A10'));
//result: TT67rPNwgmpeimvHUMVzFfKsjL9GZ1wGw8