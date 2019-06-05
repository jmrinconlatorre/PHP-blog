<?php
namespace App\Config;

class Config{
    public function getDB(){
        return parse_ini_file(dirbase(__dir__).'/database.ini');
    }
}