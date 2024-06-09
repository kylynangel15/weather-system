<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\Configs\ConfigService;

class GetConfigUnitTest extends TestCase
{

    public function test_unit_can_get_config()
    {
        $getConfig = new ConfigService();

        $response = $getConfig->handle();

        $this->assertArrayHasKey('google_map_api', $response);

    }
}
