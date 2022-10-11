@extends('adminlte::page')

@section('content')
<h1>Clientes</h1>
<table class="table table-stripe table-bordered table-hover">
    <thead>
        <th>Nome do Cliente</th>
        <th>Email do Cliente</th>
        <th>Telefone do Cliente</th>
    </thead>

    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nome_cliente}}</td>
            <td>{{ $cliente->email_cliente}}</td>
            <td>{{ $cliente->telefone_cliente}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop