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
  <link href="/css/niveles.css?key=<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <link rel="stylesheet" href="{{asset('bower_components/jquery-modal/jquery.modal.css')}}">
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
 @include('partials.header')
 <div class="div-block-57">
  <div class="div-block-58">
    <div class="div-block-59"><img class="image-49" height="104" src="/images/ranking-title.png" width="445">
    </div>
    <div class="div-block-60"><img class="image-52" sizes="66vw" src="/images/montana.png" srcset="images/montana-p-500.png 500w, images/montana-p-800.png 800w, images/montana.png 873w">
      <div class="row-8 w-row">
        <div class="column-12 w-col w-col-3">
          <a style="color:black; text-decoration: none;" href="#nivel1" rel="modal:open">
            <img height="70" src="/images/nivel-1.png" width="115">
          </a>
        </div>
        <div class="w-col w-col-9">
          <div class="text-block-27"><a style="color:black; text-decoration: none;" href="#nivel1" rel="modal:open">NIVEL 01</a></div>
          <div class="text-block-28">Samurái sin armadura, aprendiz</div>
          <div class="text-block-29">Arma de entrenamiento: Bokken</div>
          <div class="text-block-29"><a href="/awards" style="color:black">Cantidad de puntos necesarios:</a>
          {{number_format($level[0]->points, 0, ',', '.')}}</div>
        </div>
      </div>
    </div>
    <div class="alternate div-block-60">
      <div class="row-8 w-row">
        <div class="column-12 w-col w-col-3">
          <a style="color:black; text-decoration: none;" href="#nivel2" rel="modal:open">
            <img height="70" src="/images/nivel-2.png" width="115">
          </a>
        </div>
        <div class="w-col w-col-9">
          <div class="text-block-27"><a style="color:black; text-decoration: none;" href="#nivel2" rel="modal:open">NIVEL 02</a></div>
          <div class="text-block-28">Samurái con armadura simple</div>
          <div class="text-block-29">Arma de entrenamiento: Bokken</div>
          <div class="text-block-29"><a href="/awards" style="color:black">Cantidad de puntos necesarios:</a>
          {{number_format($level[1]->points, 0, ',', '.')}}</div>
        </div>
      </div>
    </div>
    <div class="div-block-60">
      <div class="row-8 w-row">
        <div class="column-12 w-col w-col-3">
          <a style="color:black; text-decoration: none;" href="#nivel3" rel="modal:open">
            <img height="70" src="/images/nivel-3.png" width="115">
          </a>
        </div>
        <div class="w-col w-col-9">
          <div class="text-block-27"><a style="color:black; text-decoration: none;" href="#nivel3" rel="modal:open">NIVEL 03</a></div>
          <div class="text-block-28">Samurái con armadura clasica</div>
          <div class="text-block-29">Arma de entrenamiento: Katana&nbsp;</div>
          <div class="text-block-29"><a href="/awards" style="color:black">Cantidad de puntos necesarios:</a>
          {{number_format($level[2]->points, 0, ',', '.')}}</div>
        </div>
      </div>
    </div>
    <div class="alternate div-block-60">
      <div class="row-8 w-row">
        <div class="column-12 w-col w-col-3">
          <a style="color:black; text-decoration: none;" href="#nivel4" rel="modal:open">
            <img height="70" src="/images/nivel-4.png" width="75">
          </a>
        </div>
        <div class="w-col w-col-9">
          <div class="text-block-27"><a style="color:black; text-decoration: none;" href="#nivel4" rel="modal:open">NIVEL 04</a></div>
          <div class="text-block-28">Ultimo Samurái</div>
          <div class="text-block-29">Arma de entrenamiento: Katana Moderna</div>
          <div class="text-block-29"><a href="/awards" style="color:black">Cantidad de puntos necesarios:</a> 
            {{number_format($level[3]->points, 0, ',', '.')}}</div>
        </div>
      </div>
    </div>
  </div><img class="image-53" src="/images/elipse.png"><img class="image-54" src="/images/rocks.png">
</div>
<div class="div-block-40">
  <div class="text-block-21">Toda la información aquí contenida es propiedad de Summit Agro Argentina S.A., prohibida su reproducción total o parcial, exhibición y/o uso sin expresa autorización de Summit Agro Argentina S.A.
    <br>
    Carlos Pellegrini 719, Piso 8 (C1009ABO), Cuidad de Buenos Aires Tel: (011) 3750-6750 - Copyright Summit Agro Argentina 2013. Todos los derechos reservados. <a href="/bases" style="color:white">Bases y Condiciones.</a>
    <br>
    Si tenes alguna duda escribinos a <a style="color:white" href="mailto:summitsamurai@summit-agro.com.ar">summitsamurai@summit-agro.com.ar</a></div>
  </div>

  <div id="nivel1" class="modal" style="display: none; max-width: 700px!important;">
    <h2 class="title-modal">NIVEL 1</h2>
    <p class="p-modal">Eres un aprendiz y tu arma de entrenamiento es <b>BOKKEN</b>.</p>
    <p class="p-body">
      *Curiosidad: Las primeras armaduras, encontradas mediante excavaciones en los kofun, recibieron nombre de tankō (鍛鋼). Eran fabricadas en hierro macizo, las planchas de blindaje se sujetaban unas a otras con correas de cuero y estaban específicamente diseñadas para ser usadas de pie. Para proteger la parte baja del cuerpo, los guerreros llevaban una falda acampanada llamada kusazuri. Los hombros y antebrazos se cubrían con planchas curvas que llegaban hasta el codo. Desde esos tiempos, la superficie de metal se cubría de laca laminar para protegerla del clima, tal y como se seguiría aplicando a los modelos posteriores. La característica particular del casco era que parte de adelante tenía forma de visera, además de dientes de hierro en la parte superior cuyo objeto era sujetar plumas de faisán.
    </p>
  </div>
  <div id="nivel2" class="modal" style="display: none; max-width: 700px!important;">
    <h2 class="title-modal">NIVEL 2</h2>
    <p class="p-modal">Te has convertido en un Samurái con armadura simple (<b>TANKO</b>, la más primitiva) y tu nueva arma es la <b>KATANA</b>. </p>
    <p class="p-body">
      *Curiosidad: Las primeras armaduras, encontradas mediante excavaciones en los kofun, recibieron nombre de tankō (鍛鋼). Eran fabricadas en hierro macizo, las planchas de blindaje se sujetaban unas a otras con correas de cuero y estaban específicamente diseñadas para ser usadas de pie. Para proteger la parte baja del cuerpo, los guerreros llevaban una falda acampanada llamada kusazuri. Los hombros y antebrazos se cubrían con planchas curvas que llegaban hasta el codo. Desde esos tiempos, la superficie de metal se cubría de laca laminar para protegerla del clima, tal y como se seguiría aplicando a los modelos posteriores. La característica particular del casco era que parte de adelante tenía forma de visera, además de dientes de hierro en la parte superior cuyo objeto era sujetar plumas de faisán.
    </p>
  </div>
  <div id="nivel3" class="modal" style="display: none; max-width: 700px!important;">
    <h2 class="title-modal">NIVEL 3</h2>
    <p class="p-modal">
      Has sumado tantos puntos, que ya tienes la armadura clásica empleada por los samuráis, <b>YOROI</b>, y tu arma sigue siendo la <b>KATANA</b>.
    </p>
    <p class="p-body">
        *Curiosidad: La armadura clásica del samurái, yoroi, se calcula que pesa unos 30 kilogramos y es un tipo de armadura laminar y se desprendió de la armadura keikō (携行?). Su peso considerable se debe a que la armadura era hecha completamente de hierro, solo se empleaban piezas de ese metal en las zonas donde se requería de más protección y en el resto de la armadura se alternaban piezas de hierro con cuero.
      </p>
  </div>
  <div id="nivel4" class="modal" style="display: none; max-width: 700px!important;">
    <h2 class="title-modal">NIVEL 4</h2>
    <p class="p-modal">Te convertiste en el <b>“Último Samurái”</b>, con la mejor armadura y el arma más moderna. <b>(TOOSEI GUSOKU con KATANA moderna)</b>.</p>
    <div class="p-body">
      *Curiosidad: Con los siglos se marcó una tendencia a reemplazar la yoroi por una armadura llamada do-maru. Esta última surgió como la evolución de la armadura de los soldados de infantería, mucho más sencilla y resultando más cómoda a la hora de la lucha sobre el terreno. La armadura desarrollada en el siglo XVI es conocida como tōsei gusoku (当世具足) o «armadura moderna». Su rasgo característico es que le fueron añadidas protecciones para la cara, el muslo y un sashimono, el cual era un pequeño estandarte en la espalda.
      Saigō Takamori, (1828–1877) fue el último samurái. Este guerrero y político fue el líder de una rebelión de samuráis que enfrentó al gobierno japonés de la época.
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="/js/webflow.js" type="text/javascript"></script>
  <script src="{{asset('bower_components/jquery-modal/jquery.modal.js')}}"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>