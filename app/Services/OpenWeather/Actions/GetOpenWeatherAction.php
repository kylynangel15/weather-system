<?php

namespace App\Services\OpenWeather\Actions;

use App\Handlers\ApiResultHandler;
use App\Services\OpenWeather\Actions\FetchOpenWeatherApiAction;
use App\Services\OpenWeather\Transformers\OpenWeatherTransformer;

class GetOpenWeatherAction
{
    const CURRENT_WEATHER = 'weather';
    const FORECAST_WEATHER = 'forecast';

    public function execute($location) {

        $currentRequest = (new FetchOpenWeatherApiAction)->execute($location, self::CURRENT_WEATHER);
        $current = ApiResultHandler::handle($currentRequest);
        
        $forecastRequest = (new FetchOpenWeatherApiAction)->execute($location, self::FORECAST_WEATHER);
        $forecast = ApiResultHandler::handle($forecastRequest);

        return [
            'current' => OpenWeatherTransformer::transform($current),
            'forecast' => OpenWeatherTransformer::transform($forecast)
        ];
    }

}