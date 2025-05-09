<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.billit.be/v1/parties', [
    'body' => '{"CommercialName":"isurucomp","PartyType":"Customer","CompanyName":"Isuru Computers Pvt Ltd",  "Contact": "fff",
  "ContactFirstName": "fff",
  "ContactLastName": "fff"}',
  'headers' => [
    'accept' => 'application/json',
    'Content-Type' => 'application/json',
    'apikey' => '2809bdb3-a58f-4cd5-9ba8-84cce4d1e476',
  ],
]);

echo $response->getBody();