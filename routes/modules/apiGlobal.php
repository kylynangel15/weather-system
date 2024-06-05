<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/get-config-key', \App\Http\Controllers\Configs\ConfigController::class);
