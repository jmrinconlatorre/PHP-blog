<?php

namespace APP;

class SessionManager{

    public static function put($variable,$value){
        $_SESSION[$variable]= serialize($value);
    }

    public static function get($variable){
        return unserialize($SESSION($variable));
    }

    public static function remove(string $variable){
        unset($SESSION[$variable]);
    }
}