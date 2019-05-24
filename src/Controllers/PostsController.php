<?php

namespace RandomPlugin\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Templates\Twig;
use RandomPlugin\Repositories\JSONPlaceholderRepository;

class PostsController extends Controller
{
    private $repository;

    public function __construct(JSONPlaceholderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getPosts(Twig $twig, Request $request):string
    {
        $posts = $this->repository->getPosts();
        return $twig->render('RandomPlugin::content.index', [
            "posts" => $posts
        ]);
    }
}