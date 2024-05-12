<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu; // Importe o modelo Menu, se aplicável

class HeaderController extends Controller
{
    public function index()
    {

        return view('layout', compact('menus'));
    }
}
