@extends('adminlte::page')

@section('content')
<h1>Peças</h1>
<table class="table table-stripe table-bordered table-hover">
    <thead>
        <th>Nome da Peça</th>
        <th>Valor da Peça</th>
        <th>Fabricante</th>
        <th>Nome do Fornecedor</th>
        <th>Nome do Cliente</th>
    </thead>
    @foreach($pecas as $peca)
    <tr>
        <td>{{ $peca->nome_peca}}</td>
        <td>{{ $peca->valor_peca}}</td>
        <td>{{ $peca->fabricante_peca}}</td>
        <td>{{ $peca->nome_fornecedor}}</td>
        <td>{{ $peca->nome_cliente}}</td>
    </tr>
    @endforeach
    </body>
</table>
@stop