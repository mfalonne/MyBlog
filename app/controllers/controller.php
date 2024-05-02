<?php

namespace App\controllers;

use Database\DBConnection;
use Twig\Environment;

abstract class Controller {

    protected $db;
    protected $twig;

    public function __construct(DBConnection $db, Environment $twig)
    {
        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }
        $this->db = $db;
        $this->twig = $twig;
    }

    protected function view(string $path, array $params = [])
    {
        echo $this->twig->render(str_replace('.', '/', $path) . '.twig', $params);
    }

    protected function getDB()
    {
        return $this->db;
    }

    protected function isAdmin()
    {
        if(isset($_SESSION['auth']) && $_SESSION['auth'] === 1) {
            return true;
        } else {
            return header('Location: ./login');
        }
    }
}