@inject('levels', '\App\Levels')
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Tue Apr 25 2017 15:10:12 GMT+0000 (UTC)  -->
<html data-wf-page="58ff514b3eae93580fa179c3" data-wf-site="58d6377d8ca365092ba2436b">
<head>
  <meta charset="utf-8">
  <title>Summit Samurái</title>
  <meta content="Niveles" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/niveles.css" rel="stylesheet" type="text/css">
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
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
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
<?php $level = $levels->all();?>
<body class="body-8"><img class="image-48" sizes="100vw" src="/images/header-houses.png" srcset="images/header-houses-p-500.png 500w, images/header-houses-p-800.png 800w, images/header-houses-p-1080.png 1080w, images/header-houses-p-1600.png 1600w, images/header-houses.png 1920w">
  <div class="div-block-12">
    <div class="div-block-56"><img class="image-15" src="/images/logo-summit.svg">
    </div>
    <ul class="unordered-list-2 w-list-unstyled">
      <li class="list-item-4"><a href="/home" class="link-6">INICIO</a>
      </li>
      <li class="list-item-4"><a href="/profile" class="link-6">MI PERFIL</a>
      </li>
      <li class="list-item-4"><a href="http://logout" class="link-6">SALIR</a>
      </li>
    </ul>
  </div>
  <div class="div-block-57">
    <div class="div-block-58">
      <div class="div-block-59"><img class="image-49" height="104" src="/images/ranking-title.png" width="445">
      </div>
      <div class="div-block-60"><img class="image-52" sizes="66vw" src="/images/montana.png" srcset="images/montana-p-500.png 500w, images/montana-p-800.png 800w, images/montana.png 873w">
        <div class="row-8 w-row">
          <div class="column-12 w-col w-col-3"><img height="70" src="/images/nivel-4.png" width="75">
          </div>
          <div class="w-col w-col-9">
            <div class="text-block-27">NIVEL 04</div>
            <div class="text-block-28">Ultimo Samurai</div>
            <div class="text-block-29">Arma de entrenamiento: Katana Moderna</div>
            <div class="text-block-29">Cantidad de puntos necesarios: {{$level[3]->points}}</div>
          </div>
        </div>
      </div>
      <div class="alternate div-block-60">
        <div class="row-8 w-row">
          <div class="column-12 w-col w-col-3"><img height="70" src="/images/nivel-3.png" width="115">
          </div>
          <div class="w-col w-col-9">
            <div class="text-block-27">NIVEL 03</div>
            <div class="text-block-28">Samurai con armadura clasica</div>
            <div class="text-block-29">Arma de entrenamiento: Katana&nbsp;</div>
            <div class="text-block-29">Cantidad de puntos necesarios: {{$level[2]->points}}</div>
          </div>
        </div>
      </div>
      <div class="div-block-60">
        <div class="row-8 w-row">
          <div class="column-12 w-col w-col-3"><img height="70" src="/images/nivel-2.png" width="115">
          </div>
          <div class="w-col w-col-9">
            <div class="text-block-27">NIVEL 02</div>
            <div class="text-block-28">Samurai con armadura simple</div>
            <div class="text-block-29">Arma de entrenamiento: Bokken</div>
            <div class="text-block-29">Cantidad de puntos necesarios: {{$level[1]->points}}</div>
          </div>
        </div>
      </div>
      <div class="alternate div-block-60">
        <div class="row-8 w-row">
          <div class="column-12 w-col w-col-3"><img height="70" src="/images/nivel-1.png" width="115">
          </div>
          <div class="w-col w-col-9">
            <div class="text-block-27">NIVEL 01</div>
            <div class="text-block-28">Ultimo Samurai</div>
            <div class="text-block-29">Arma de entrenamiento: Bokken</div>
            <div class="text-block-29">Cantidad de puntos necesarios: {{$level[0]->points}}</div>
          </div>
        </div>
      </div>
    </div><img class="image-53" src="/images/elipse.png"><img class="image-54" src="/images/rocks.png">
  </div>
  <div class="div-block-40">
    <div class="text-block-21">Toda la información aquí contenida es propiedad de Summit Agro Argentina S.A., prohibida su reproducción total o parcial, exhibición y/o uso sin expresa autorización de Summit Agro Argentina S.A.
      <br>
      Carlos Pellegrini 719, Piso 8 (C1009ABO), Cuidad de Buenos Aires Tel: (011) 3750-6750 - Copyright Summit Agro Argentina 2013. Todos los derechos reservados. <a href="/bases" style="color:white">Terminos &amp;Condiciones.</a>
      <br>
      Si tenes alguna duda escribinos a <a style="color:white" href="mailto:summitsamurai@summit-agro.com.ar">summitsamurai@summit-agro.com.ar</a></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="/js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>