<?php

namespace App\Providers;

use App\Repositories\ContactRepository;
use App\Repositories\Contracts\ContactRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
