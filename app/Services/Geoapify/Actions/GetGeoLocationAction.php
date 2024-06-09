<?php

namespace App\Services\Geoapify\Actions;

use App\Services\Geoapify\Actions\FetchGeoApiAction;
use App\Services\Geoapify\Transformers\GeoapiTransformer;
use App\Handlers\ApiResultHandler;
use App\Models\Location;
use App\Services\Locations\Actions\CreateLocationAction;

class GetGeoLocationAction
{
    public $location;

    public function execute($location) 
    {
        $this->location = $location;

        $dbLocation = $this->checkDBLocation();
        if ($dbLocation) {
            return $dbLocation;
        }

        $response = $this->requestGeoipfy();
        $location = $this->storeLocation($response);


        return $location;
    }

    private function checkDBLocation() 
    {   
        return Location::where('city', 'like', '%'. $this->location.'%')->first();
    }

    private function requestGeoipfy() 
    {   
        $response = (new FetchGeoApiAction)->execute($this->location);
        $results = ApiResultHandler::handle($response)['results'];

        if (empty($results)) {
            abort(404, "$this->location is not a city in Japan");
        } 

        return $results[0];
    }

    private function storeLocation($response) 
    {   
        return (new CreateLocationAction)->execute($response);
    }
}