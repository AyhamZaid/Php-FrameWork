<?php

namespace App\Core;

class App
{

    protected static $registry = [

        // 'config' => [],
        // 'database' => $queryBuilder

    ];

    public static function bind($key , $value)
    {

        static::$registry[$key] = $value;

    }



    public static function get($key)
    {

        if (! array_key_exists($key, static::$registry)){
            throw new Exception("No {Key}in bound in a container .");
        }

        return static::$registry[$key];
        
    }

        

}