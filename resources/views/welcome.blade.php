<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--FACEBOOK-->
        <meta name="description" content="Uno Y Veinte official Web Site"> <!-- ˜150 chars -->
        <meta property="og:title" content="Uno Y Veinte">
        <meta property="og:description" content="Unoyveinte official Web Site"> <!-- ˜300 chars -->
        <meta property="og:site_name" content="Unoyveinte">
        <meta property="og:locale" content="es_CL">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://unoyveinte.nicolasfredes.cl">
        <meta property="og:image" content="{{ url('/img/unoyveinte_small_32x32.png') }}"> <!-- 200x200px - 1200x1200px -->
        <meta property="og:image:secure_url" content="https://s2.latercera.com/wp-content/uploads/2018/08/UNIVERSIDAD-DE-CHILE-1-700x450.jpg" />

        <meta name="robots" content="NOODP">


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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <img src="/img/unoyveinte_red.png" width="70%">
                </div>
            </div>
        </div>
    </body>
</html>
