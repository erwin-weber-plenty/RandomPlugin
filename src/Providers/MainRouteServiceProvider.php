<?php

namespace RandomPlugin\Providers;

use Plenty\Plugin\Routing\Router;

class MainRouteServiceProvider
{
    public function map(Router $router){
        $router->get("/posts", "RandomPlugin\Controllers\PostsController@getPosts");
    }
}