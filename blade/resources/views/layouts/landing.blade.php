<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>
        @yield('titulo')
    </title>
    <link rel="stylesheet" href="estilos.css">
    <script src="scripts.js"></script>
    <meta name="description" content="INSTITUTO DE EDUCACIÓN SUPERIOR TECNOLÓGICO PÚBLICO MARIANO BONIN DE MONZÓN">
    <meta name="keywords" content="INSTITUTO DE EDUCACIÓN SUPERIOR TECNOLÓGICO PÚBLICO MARIANO BONIN DE MONZÓN, CARRERAS TECNICAS, JOVENES, CARRERAS PROFESIONALES, PROGRAMA DE ESTUDIOS, ENFERMERIA TECNICA, ENFERMERÍA">
</head>
<body>

    @include('layouts._partials.menu')
    @yield('cuerpo')
</body>
</html>