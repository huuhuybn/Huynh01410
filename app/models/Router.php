<?php

namespace Huuhu\Huynh01410\models;

class Router
{
    public $routes = [];
    public function setRoute($url, $action){
        // action là function
        $this->routes[$url]= $action;
    }

    public function get($url, $action){
        // action là function
        $this->routes[$url]['GET']= $action;
    }
    public function post($url, $action){
        // action là function
        $this->routes[$url]['POST']= $action;
    }

    public function handleRoute($url,$method){
        if (isset($this->routes[$url][$method])){
            $action = $this->routes[$url][$method];
            if (is_callable($action))
                $action();
            else {
                echo '404 Not Found function';
            }
        }else {
            echo '404 Not Found';
        }
    }

}