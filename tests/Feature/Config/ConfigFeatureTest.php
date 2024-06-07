<?php

namespace Tests\Feature;

use App\Handlers\ApiResultHandler;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;


it('can request config key information', function () {

    $url = config('app.url')."/api/get-config-key";
    $response = Http::get($url);

    $this->assertEquals(200, $response->getStatusCode());
    $this->assertArrayHasKey('google_map_api', $response);
});
