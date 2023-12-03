<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenido</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .center-element{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .background{
                padding: 16px;
            }
            .centrado{
                width: 80%;
                text-align: center;
                padding: 20px;
            }
            a{
                text-decoration: none;
                color: black;
                font-weight: bold;
                font-size: 20px;
            }
            a:hover {
                color: goldenrod;
            }
            .mitad {
                flex: 1;
                padding: 10px;
            }
            .vertical{
                flex-direction: column;
            }
            .centrar-texto{
                text-align: center;
            }
        </style>
    </head>
    <body >
        <div class="center-element">
            <img src="{{ asset('img/portada.jpeg') }}" width="800px" height="300px">
        </div>

        <div class="center-element">
            <div class="center-element background centrado">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="">Inicio</a>
                    @else
                    <div class="mitad vertical">
                        <a href="{{ route('login') }}" class="">Iniciar Sesion</a>
                    </div>
                        @if (Route::has('register'))
                        <div class="mitad vertical">
                            <a href="{{ route('register') }}" class="">Registrarse</a>
                        </div>  
                        @endif
                    @endauth
            @endif
            </div>
        </div>

        <div class="centrar-texto">
            <h1>¡Bienvenid@s a nuetro sistema de Centro Medico !</h1>
        </div>
           
    </body>
</html>
