<?php

namespace App\Http\Controllers\Tablero;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('tablero.usuarios.index', compact('usuarios'));
    }
}
