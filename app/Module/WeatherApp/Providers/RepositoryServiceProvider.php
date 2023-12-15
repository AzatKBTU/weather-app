<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Providers;

use App\Module\WeatherApp\Contracts\Repositories\CreateWeatherInfoRepository;
use App\Module\WeatherApp\Contracts\Repositories\TakeTemperatureInfoRepository as TakeTemperatureInfoRepositoryContract;
use App\Module\WeatherApp\Repositories\TakeTemperatureInfoRepository;
use App\Module\WeatherApp\Repositories\WeatherInfoRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        TakeTemperatureInfoRepositoryContract::class => TakeTemperatureInfoRepository::class,
        CreateWeatherInfoRepository::class           => WeatherInfoRepository::class,
    ];
}
