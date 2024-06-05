<?php
 
namespace App\Services\Geoapify\Transformers;
 
use Illuminate\Http\Request;
 
class GeoapiTransformer
{
    public static function transform(array $data): array
    {
        return [
            'country' => $data['country'],
            'country_code' => $data['country_code'],
            'city' => $data['city'],
            'lon' => $data['lon'],
            'lat' => $data['lat'],
        ];
    }
}