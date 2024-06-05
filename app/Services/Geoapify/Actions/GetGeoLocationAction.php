<?php

namespace App\Services\Geoapify\Actions;

use App\Services\Geoapify\Actions\FetchGeoApiAction;
use App\Services\Geoapify\Transformers\GeoapiTransformer;
use App\Handlers\ApiResultHandler;

class GetGeoLocationAction
{
    public function execute($location) {

        //commenthere must have request checking the validation of location
        
        $response = (new FetchGeoApiAction)->execute($location);
        $results = ApiResultHandler::handle($response)['results'][0];

        if (empty($results)) {
            abort(404, "$location is not a city in Japan");
        } 
        //commenthere must be in request form

        return GeoapiTransformer::transform($results);
    }
}