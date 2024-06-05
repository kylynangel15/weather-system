<?php

namespace App\Handlers;

use Illuminate\Http\Client\Response;

class ApiErrorHandler
{
    /**
     * Handle a failed API request.
     *
     * @param  \Illuminate\Http\Client\Response  $response
     * @return void
     */
    public static function handle(Response $response)
    {
        if ($response->failed()) {
            abort($response->getStatusCode(), $response->getReasonPhrase());
        }
    }
}