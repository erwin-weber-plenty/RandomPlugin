<?php

$client = new \GuzzleHttp\Client();

$res = $client->request(
    SdkRestApi::getParam('method'),
    SdkRestApi::getParam('url'),
    SdkRestApi::getParam('query') ?
    [
        'query' => SdkRestApi::getParam('query')
    ] : null
);

/** @return array */
return json_decode($res->getBody(), true);