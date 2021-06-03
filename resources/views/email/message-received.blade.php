<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instalaciones de Fontaneria</title>
    <style>
        b{color: blue}
    </style>
</head>
<body>
    <p><b>Recibiste un mensaje de:</b> {{$averia->user->name}} - {{$averia->user->email}}</p>
    <p><b>Asunto: </b>Averia de fontaneria</p>
    <p><b>Contenido: </b><br/>
        Descripcion: {{$averia->descripcion}}<br/>
        Direccion: {{$averia->direccion}}<br/>
        Ciudad: {{$averia->ciudad}}</p>
</body>
</html>
