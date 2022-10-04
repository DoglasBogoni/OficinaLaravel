<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
</head>
<body>
    <h1>Fornecedor</h1>
    <ul>
        @foreach($fornecedores as $fornecedor)
        <li>{{ $fornecedor->nome_cliente}}</li>
            <li>{{ $fornecedor->email_cliente}}</li>
            <li>{{ $fornecedor->telefone_cliente}}</li>
            <br>
        @endforeach
    </ul>
   
</body>
</html>
