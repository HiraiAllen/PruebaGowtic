<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroColaborador;

class RegistroColaboradorController extends Controller
{

    public function index(Request $request)
    {
        $registroColaborador = RegistroColaborador::all();
        return response()->json($registroColaborador);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function store(Request $request){
        $registroColaborador = new RegistroColaborador();

        $registroColaborador->codigo_colaborador = $request->codigo_colaborador;

        $registroColaborador->save();
    }
}
