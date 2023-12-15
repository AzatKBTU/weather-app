<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Providers;

use Illuminate\Support\ServiceProvider;

final class RegisterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(QueryServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);
    }
}
