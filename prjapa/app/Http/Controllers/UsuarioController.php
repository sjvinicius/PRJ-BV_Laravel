<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{


    public function index(){

    }
    public function GetUsuario(int $_usuarioid)
    {

        $user = (new Usuario)->query()
            ->where(["usuario_id" => $_usuarioid])
            ->firstorfail();

        return $user;
    }
}
