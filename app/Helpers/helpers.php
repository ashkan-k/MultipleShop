<?php

if (!function_exists('Slugify')) {
    function Slugify($string)
    {
        return preg_replace('/\s+/u', '-', trim($string));
    }
}

if (!function_exists('AddCache')) {
    function AddCache($key, $data = [])
    {
        \Illuminate\Support\Facades\Cache::forever($key, $data);
        return $data;
    }
}

if (!function_exists('GetCache')) {
    function GetCache($key)
    {
        return \Illuminate\Support\Facades\Cache::get($key, []);
    }
}
