<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    <ul>
        {{-- li*4>a emmet --}}
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="{{ route('about') }}">Nosotros</a></li>
        <li><a href="<?= route('contact') ?>">Contacto</a></li>
    </ul>

    <h1>Inicio</h1>
</body>
</html>