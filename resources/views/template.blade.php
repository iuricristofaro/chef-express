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
<section id="slide">
    <div id="gallery">
        <ul class="slides" id="slider1">
            <li><img src="imagem/image1.png" alt="image01" /></li>
            <li><img src="imagem/image2.png" alt="image02" /></li>
            <li><img src="imagem/image3.png" alt="image03" /></li>
            <li><img src="imagem/image4.png" alt="image04" /></li>
            <li><img src="imagem/image5.png" alt="image05" /></li>
        </ul>
    </div>
</section>
<section id="perfil">
    <h1>perfil</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione iusto soluta dolore officia alias, voluptates sequi repudiandae temporibus, nostrum eligendi similique repellat, sint ducimus, officiis! Ea suscipit voluptatem dolore, dicta.</p>
</section>
<section id="galerias">
    <h1>galerias</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut iusto quisquam ea exercitationem mollitia at commodi, voluptatibus ipsa asperiores aut in tempora facilis! Magni unde dolorem optio repudiandae quos animi!</p>
    <article class="galeira-slider">
        <ul class="slider columns">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </article>
</section>
<section id="videos">
    <h1>videos</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut explicabo amet optio, dolorum dolorem veniam debitis, deleniti modi blanditiis minima quae nisi, iure accusantium culpa fugit, eligendi. Nam, cumque, quaerat.</p>
    <article class="video-slider">
        <ul class="video columns">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </article>
</section>
<section id="contato">
    <h1>contato</h1>
    <article id="formulario">
        <form id="form-contact" method="POST" action="mailchimp-contact.php">
            <div class="input">
                <label for="name">Name</label>
                <input type="text" id="name" name="name"  required>
            </div>
            <div class="input">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email"  required>
            </div>
            <div class="input">
                <label for="assunto">Assunto</label>
                <input type="text" id="assunto" class="assunto" name="assunto" maxlength="13" required>
            </div>
            <div class="input txt">
                <label for="message">Mensagem</label>
                <textarea id="msg" name="msg" cols="10" rows="5"  required></textarea>
            </div>
            <div class="buttons">
                <span class="form-message"></span>
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </article>
</section>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/responsiveslides.js')}}"></script>
<script type="text/javascript" src="{{asset('js/funcoes.js')}}"></script>
</body>
</html>
