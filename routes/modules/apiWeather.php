<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/get-weather', \App\Http\Controllers\Weathers\WeatherController::class);
