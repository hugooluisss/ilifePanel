<?php
$filename = "webhooks.txt";//esta es la ubicación local
$handle = fopen($filename, 'a+');
$obj = $_POST;

$data = json_decode(file_get_contents('php://input'));

fwrite($handle, date("Y-m-d H:i:s ---- ").print_r($data, true).PHP_EOL);

fclose($handle);
?>