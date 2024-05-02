<?php

namespace Controllers;

use Vendor\Mvc\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('index');
    }

    public function login()
    {
        $user = ["User"=>"mojtaba"];
        $this->render('login',['user'=>$user]);
    }
}