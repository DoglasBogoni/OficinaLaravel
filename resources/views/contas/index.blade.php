    @extends('adminlte::page')

    @section('content')
    <h1>Contas</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome do Cliente</th>
            <th>Valor</th>
            <th>Data do Cadastro</th>
            <th>Data do Vencimento</th>
        </thead>

        <tbody>
            @foreach($contas as $conta)
            <tr>
                <td>{{ $conta->nome_cliente}}</td>
                <td>{{ $conta->valor}}</td>
                <td>{{ $conta->dt_cadastro}}</td>
                <td>{{ $conta->dt_vencimento}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @stop
