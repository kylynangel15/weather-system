<?php

namespace App\Http\Controllers\Weathers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Weathers\WeatherService;

class WeatherController extends Controller {  
    
    public function __invoke(Request $request)
    {
        return (new WeatherService)->handle($request);
    }   
}