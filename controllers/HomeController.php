<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $params = ['param1' => 1234];
        return $this->render('home', $params);
    }

}