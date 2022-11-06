<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar correo con Laravel Framework</title>
</head>
<body>
    @if (session('success'))
        <li>{{ session('success') }}</li>
    @endif
    <form action="{{ route('enviar-correo') }}" method="POST">
        @csrf
        <label for="">Destinatario</label>
        <input type="email" name="destinatario" required>
        <label for="">Mensaje</label>
        <textarea name="mensaje" rows="3"></textarea>
        <button type="submit">Enviar correo</button>
    </form>
</body>
</html>
