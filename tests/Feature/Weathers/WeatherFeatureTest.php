<?php

namespace Tests\Feature;

use App\Handlers\ApiResultHandler;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;


it('can request weather information', function () {

    $url = config('app.url')."/api/get-weather";
    $response = Http::get($url, [
        'search' => 'Yokohama',
    ]);

    $this->assertEquals(200, $response->getStatusCode());
    $this->assertArrayHasKey('weather', $response);
});
