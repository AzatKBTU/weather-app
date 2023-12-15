<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Contracts\Queries;

use App\Module\WeatherApp\Models\City;

interface CityQuery
{
    public function getCityById(int $cityId): City;
}
