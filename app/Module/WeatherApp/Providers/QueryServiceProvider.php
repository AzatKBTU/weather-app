<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Providers;

use App\Module\WeatherApp\Contracts\Queries\CityQuery as CityQueryContract;
use App\Module\WeatherApp\Contracts\Queries\WeatherInfoQuery as WeatherInfoQueryContract;
use App\Module\WeatherApp\Queries\CityQuery;
use App\Module\WeatherApp\Queries\WeatherInfoQuery;
use Illuminate\Support\ServiceProvider;

final class QueryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        CityQueryContract::class => CityQuery::class,
        WeatherInfoQueryContract::class => WeatherInfoQuery::class,
    ];
}
