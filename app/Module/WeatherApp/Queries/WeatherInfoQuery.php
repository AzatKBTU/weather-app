<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Queries;

use App\Module\WeatherApp\Contracts\Queries\WeatherInfoQuery as WeatherInfoQueryContract;
use App\Module\WeatherApp\Models\WeatherInfo;
use Illuminate\Database\Eloquent\Collection;

final class WeatherInfoQuery implements WeatherInfoQueryContract
{
    public function getAll(): Collection|array
    {
        return WeatherInfo::query()
            ->with('city')
            ->orderByDesc('created_at')
            ->get();
    }
}
