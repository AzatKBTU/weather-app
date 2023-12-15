<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Resources;

use App\Http\Resources\BaseJsonResource;
use App\Module\WeatherApp\Models\City;

/**
 * @property City $resource
 */
final class CityResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id'        => $this->resource->id,
            'name'      => $this->resource->name,
            'longitude' => $this->resource->longitude,
            'latitude'  => $this->resource->latitude
        ];
    }
}
