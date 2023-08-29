<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class ContactController extends Controller
{
    public function index()
    {
        return $this->render("contact");
    }

    public function create(Request $request)
    {
        $body =  $request->getBody();


        return 'postContact executed';
    }
}