<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Tue Apr 18 2017 14:33:12 GMT+0000 (UTC)  -->
<html data-wf-page="58f60d92d582b771e6e41d70" data-wf-site="58d6377d8ca365092ba2436b">
<head>
  <meta charset="utf-8">
  <title>Perfil</title>
  <meta content="Ranking Perfil" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/main.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
      }
    });
  </script>
  <script src="https://use.typekit.net/tiw7exn.js" type="text/javascript"></script>
  <script type="text/javascript">
    try{Typekit.load();}catch(e){}
  </script>
  <script src="js/modernizr.js" type="text/javascript"></script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
  <style>
    select {
    	-webkit-appearance: none !important;
    }
    /* do not group these rules */
    *::-webkit-input-placeholder {
      color: white;
    }
    *:-moz-placeholder {
      /* FF 4-18 */
      color: white;
    }
    *::-moz-placeholder {
      /* FF 19+ */
      color: white;
    }
    *:-ms-input-placeholder {
      /* IE 10+ */
      color: white;
    }
  </style>
</head>
<body style="background: url('/images/bg-profile.png') no-repeat top left;
background-size: 100%">
<div class="container-custom ranking">
  <div class="bblock-12-ranking div-block-12">
    <img class="image-15" src="images/logo-summit.svg">
    <ul class="unordered-list-2 w-list-unstyled">
      <li class="list-item-4"><a href="/home" class="link-6">INICIO</a>
      </li>
      <li class="list-item-4"><a href="/profile" class="link-6">MI PERFIL</a>
      </li>
      <li class="list-item-4"><a href="/logout" class="link-6">SALIR</a>
      </li>
    </ul>
  </div>
  <div class="user-header">
    <div class="user-data">
     @if (isset(Auth::user()->avatar))
     <div class="user-image">
      <img class="user-bg" src="/images/profile.svg" alt="">
      <img class="user-avatar" src="/avatars/{{Auth::user()->avatar->image}}">
      </div>
     @else
     <div class="user-image"><img src="images/personaje-2.png"></div>
     @endif

     <div class="div-block-22">
      <div class="text-block-9"><span class="text-span-2">Hola</span>
        <span class="text-span">
          @if (isset(Auth::user()->avatar->japanese))
          {{utf8_decode(Auth::user()->avatar->japanese)}}
          @else
          {{''}}
          @endif
        </span>
      </div>
      <div><a href="/users/{{Auth::user()->id}}/show">Modificar mis datos</a>
      </div>
    </div>
  </div>
  <div>
    <div class="text-block-10">Eres samurai
      @if(Auth::user()->points > $levels[0]->points)
      <strong>Nivel 04</strong>
      <?php $actual = 0 ?>
      @elseif(Auth::user()->points >= $levels[1]->points)
      <strong>Nivel 03</strong>
      <?php $actual = 1 ?>
      @elseif(Auth::user()->points >= $levels[2]->points)
      <strong>Nivel 02</strong>
      <?php $actual = 2 ?>
      @elseif(Auth::user()->points >= $levels[3]->points || Auth::user()->points <= $levels[3]->points)
      <?php $actual = 3 ?>
      <strong>Nivel 01</strong>
      @endif
      <span class="text-span-3">{{Auth::user()->points}} puntos</span>
    </div>
    @if(isset($levels[$actual - 1]))
    <div class="text-block-11">
      Necesitas
      <span>{{$levels[$actual - 1]->points - Auth::user()->points}}</span>
      puntos para alcanzar el siguiente nivel!
    </div>
    @endif()
  </div>
</div>
</div>
<div class="row-4 w-row container-custom ranking">
  <div class="column-4 w-col w-col-8">
    <div class="div-block-34">
      <div class="div-block-33">RANKING DE SAMURAIS</div>
      <div class="div-block-35">
        @foreach($users as $key => $value)
        <div class="row-5 w-row">
          <div class="w-col w-col-2">
            <div class="text-block-15">#{{$key + 1}}</div>
          </div>
          <div class="column-5 w-col w-col-7"><img class="image-36" src="images/user-pic.png">
            <div class="text-block-16">{{$value->first_name}} {{$value->last_name}}</div>
          </div>
          <div class="w-col w-col-3">
            <div class="text-block-17">samurai nivel 01</div>
          </div>
        </div>
        @endforeach
      </div><img class="image-37" src="images/elipse.png">
    </div>
  </div>
  <div class="column-6 w-col w-col-4"><a class="btn-success ranking w-button" href="/invoices">Sumar puntos</a>
    <div class="div-block-36"><img class="image-38" sizes="420px" src="images/background-info-intro.png" srcset="images/background-info-intro-p-500.png 500w, images/background-info-intro-p-800.png 800w, images/background-info-intro.png 1070w">
      <div class="text-block-18">Conoce los premios a tu alcance!</div>
      <a class="link-block w-inline-block" href="/awards"><img class="image-39" src="images/ver-premios.png">
      </a>
    </div>
  </div>
</div>
</div>
<div class="div-block-40">
    <div class="text-block-21">Toda la información aquí contenida es propiedad de Summit Agro Argentina S.A., prohibida su reproducción total o parcial, exhibición y/o uso sin expresa autorización de Summit Agro Argentina S.A.
      <br>Carlos Pellegrini 719, Piso 8 (C1009ABO), Cuidad de Buenos Aires Tel: (011) 3750-6750 - Copyright Summit Agro Argentina 2013. Todos los derechos reservados. Terminos &amp; Condiciones.</div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>