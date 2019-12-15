<?php

require 'vendor/autoload.php';
use GuzzleHttp\Client;
$Client = new Client ();
$response= $Client->request('GET','Http');