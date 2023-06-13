<?php

use App\Http\Integrations\Amedues\AmeduesConnector;
use App\Http\Integrations\Amedues\Requests\ListDestinationsRequest;
use Illuminate\Support\Facades\Route;


Route::get('test', function () {
    $token = '6gd9O8DcpBtqOHF4wYUYOoA1Pq0w';
    $connector = new AmeduesConnector($token);

    $origin = 'PAR';
    $maxPrice = 200;


    $listDestinationRequest = new ListDestinationsRequest($origin, $maxPrice);
    $response = $connector->send($listDestinationRequest);
    return $response->body();
});
