<?php

namespace App;

use App\Exception\RouteNotFoundException;

class App
{
    private static DB $db;
    public function __construct(protected Router $router, protected array $request, protected Config $config)
    {
        static::$db = new DB($this->config->db ?? []);
    }
    public static function db(): DB {
        return static::$db;
    }
    public function run(){
        try {
            echo $this->router->resolve(
                $this->request['uri'],
                strtolower( $this->request['method']
                )
            );
        }catch (RouteNotFoundException) {
            //    header('HTTP/1.1 404 Not Found');
            http_response_code(404);
            echo \App\View::make('error/404');
        }
    }
}