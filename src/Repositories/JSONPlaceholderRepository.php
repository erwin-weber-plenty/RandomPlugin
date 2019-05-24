<?php

namespace RandomPlugin\Repositories;

use RandomPlugin\Contracts\JSONPlaceholderRepositoryContract;
use RandomPlugin\Helpers\LibraryCaller;

class JSONPlaceholderRepository
    extends LibraryCaller
    implements JSONPlaceholderRepositoryContract
{

    const BASE_URL = "https://jsonplaceholder.typicode.com";

    public function getComments()
    {
        return $this->httpRequest(
            "GET",
            self::BASE_URL . "/comments"
        );
    }

    public function getPosts()
    {
        return $this->httpRequest(
            "GET",
            self::BASE_URL . "/posts"
        );
    }

}