<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function masInformacion(){
        return view('paginas.masInformacion');
    }
}
