<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Controllers;

use App\Http\Controllers\Controller;
use App\Module\WeatherApp\Contracts\Queries\WeatherInfoQuery;
use App\Module\WeatherApp\Resources\WeatherInfosResource;

final class WeatherInfoController extends Controller
{
    public function __construct(
        private readonly WeatherInfoQuery $query
    ) {
    }

    public function index(): WeatherInfosResource
    {
        return new WeatherInfosResource(
            $this->query->getAll()
        );
    }
}
