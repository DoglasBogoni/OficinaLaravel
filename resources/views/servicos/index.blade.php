@extends('adminlte::page')

@section('content')
<h1>Serviço</h1>
<table class="table table-stripe table-bordered table-hover">
    <thead>
        <th>Valor do Serviço</th>
        <th>Nome do Cliente</th>
        <th>Descrição do Serviço</th>
        <th>Observação do Serviço</th>
        <th>Data do Serviço</th>
    </thead>

    <tbody>
        @foreach($servicos as $servico)
        <tr>
            <td>{{ $servico->valor_servico}}</td>
            <td>{{ $servico->nome_cliente}}</td>
            <td>{{ $servico->descricao_servico}}</td>
            <td>{{ $servico->observação_servico}}</td>
            <td>{{ $servico->dt_servico}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
