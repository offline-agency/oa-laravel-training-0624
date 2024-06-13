<?php

namespace App\Providers;

use App\Repositories\ContactRepository;
use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Repositories\Contracts\ProfileRepositoryInterface;
use App\Repositories\Contracts\UsersRepositoryInterface;
use App\Repositories\ProfileRepository;
use App\Repositories\UsersRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
        $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
