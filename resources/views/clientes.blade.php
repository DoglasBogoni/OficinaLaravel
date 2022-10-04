<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <ul>
        @foreach($clientes as $cliente)
            <li>{{ $cliente->nome_cliente}}</li>
            <li>{{ $cliente->email_cliente}}</li>
            <li>{{ $cliente->telefone_cliente}}</li>
            <br>
        @endforeach
    </ul>
</body>
</html>

