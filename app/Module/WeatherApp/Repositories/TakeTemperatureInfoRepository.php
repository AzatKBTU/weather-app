<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Repositories;

use App\Module\WeatherApp\Contracts\Queries\CityQuery;
use App\Module\WeatherApp\Contracts\Repositories\TakeTemperatureInfoRepository as TakeTemperatureInfoRepositoryContract;
use App\Module\WeatherApp\DTO\TempInfoDTO;
use Illuminate\Support\Facades\Http;

final class TakeTemperatureInfoRepository implements TakeTemperatureInfoRepositoryContract
{
    public function __construct(
        private readonly CityQuery $query
    ) {
    }

    public function takeInfoByCityId(int $cityId): TempInfoDTO
    {
        $city = $this->query->getCityById($cityId);

        $url    = env('WEATHER_APP_URL');
        $apiKey = env('WEATHER_APP_API_KEY');
        $path   = "?lat=$city->latitude&lon=$city->longitude&appid=$apiKey";

        $response = Http::get($url . $path);

        return TempInfoDTO::fromHttp($response->json());
    }
}
