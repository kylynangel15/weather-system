<?php

namespace App\Services\Locations\Actions;

use App\Models\Location;
use App\Models\User;

class CreateLocationAction
{
    public function execute($payload)
    {
        $location = new Location;
        $location->city = $payload['city'];
        $location->country = $payload['country'];
        $location->country_code = $payload['country_code'];
        $location->lon = $payload['lon'];
        $location->lat = $payload['lat'];

        $location->save();

        return $location;
    }
}
