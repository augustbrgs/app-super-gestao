<h2>Fornecedor</h2>

{{-- comentario da formatação blade.php --}}

@php
    //echo 'utulizando codificação em php puro';
    /*
if(){

}elseif(){

}else(){

}*/
@endphp
@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual:{{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Vazio' }}
        <br>
        TELEFONE: ({{ $fornecedor['ddd'] }}) {{ $fornecedor['telefone'] }}
        <hr>
    @empty
        Não existem fornecedores
    @endforelse

@endisset
