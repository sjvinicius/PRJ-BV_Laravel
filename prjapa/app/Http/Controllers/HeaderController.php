<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu; // Importe o modelo Menu, se aplicável

class HeaderController extends Controller
{
    public function index()
    {
        $menus = Menu::join("menuacesso", function ($join) {
            $join->on('menuacesso.MENU_ID', '=', 'menu.MENU_ID');
            //  ->on('menuacesso.usuario_id', '=', 'usuarios.id');
        })
            ->select("menu.MENU")
            ->get();

        return view('header', compact('menus'));
    }
}
