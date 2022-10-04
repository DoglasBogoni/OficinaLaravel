<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servico</title>
</head>
<body>
<h1>Servicos</h1>
    <ul>
        @foreach($servicos as $servico)
            <li>{{ $servico->valor_servico}}</li>
            <li>{{ $servico->nome_cliente}}</li>
            <li>{{ $servico->descricao_servico}</li>
            <li>{{ $servico->observacao_servico}</li>
            <li>{{ $servico->dt_servico}</li>
            <br>
        @endforeach
    </ul>
</body>
</html>

