<h3>fornecedores</h3>

{{-- testa se a variavel existe antes de utiliza-la --}}
@isset($fornecedores)
    @forelse  ($fornecedores as $indice => $fornecedor)
        Interação atual: {{$loop->iteration}} <br/>
        Fornecedor: {{ $fornecedor['nome']}} <br/>
        Status:{{ $fornecedor['status']}} <br/> 
        CNPJ: {{$fornecedor['CNPJ'] ?? 'Dado não preenchido'}} <br/> 
        Telefone: ({{$fornecedor['ddd'] ?? 'Dado não preenchido'}}) {{$fornecedor['telefone'] ?? 'Dado não preenchido'}} <br/> 
        Cidade: 
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo -SP
                @break
            @case('81')
                Recife - PE    
                @break
            @case('87')
                Floresta - PE  
            @break    
            @default
            Estado não identificado
        @endswitch
        <br/>
        @if ($loop->first)
            É a primeira Interação
        @endif
        @if ($loop->last)
            É a ultima interação
            <hr>
            Total de registros: {{$loop->count}}            
        @endif
        <hr>
        
        @empty
        Não exite funcionarios cadastrados
   @endforelse
@endisset


    
