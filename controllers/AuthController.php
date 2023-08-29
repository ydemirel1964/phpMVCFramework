<?php
namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function loginHandler(Request $request)
    {
        return "Login handler";
    }
    public function register()
    {
        $this->setLayout('auth');
        return $this->render('register');
    }
    public function registerHandler(Request $request)
    {
        var_dump($request->getBody());
        return "Register handler";
    }
}