<?php

namespace App\Services\Weathers;
use App\Services\Geoapify\Actions\GetGeoLocationAction;
use App\Services\OpenWeather\Actions\GetOpenWeatherAction;

class WeatherService
{ 
    public function handle($request) {

        $location = (new GetGeoLocationAction)->execute($request->search);
        $weather = (new GetOpenWeatherAction)->execute($location);

        return [
            'location' => $location,
            'weather' => $weather,
        ];
    }
}