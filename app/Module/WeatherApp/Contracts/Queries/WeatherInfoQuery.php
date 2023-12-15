<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Contracts\Queries;

use Illuminate\Database\Eloquent\Collection;

interface WeatherInfoQuery
{
    public function getAll(): Collection|array;
}
