<!DOCTYPE html>
<script>
    function redirectHome() {
        window.location.href = "http://127.0.0.1:8000/";
    }
</script>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login/iniciarsesion.css') }}">
</head>
    <body>
        <div id="contenedor-main">
            <div id="subcont">
                <h1>Iniciar sesión</h1>
            </div>
        </div>
        @if (Route::has('login'))
            @auth
                <a id="hometext" href="{{ url('/home') }}">Home</a>
            @else
                <a id="login" href="{{ route('login') }}">Login</a>
            @endauth
        @endif
        </div>
    </body>
</html>