<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--FACEBOOK-->
        <meta name="description" content="Unoyveinte Web Site"> <!-- ˜150 chars -->
        <meta property="og:title" content="Uno Y Veinte">
        <meta property="og:description" content="Unoyveinte Web Site"> <!-- ˜300 chars -->
        <meta property="og:site_name" content="Unoyveinte">
        <meta property="og:locale" content="es_CL">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://unoyveinte.nicolasfredes.cl">
        <meta property="og:image" content="{{ url('/img/unoyveinte_red.png') }}"> <!-- 200x200px - 1200x1200px -->


        <link rel="shortcut icon" type="image/png" href="/img/unoyveinte_small_32x32.png"/>
        <link rel="shortcut icon" type="image/png" href="/img/unoyveinte_small_32x32.png"/>

        <title>UnoYVeinte</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #222222;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="/img/unoyveinte_red.png" width="70%">
                </div>
            </div>
        </div>
    </body>
</html>
