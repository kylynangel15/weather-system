<?php

namespace App\Handlers;

use Illuminate\Http\Client\Response;

class ApiResultHandler
{
    /**
     * Handle a failed API request.
     *
     * @param  \Illuminate\Http\Client\Response  $response
     * @return void
     */
    public static function handle(Response $response): ?array
    {
        $content = $response->getBody()->getContents();
        $results = json_decode($content, true);
        
        return $results;
    }
}