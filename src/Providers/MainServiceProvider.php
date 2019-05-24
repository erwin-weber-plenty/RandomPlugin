<?php

namespace RandomPlugin\Providers;

use Plenty\Plugin\ServiceProvider;
use RandomPlugin\Contracts\JSONPlaceholderRepositoryContract;
use RandomPlugin\Repositories\JSONPlaceholderRepository;
use RandomPlugin\Contracts\PackagistRepositoryContract;
use RandomPlugin\Repositories\PackagistRepository;

class MainServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->getApplication()->register(MainRouteServiceProvider::class);
        $this->getApplication()->register(
            JSONPlaceholderRepositoryContract::class,
            JSONPlaceholderRepository::class
        );
        $this->getApplication()->register(
            PackagistRepositoryContract::class,
            PackagistRepository::class
        );
    }
}