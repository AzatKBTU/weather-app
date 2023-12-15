<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $city_id
 * @property float $temp
 * @property float $feels_like
 * @property-read City $city
 */
final class WeatherInfo extends Model
{
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
