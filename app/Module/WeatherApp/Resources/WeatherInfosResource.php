<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Resources;

use App\Http\Resources\BaseResourceCollection;

final class WeatherInfosResource extends BaseResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => WeatherInfoResource::collection($this->resource)
        ];
    }
}
