<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome'=> 'fornecedor 1', 
                'status'=> 'N', 
                'CNPJ' => '00.000.000/0000.00'],
            1 => [
                'nome'=> 'fornecedor 2', 
                'status'=> 'S']
        ];

        $msg = isset($fornecedores[0]['CNPJ']) ? 'Cnpj informado' : 'CNPJ não informado';
        echo $msg;
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
