<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $longitude
 * @property string $latitude
 */
final class City extends Model
{
    use SoftDeletes;

    const ASTANA_ID = 1;
    const ALMATY_ID = 2;
    const ATYRAU_ID = 3;
}
