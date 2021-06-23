<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 3 formas de inserção:

        //instanciando o obejto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor100';
        $fornecedor->uf = 'PE';
        $fornecedor->email = 'Fornecedor100@gmail.com';
        $fornecedor->save();

        //utilizando o metodo create
        Fornecedor::create([
            'nome' => 'Fornecedor200',
            'uf' => 'PE',
            'email' =>'Fornecedor200@gmail.com'
        ]);

        //insert
        /*
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor300',
            'uf' => 'PE',
            'email' =>'Fornecedor300@gmail.com'
        ]);
        */
    }
}
