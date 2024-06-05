<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ConvertHelper
{
    public static function convertToTitleCase($string) 
    {
        $words = preg_split('/[^a-zA-Z0-9]+/', $string);
        // Capitalize each word
        $words = array_map('ucwords', $words);
        // Join the words with a space
        return implode(' ', $words);
    }

    public static function convertToParams($array, $exclude) 
    {
        if (!(is_string($exclude) || 
            is_int($exclude) || 
            is_array($exclude))
        ) {
            return ValidationException::withMessages(['message' => 'exclude must be a string or an array']);
        } 
        
        if (is_string($exclude) || is_int($exclude)  ) {
            unset($array[$exclude]);
        }

        if (is_array($exclude)) {
            foreach ($exclude as $item) {
                unset($array[$item]);
            }
        } 

       return http_build_query($array); 
     }

    
}
