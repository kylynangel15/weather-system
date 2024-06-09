<?php

namespace Tests\Feature;

use Http;
use Tests\TestCase;
use App\Models\User;

class ConfigFeatureTest extends TestCase
{

    public function test_can_request_config()
    {
        $response = $this->get('/api/get-config-key');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'google_map_api',
            ]);
    }
}
