<?php

namespace App;

use Illuminate\Support\Facades\Cache;

class Settings
{
    /**
     * Fetch Cached settings from database
     *
     * @return string
     */
    public static function get($key)
    {
        return Cache::get('AppSettings')->where('key', $key)->first()->value;
    }
}

?>