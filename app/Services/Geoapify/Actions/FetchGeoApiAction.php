<?php

namespace App\Services\Geoapify\Actions;

use Illuminate\Support\Facades\Http;
use App\Helpers\ConvertHelper;
use App\Handlers\ApiErrorHandler;

class FetchGeoApiAction
{
    public function execute($location) {

        $geoConfig = config('services.geoapify');
        
        // add location to array
        $geoUrl = $geoConfig['uri'] . '?';
        $geoConfig['text'] = $location;

        // rename the key to apiKey
        $geoConfig['apiKey'] = $geoConfig['key'];
        unset($geoConfig['key']);

        // convert to params
        $params = ConvertHelper::convertToParams($geoConfig, 'uri');
        $url = $geoUrl . $params;

        $response = Http::get($url);
        ApiErrorHandler::handle($response);

        return $response;
    }
}