<?php

namespace App\Services\Geoapify\Actions;

use App\Services\Geoapify\Actions\FetchGeoApiAction;
use App\Services\Geoapify\Transformers\GeoapiTransformer;
use App\Handlers\ApiResultHandler;

class GetGeoLocationAction
{
    public function execute($location) 
    {
        $response = (new FetchGeoApiAction)->execute($location);

        $results = ApiResultHandler::handle($response)['results'];

        if (empty($results)) {
            abort(404, "$location is not a city in Japan");
        } 

        return GeoapiTransformer::transform($results[0]);
    }
}