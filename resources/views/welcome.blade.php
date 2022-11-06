<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar correo con Laravel Framework</title>
</head>
<body>
    <form action="{{ route('enviar-correo') }}" method="POST">
        @csrf
        <button type="submit">Enviar correo</button>
    </form>
</body>
</html>
