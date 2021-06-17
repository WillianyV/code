<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function exibirMsg(){
        return view('site.contato');
    }
}
