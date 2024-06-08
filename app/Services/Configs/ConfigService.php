<?php

namespace App\Services\Configs;



class ConfigService
{
    public function handle()
    {
        return [
            'google_map_api' => config('services.google_map.key'),
        ];
    }
}
