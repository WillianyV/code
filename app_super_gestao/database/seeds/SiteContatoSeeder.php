<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $site_contato = new SiteContato();
        $site_contato->nome = 'Google';
        $site_contato->telefone = '38772525';
        $site_contato->email = 'google@gmail.com';
        $site_contato->motivo_contato = 1;
        $site_contato->mensagem = 'Oi, tudo bom com você? Bom São João';
        $site_contato->save();*/
  
        //PHP 8: MAIS NÃO FUNCIONOU
      //  \App\SiteContato::factory()->count(100)->create();
      //PHP 7:
        factory(SiteContato::class, 100)->create();
    }
}
