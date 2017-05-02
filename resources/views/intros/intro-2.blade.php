<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Apr 19 2017 14:31:58 GMT+0000 (UTC)  -->
<html data-wf-page="58f6cbbb1cfbf353876de003" data-wf-site="58d6377d8ca365092ba2436b">
<head>
  <meta charset="utf-8">
  <title>Summit Samurái</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/lucass-fresh-project-21ce23.webflow.css?key=<?php echo time();?>" rel="stylesheet" type="text/css">
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
<body class="body-3">
  <div>
    <div class="div-block-41">
      <a class="link-block-2 w-inline-block" href="#"><img class="image-42" src="images/logo-summit.svg">
      </a>
    </div>
  </div>
  <div class="div-block-37"><img class="image-40" src="images/personaje1.png">
  </div>
  <div class="div-block-39 intro-container">
    <div class="div-block-38 alternate-38">
      <div class="text-block-19">...</div>
      <div class="intro-2-text text-block-20"><span class="text-span-8"></span>Bienvenido nuevamente <span class="text-span-9">{{Auth::user()->first_name}}{{Auth::user()->last_name}}</span>
        <br>
        <p>
Primero, una reverencia (como corresponde a todo buen samurái)
Y después, todo lo que necesites ingresando aquí.
Desde cómo jugar hasta qué armas elegir y cómo controlar tus puntos. </p>
Desde conocer mejor la cultura japonesa hasta ver cómo vienen tus rivales.
Todo, para ayudarte a encontrar el camino al éxito. Y para que ganar no sea una lucha.</div>
      <div class="text-block-19">...</div><img class="image-43 rock-intro-2" src="images/rocks.png">
      @if(Auth::user()->avatar != null)
        <a class="intro-link w-inline-block" href="/home">
      @else
        <a class="intro-link w-inline-block" href="/avatar-hombre/{{Auth::user()->id}}">
      @endif
      <img class="image-41" src="images/button-ingresar.png">
      </a>
    </div><img class="image-44 alternate-44" src="images/elipse.png">
  </div>
  <div class="div-block-40">
    <div class="text-block-21">Toda la información aquí contenida es propiedad de Summit Agro Argentina S.A., prohibida su reproducción total o parcial, exhibición y/o uso sin expresa autorización de Summit Agro Argentina S.A.
      <br>
      Carlos Pellegrini 719, Piso 8 (C1009ABO), Cuidad de Buenos Aires Tel: (011) 3750-6750 - Copyright Summit Agro Argentina 2013. Todos los derechos reservados. <a href="/bases" style="color:white">Bases & Condiciones</a>
      <br>
      Si tenés alguna duda escribinos a <a style="color:white" href="mailto:summitsamurai@summit-agro.com.ar">summitsamurai@summit-agro.com.ar</a></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>