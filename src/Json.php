<?php

namespace ChihYuLin66\LaravelJsonHelper;

class Json
{
    /**
     * encode
     * @return string|false
     */
    public static function encode($value, $flags = 0, $depth = 512)
    {
        return json_encode($value, $flags, $depth);
    }

    /**
     * decode
     * 
     * @return mixed
     */
    public static function decode($json, $associative = null, $depth = 512, $flags = 0)
    {
        return json_decode($json, $associative, $depth, $flags);
    }
    
}
