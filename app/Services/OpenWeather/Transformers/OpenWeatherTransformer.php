<?php
 
namespace App\Services\OpenWeather\Transformers;

use Carbon\Carbon;
use App\Services\OpenWeather\Transformers\ItemTransformer;

class OpenWeatherTransformer
{
    public static function transform($data): ?array
    {
        if (!empty($data['list'])) {
            $list = $data['list'];
            $weather = [];

            foreach ($list as $key => $item) {
                $itemTransformed = ItemTransformer::transform($item);
                $weather[$key] = $itemTransformed;
            }

            return $weather;
        }

        return ItemTransformer::transform($data);
    }
}