<?php

namespace Router;

use Database\DBConnection;

class Route {
    public $path;
    public $action;
    public $matches;

    public function __construct($path, $action)
    {
        $this->path = trim($path, '/');
        $this->action = $action;
    }

    public function matches(string $url)
    {
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $pathToMatch = "#^$path$#i";
        if (preg_match($pathToMatch, $url, $matches)) {
            $this->matches = $matches;
            return true;
        } else {
            return false;
        }
    }

    public function execute()
{
    global $twig; 

    if (is_array($this->action)) {
        $controllerClass = $this->action[0];
        $controller = new $controllerClass(new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD), $twig);
        $method = $this->action[1];
    } else {
        $params = explode('@', $this->action);
        $controllerClass = $params[0];
        $controller = new $controllerClass(new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD), $twig);
        $method = $params[1];
    }

    if (!empty($this->matches)) {
        array_shift($this->matches);  
        return call_user_func_array([$controller, $method], $this->matches);
    } else {
        return $controller->$method();
    }
}
}