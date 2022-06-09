<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Github\Client;
use Symfony\Component\HttpClient\HttplugClient;

$client = Client::createWithHttpClient(new HttplugClient());
