<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Contracts\Repositories;

use App\Module\WeatherApp\Models\WeatherInfo;

interface CreateWeatherInfoRepository
{
    public function create(WeatherInfo $weatherInfo): void;
}
