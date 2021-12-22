<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>

    <h1>{{$observacion}}</h1>
    <p>{{$body}}</p>
    @if ($documento)
    <a href="{{$documento}}">Documento</a>
    @endif
    
</body>
</html>