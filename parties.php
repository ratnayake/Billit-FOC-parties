<?php

require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$body = [
    "CommercialName"    => "isurucomp",
    "PartyType"         => "Customer",
    "CompanyName"       => "Isuru Computers Pvt Ltd",
    "Contact"           => "fff",
    "ContactFirstName"  => "fff",
    "ContactLastName"   => "fff"
];

$response = $client->request('POST', 'https://api.billit.be/v1/parties', [
    'body' => json_encode($body),
    'headers' => [
        'Accept'        => 'application/json',
        'Content-Type'  => 'application/json',
        'apikey'        => '2809bdb3-a58f-4cd5-9ba8-84cce4d1e476',
    ],
]);

echo $response->getBody();