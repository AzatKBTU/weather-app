<?php

declare(strict_types=1);

namespace App\Module\WeatherApp\DTO;

final class TempInfoDTO
{
    public float $temp;
    public float $feelsLike;

    public static function fromHttp(array $data): self
    {
        $self            = new self();
        $self->temp      = $data['main']['temp'];
        $self->feelsLike = $data['main']['feels_like'];

        return $self;
    }
}
