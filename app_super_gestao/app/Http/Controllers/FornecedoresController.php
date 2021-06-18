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
                'CNPJ' => '00.000.000/0000.00',
                'ddd' => '87',
                'telefone' => '999999999'],
            1 => [
                'nome'=> 'fornecedor 2', 
                'status'=> 'S',
                'CNPJ' => null,
                'ddd' => '81',
                'telefone' => '999999999'],
            2 => [
                'nome'=> 'fornecedor 3', 
                'status'=> 'S',
                'CNPJ' => null,
                'ddd' => '11',
                'telefone' => '999999999']
        ];

        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
