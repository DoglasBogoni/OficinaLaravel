<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas</h1>
    <ul>

    @foreach($conta as $cont)
    <li>{{ $cont->nomeconta }} </li>
    <li>{{ $cont->dt_conta }} </li>
    <br>
    @endforeach
    </ul>
</body>
</html>
