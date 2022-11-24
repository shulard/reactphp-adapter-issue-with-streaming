<?php

require_once __DIR__.'/vendor/autoload.php';

use Http\Adapter\React\Client;
use Http\Adapter\React\ReactFactory;
use Nyholm\Psr7\Factory\Psr17Factory;

ini_set('memory_limit', '5M');

$client = new Client(ReactFactory::buildHttpClient());

$factory = new Psr17Factory();

$request = $factory->createRequest('GET', 'http://localhost:8000/sample');
$response = $client->sendRequest($request);

/**
 * Retrieve a React\Http\Io\BufferedBody instance
 *
 * This object will store the whole response body in memory which is fine for
 * most usages. However if you want to download huge files it'll break. And
 * by huge, I mean bigger than the "memory_limit" for sure ^^
 */
$body = $response->getBody();
