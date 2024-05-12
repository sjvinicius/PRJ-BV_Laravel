<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function InitLoginController (){

        return view("application.login");
    }
    public function Authentic(){

        return view("application.products");
    }
}
