@extends('site.layout.basico')

@section('titulo','Contato')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layout._components.form_contato')  
                    <p>Nossa equipe analisará a sua mensagem e retornaremos o mas breve possivel</p>
                    <p>Nosso tempo médio de resposta é de 48 horas</p>                  
                @endcomponent
            </div>
        </div>  
    </div>
    @include('site.layout._partials.rodape')
@endsection