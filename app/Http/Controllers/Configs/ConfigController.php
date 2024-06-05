<?php

namespace App\Http\Controllers\Configs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Configs\ConfigService;

class ConfigController extends Controller {  
    
    public function __invoke(Request $request)
    {
        return (new ConfigService)->handle($request);
    }
}