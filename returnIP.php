<?php


$clientIpAddress = $_SERVER['REMOTE_ADDR'];
$jsonResponse = json_encode(array("ip_address" => $clientIpAddress));
header('Content-Type: application/json');
echo $jsonResponse;

?>