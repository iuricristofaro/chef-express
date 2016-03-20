<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gladcheff's</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/responsiveslides.css') }}" rel="stylesheet">



</head>
<body>
<section class="navbar">
    <div id="warpper">
        <div class="logomarca">
            <img src="imagem/logomarca.png" alt="">
        </div>

        <span id="btn-nav" onclick="toggleMenu()">Menu</span>

        <ul class="nav" id="nav">
            <li><a href="{{url('/')}}">home</a></li>
            <li><a href="#">perfil</a></li>
            <li><a href="{{url('blog')}}">blog</a></li>
            <li><a href="#">galerias</a></li>
            <li><a href="#">videos</a></li>
            <li><a href="#">contato</a></li>
        </ul>
    </div>
</section>
@yield('content')
</body>
</html>
