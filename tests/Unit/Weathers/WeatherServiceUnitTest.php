<?php

namespace Tests\Feature;

use App\Services\Weathers\WeatherService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

test('can weather service location/weather', function () {


    $getWeatherClass = new WeatherService;

    $payload = [
        "search" => 'Kyoto'
    ];

    $request = new Request($payload);
    $result = $getWeatherClass->handle($request);

    $this->assertArrayHasKey('location', $result);
    $this->assertArrayHasKey('weather', $result);
});


test('cannot search city not in japan', function () {
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
});
