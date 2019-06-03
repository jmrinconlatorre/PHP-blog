<?php

namespace App;

class RouterManager
{
    public function dispatch(string $requestMethod, string $requestUri, \FastRoute\Dispatcher $dispatcher )
    {
            $route = $dispatcher->dispatch($requestMethod, $requestUri);
            switch($route[0]){
                case \FastRoute\Dispatcher::NOT_FOUND:
                   header("HTTP/1.0 404 Not Found");
                   echo "<h1>NOT FOUND </h1>";
                   break;
            }
    }
}