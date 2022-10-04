<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pecas</title>
</head>
<body>
<h1>Pecas</h1>
    <ul>
        @foreach($pecas as $peca)
            <li>{{ $peca->nome_peca}}</li>
            <li>{{ $peca->valor_peca}}</li>
            <li>{{ $peca->fabricante_peca}</li>
            <li>{{ $peca->nome_fornecedor}</li>
            <li>{{ $peca->nome_cliente}</li>
            <br>
        @endforeach
    </ul>  
</body>
</html>