<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Resources;

use App\Http\Resources\BaseJsonResource;
use App\Module\WeatherApp\Models\WeatherInfo;

/**
 * @property WeatherInfo $resource
 */
final class WeatherInfoResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id'        => $this->resource->id,
            'temp'      => $this->resource->temp,
            'feelsLike' => $this->resource->feels_like,
            'city'      => new CityResource($this->resource->city)
        ];
    }
}
