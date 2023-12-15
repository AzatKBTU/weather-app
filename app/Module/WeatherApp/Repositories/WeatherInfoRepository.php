<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Repositories;

use App\Module\WeatherApp\Contracts\Repositories\CreateWeatherInfoRepository;
use App\Module\WeatherApp\Models\WeatherInfo;

final class WeatherInfoRepository implements CreateWeatherInfoRepository
{
    /**
     * @throws \Throwable
     */
    public function create(WeatherInfo $weatherInfo): void
    {
        $weatherInfo->saveOrFail();
    }
}
