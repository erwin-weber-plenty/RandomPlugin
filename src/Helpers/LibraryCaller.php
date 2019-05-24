<?php

namespace RandomPlugin\Helpers;

use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;

class LibraryCaller {

    private $libCall;

    public function __construct(LibraryCallContract $libCall)
    {
        $this->libCall = $libCall;
    }

    protected function httpRequest($method, $url, $query = NULL)
    {
        return $this->libCall->call(
            'RandomPlugin::guzzle_connector',
            [
                "method" => $method,
                "url" => $url,
                "query" => $query
            ]
        );
    }
}