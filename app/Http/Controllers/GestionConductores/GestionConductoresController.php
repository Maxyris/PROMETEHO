<?php

namespace App\Http\Controllers\gestionConductores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;


class GestionConductoresController extends Controller
{
    
    public function index()
    {
        $empresa_id = Auth::user()->empresa_id;

        $usuario_id = Auth::user()->id;

        $choferes = User::where('rol_id', 2)->get();

        return view('gestionConductores.listarConductores')->with('choferes',$choferes);
    }

}