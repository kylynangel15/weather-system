<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\OpenWeather\Actions\GetOpenWeatherAction;

class GetOpenWeatherUnitTest extends TestCase
{

    public function test_unit_can_get_open_weather()
    {
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
    }
}
