<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas</title>
</head>
<body>
    <h1>Contas</h1>
    <ul>
        @foreach($contas as $conta)
            <li>{{ $conta->nome_cliente}}</li>
            <li>{{ $conta->valor}}</li>
            <li>{{ $conta->dt_cadastro}}</li>
            <li>{{ $conta->dt_vencimento}}</li>
            <br>
        @endforeach
    </ul>
</body>
</html>
