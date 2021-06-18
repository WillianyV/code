<h3>fornecedores</h3>

{{-- testa se a variavel existe antes de utiliza-la --}}
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome']}} <br/>
    Status:{{ $fornecedores[1]['status']}} <br/> 
    CNPJ: {{$fornecedores[1]['CNPJ'] ?? 'Dado não preenchido'}} 
    
@endisset

{{-- operador ternario
    condição ? se verdade : se falso
    --}}

