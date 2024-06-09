<?php

namespace Tests\Feature;

use Tests\TestCase;

class WeatherFeatureTest extends TestCase
{

    public function test_can_request_weather()
    {
        $response = $this->get('/api/get-weather',[
            'search' => 'Yokohama',
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'weather',
            ]);
    }
}
