<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\Weathers\WeatherService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class WeatherServiceUnitTest extends TestCase
{

    public function test_unit_can_get_weather_service()
    {
        $getWeatherClass = new WeatherService;

        $payload = [
            "search" => 'Kyoto'
        ];
    
        $request = new Request($payload);
        $result = $getWeatherClass->handle($request);
    
        $this->assertArrayHasKey('location', $result);
        $this->assertArrayHasKey('weather', $result);
    }

    public function test_unit_cannot_search_city_not_in_japan()
    {
        $getWeatherClass = new WeatherService;

        $payload = [
            "search" => 'Taguig'
        ];
    
        $request = new Request($payload);
        try {
            $result = $getWeatherClass->handle($request);
        } catch (NotFoundHttpException $e) {
            $this->assertEquals('Taguig is not a city in Japan', $e->getMessage());
            return;
        }
    }
}

