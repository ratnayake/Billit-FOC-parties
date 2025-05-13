<?php

require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$body = [
    "CommercialName"    => "isurucomp",
    "PartyType"         => "Customer",
    "CompanyName"       => "Isuru Computers Pvt Ltd",
    "Contact"           => "isuru",
    "ContactFirstName"  => "isuru",
    "ContactLastName"   => "ratnayake"
];

$response = $client->request('POST', 'https://api.billit.be/v1/parties', [
    'body' => json_encode($body),
    'headers' => [
        'Accept'        => 'application/json',
        'Content-Type'  => 'application/json',
        'apikey'        => 'sample-api-key',
    ],
]);

echo $response->getBody();
