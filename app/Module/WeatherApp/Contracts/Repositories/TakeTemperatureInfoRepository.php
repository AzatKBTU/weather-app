<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Contracts\Repositories;

interface TakeTemperatureInfoRepository
{
    public function takeInfoByCityId(int $cityId);
}
