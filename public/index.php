<?php

ini_set('max_execution_time',0);
require_once  dirname(__DIR__).'/vendor/autoload.php';
use App\kernel;

session_start();//llamamos a la sesion

$kernel = new kernel();
$kernel->init();