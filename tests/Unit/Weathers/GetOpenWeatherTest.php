<?php

namespace Tests\Feature;

use App\Services\OpenWeather\Actions\GetOpenWeatherAction;

test('can get open weather', function () {


    $getOpenWeatherClass = new GetOpenWeatherAction;

    $location = [
        "country" => "Japan",
        "country_code" => "jp",
        "city" => "Yokohama",
        "lon" => 139.6367727,
        "lat" => 35.4443947
    ];

    $result = $getOpenWeatherClass->execute($location);

    $this->assertArrayHasKey('current', $result);
    $this->assertArrayHasKey('forecast', $result);
    
});


//commenthere add negative scenario testcase