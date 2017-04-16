<!DOCTYPE html>
<html lang="">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACCUEIL</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=" {{ asset('css/bootstrap/bootstrap.css') }} ">
    <link rel="stylesheet" href=" {{asset('css/accueil.css')}} ">


    <link rel="stylesheet" type="text/css" href={{asset('sliderengine/amazingslider-1.css')}}>

</head>
    <body>


    @yield('content')

        <!-- jQuery -->
        <script src={{asset("js/jquery.js") }}></script>
        <!-- Bootstrap JavaScript -->
        <script src={{asset("js/bootstrap.js") }}></script>

        <script src={{asset("js/accueil.js") }}></script>
        <script src={{asset("sliderengine/amazingslider.js") }}></script>
        <script src={{asset("sliderengine/initslider-1.js") }}></script>
    </body>
</html>