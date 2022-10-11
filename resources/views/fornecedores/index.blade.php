@extends('adminlte::page')

@section('content')
<h1>Fornecedores</h1>
<table class="table table-stripe table-bordered table-hover">
    <thead>
        <th>Nome do Fornecedor</th>
        <th>Email do Fornecedor</th>
        <th>Telefone do Fornecedor</th>
    </thead>

    <tbody>
        @foreach($fornecedores as $fornecedor)
        <tr>
            <td>{{ $fornecedor->nome_fornecedor}}</td>
            <td>{{ $fornecedor->email_fornecedor}}</td>
            <td>{{ $fornecedor->telefone_fornecedor}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop