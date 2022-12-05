<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function __invoke(){
        return view('consulta');
    }
}
