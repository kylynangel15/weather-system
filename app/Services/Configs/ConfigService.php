<?php

namespace App\Services\Configs;



class ConfigService
{
    public function handle($request)
    {
        return [
            'google_map_api' => config('services.google_map.key'),
        ];
    }
}
