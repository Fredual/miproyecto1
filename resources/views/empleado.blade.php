<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/estilo.css')}}">
    <title>Papito</title>
</head>
<body>
    <h1>Empresa PATITO</h1>
    <br>
    <p>Nombre del empleado {{$nombre}} trabajo {{$diast}} y se le pago {{$nomina}}</p>
    @if($nombre=="fredual")
        <h2>Hola IronMan</h2>
        <br>
        <img src="{{asset('fotos/niño.jpg')}}" weight=200 height=200>

    @elseif($nombre=="kath")
        <h2>Hola Kath</h2>
        <br>
        <img src="{{asset('fotos/niña.png')}}" weight=200 height=200>
    @else
    <h1>Sin foto</h1>
    @endif
    <br>
    <a href="{{route('salir')}}">Cerrar Nomina</a>
</body>
</html>