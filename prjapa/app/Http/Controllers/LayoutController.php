<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LayoutController extends Controller
{
    public function index()
    {
        return view("application.login");
    }
}
