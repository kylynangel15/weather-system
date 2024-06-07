<?php
 
namespace App\Services\OpenWeather\Transformers;

use Carbon\Carbon;
 
class ItemTransformer
{
    public static function transform(array $item)
    {
        $date = Carbon::parse($item['dt'])->setTimezone(config('app.timezone'));
        return [
            'date' => $date->format('F d, Y'),
            'date_short' => $date->format('m/d/Y'),
            'time' => $date->format('h:i A'),
            'day' => $date->format('l'),
            'day_short' => $date->format('D'),
            'temperature' => (float)$item['main']['temp'],
            'feels_like' => $item['main']['feels_like'],
            'pressure' => $item['main']['pressure'],
            'humidity' => $item['main']['humidity'],
            'wind_speed' => $item['wind']['speed'],
            'weather_main' => $item['weather']['0']['main'],
            'weather_desc' => $item['weather']['0']['description'],
        ];
    }
}