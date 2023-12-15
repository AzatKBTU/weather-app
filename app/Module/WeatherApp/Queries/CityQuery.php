<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Queries;

use App\Module\WeatherApp\Contracts\Queries\CityQuery as CityQueryContract;
use App\Module\WeatherApp\Models\City;

final class CityQuery implements CityQueryContract
{
    public function getCityById(int $cityId): City
    {
        /** @var City $city */
        $city = City::query()
            ->find($cityId)
            ->first();

        return $city;
    }
}
