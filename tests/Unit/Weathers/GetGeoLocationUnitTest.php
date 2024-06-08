<?php

namespace Tests\Feature;

use App\Services\Geoapify\Actions\GetGeoLocationAction;

test('can get geo location', function () {
    $getGeoLocationClass = new GetGeoLocationAction();
    $location = 'Yokohama';

    $result = $getGeoLocationClass->execute($location);

    $expected = [
        "country" => "Japan",
        "country_code" => "jp",
        "city" => "Yokohama",
        "lon" => 139.6367727,
        "lat" => 35.4443947
    ];
    
    expect($result)->toBe($expected);
});