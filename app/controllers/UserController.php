<?php

namespace App\controllers;

use App\models\User;
use app\validation\Validator;

class UserController extends controller {

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3'],
            'password' => ['required']
        ]);

        $user = (new User($this->getDB()))->getByUsername($_POST['username']);

        if(password_verify($_POST['password'], $user->password)){

           $_SESSION['auth'] =(int) $user->admin;
           return header('Location: /admin/posts?success=true');
        } else {
            return header('Location : /login');
        }
    }

    public function logout()
    {
        session_destroy();

        return header('Location: /');
    }
}