<?php

namespace App\Services\OpenWeather\Actions;

use App\Handlers\ApiErrorHandler;
use Illuminate\Support\Facades\Http;
use App\Helpers\ConvertHelper;

class FetchOpenWeatherApiAction
{
    public function execute($location, $type) {

        $openWeatherConfig = config('services.open_weather');
        
        // reformat the URL
        $urlItem = $openWeatherConfig['uri'];
        $openWeatherUrl = "$urlItem/$type?"; 

        //add lat & lon in config
        $openWeatherConfig['lat'] = $location['lat'];
        $openWeatherConfig['lon'] = $location['lon'];

        // // convert to params
        $params = ConvertHelper::convertToParams($openWeatherConfig, 'uri');
        $url = $openWeatherUrl . $params;

        $response = Http::get($url);
        ApiErrorHandler::handle($response);

        return $response;
    }

}