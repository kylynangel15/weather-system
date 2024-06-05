<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/{any}', function () {
    $indexView = env('APP_ENV') == 'local' ? 'dev' : 'index';
    return view($indexView);
})->where('any', '^(?!admin)(?!nova.+).*$')->name('frontend');
