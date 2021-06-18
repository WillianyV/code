<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
        //passar paramentros po array assosiativo:
        //return view('site.teste',['p1'=>$p1,'p2'=>$p2]);

        //metodo compacte = faz a mesma coisa do array (gostei mais desse)
        return view('site.teste',compact('p1','p2')); 

       //os metodos fazem as mesams coisas (passar paramentros) para view
       //no with passa o nome da var no view e o nome do paramentro q está recebendo
       //return view('site.teste')->with('p1',$p1)->with('p2',$p2); 
    }
}
