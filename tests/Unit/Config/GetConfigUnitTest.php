<?php

namespace Tests\Feature;

use App\Services\Configs\ConfigService;

test('can get config', function () {
    $getConfig = new ConfigService();

    $result = $getConfig->handle();

    $this->assertArrayHasKey('google_map_api', $result);
});