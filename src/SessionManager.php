<?php

namespace APP;

class SessionManager{

    public function put($variable,$value){
        $_SESSION[$variable]= serialize($value);
    }

    public function get($variable){
        return unserialize($SESSION($variable));
    }

    public function remove(string $variable){
        unset($SESSION[$variable]);
    }
}