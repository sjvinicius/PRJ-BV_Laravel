<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LayoutController extends Controller
{
    public function index()
    {

        $produto = Produto::all();

        return view("system.layout");
    }
}
