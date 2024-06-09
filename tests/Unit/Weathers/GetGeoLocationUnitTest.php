<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\Geoapify\Actions\GetGeoLocationAction;

class GetGeoLocationUnitTest extends TestCase
{

    public function test_unit_can_get_geo_location()
    {
        $getGeoLocationClass = new GetGeoLocationAction();
        $location = 'Yokohama';

        $result = $getGeoLocationClass->execute($location);

        $this->assertArrayHasKey('city', $result);
    }
}
