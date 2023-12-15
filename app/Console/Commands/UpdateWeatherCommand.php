<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Module\WeatherApp\Contracts\Repositories\CreateWeatherInfoRepository;
use App\Module\WeatherApp\Contracts\Repositories\TakeTemperatureInfoRepository;
use App\Module\WeatherApp\DTO\TempInfoDTO;
use App\Module\WeatherApp\Models\City;
use App\Module\WeatherApp\Models\WeatherInfo;
use Illuminate\Console\Command;

final class UpdateWeatherCommand extends Command
{
    protected $signature = 'weather:update
        {cityId? : ID города по которому нужна информация по температуре}';
    protected $description = 'Обновить данные по температуре';

    public function __construct(
        private readonly TakeTemperatureInfoRepository $temperatureInfoRepository,
        private readonly CreateWeatherInfoRepository $createWeatherInfoRepository
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $cityId = (int)$this->argument('cityId') ?? City::ASTANA_ID;

        /** @var TempInfoDTO $DTO */
        $DTO = $this->temperatureInfoRepository->takeInfoByCityId($cityId);

        $weatherInfo             = new WeatherInfo();
        $weatherInfo->city_id    = $cityId;
        $weatherInfo->temp       = $DTO->temp;
        $weatherInfo->feels_like = $DTO->feelsLike;

        $this->createWeatherInfoRepository->create($weatherInfo);
    }
}
