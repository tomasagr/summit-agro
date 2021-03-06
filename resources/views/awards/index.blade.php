<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Apr 05 2017 11:35:29 GMT+0000 (UTC)  -->
<html data-wf-page="58e294199b1faa2f73aee6dc" data-wf-site="58d6377d8ca365092ba2436b">
<head>
  <meta charset="utf-8">
  <title>Summit Samurái</title>
  <meta content="Premios" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/main.css?key=<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/custom-1.css?key=<?php echo time(); ?>">
  <link rel="stylesheet" href="{{asset('bower_components/jquery-modal/jquery.modal.css')}}">
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

    a.close-modal {
      display: none!important;
    }

    .div-block-40 , .footer {
      width: 100%;
      position: relative;
      bottom: 0px;
      margin-top: 144px;
      padding-top: 0px;
      background-image: url('../images/footer.png');
      background-position: 0px 0px;
      background-size: 100%;
      background-repeat: no-repeat;
    }

    .text-block-21, .footer-text {
      position: relative;
      left: 0px;
      top: auto;
      bottom: 0px;
      margin-top: 36px;
      padding-top: 26px;
      padding-bottom: 13px;
      font-family: Lato, sans-serif;
      color: #c4c4c4;
      font-size: 10px;
      line-height: 17px;
      text-align: center;
    }
  </style>
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
</head>
<body class="body body-awards" style="background: url('/images/awards-bg.png') no-repeat top left;
background-size: 100%; background-color: #6BA242">
<div class="div-block-11" style="margin-bottom: 25em;">
  @include('partials.header')
  <div class="container-custom">
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
        <div class="text-block-10">Eres samurái
          @if(Auth::user()->points >= $levels[3]->points)
          <strong>Nivel 04</strong>
          <?php $actual = 3 ?>
          @elseif(Auth::user()->points >= $levels[2]->points)
          <strong>Nivel 03</strong>
          <?php $actual = 2 ?>
          @elseif(Auth::user()->points >= $levels[1]->points)
          <strong>Nivel 02</strong>
          <?php $actual = 1 ?>
          @elseif(Auth::user()->points >= $levels[0]->points || Auth::user()->points <= $levels[3]->points)
          <?php $actual = 0 ?>
          @if (Auth::user()->points >= $levels[0]->points)
          <strong>Nivel 01</strong>
          @else
          <strong>Nivel 00</strong>
          @endif
          @endif
          <span class="text-span-3">{{number_format(Auth::user()->points, '0',',', '.')}} puntos</span>
        </div>

        @if(isset($levels[$actual - 1]) && $actual != 3)
        <div class="text-block-11">
          ¡Necesitás
          <span>{{number_format($levels[$actual + 1]->points - Auth::user()->points, 0, ',', '.')}}</span>
          puntos para alcanzar el siguiente nivel!
        </div>
        @elseif (Auth::user()->points < $levels[0]->points  && $actual != 3)
        <div class="text-block-11">
          ¡Necesitás
          <span>{{number_format($levels[$actual]->points - Auth::user()->points, 0 , ',', '.')}}</span>
          puntos para alcanzar el siguiente nivel!
        </div>
        @elseif (Auth::user()->points >= $levels[0]->points  && $actual != 3)
        <div class="text-block-11">
          ¡Necesitás
          <span>{{number_format($levels[$actual + 1]->points - Auth::user()->points, ',', '.')}}</span>
          puntos para alcanzar el siguiente nivel!
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="container-custom container-premios mobile">
    <div class="premios-content">
      <div class="premios-title">PREMIOS DISPONIBLES</div>
    </div>
    @if (session('status'))
    <div class="alert alert-success" style="border-radius: 5px; display: block; padding: 1em; background: green; font-family:Helvetica; font-size: 13px; color: white; width: 50%; margin: 0 auto;">
      {{session('status')}}
    </div>
    @endif
    <div class="div-block-23">
      <div class="div-block-24">
        <img class="image-20" src="images/nivel-4.png" @if(Auth::user()->points >= $levels[0]->points) {{"style=opacity:1"}}@endif>
        <div class="text-block-12"  @if(Auth::user()->points < $levels[0]->points) {{"style=color:gray"}}@endif>Nivel 04</div>
      </div>
      @include('partials.awards-mobile', ['level' => $levels[0]->awards])
      @include('partials.awards-desktop', ['level' => $levels[0]->awards])
    </div>
    <div class="div-block-23 odd-premios">
      <div class="div-block-24"><img class="image-20" src="images/nivel-1.png" @if(Auth::user()->points >= $levels[0]->points) {{"style=opacity:1"}}@endif>
        <div class="text-block-12"  @if(Auth::user()->points < $levels[1]->points) {{"style=color:gray"}}@endif>Nivel 03</div>
      </div>
      @include('partials.awards-mobile', ['level' => $levels[1]->awards])
      @include('partials.awards-desktop', ['level' => $levels[1]->awards])
    </div>
    <div class="div-block-23">
      <div class="div-block-24">
        <img class="image-22" src="images/nivel-2.png" @if(Auth::user()->points >= $levels[2]->points) {{"style=opacity:1"}}@endif>
        <div class="text-block-12"  @if(Auth::user()->points < $levels[2]->points) {{"style=color:gray"}}@endif>Nivel 02</div>
      </div>
      @include('partials.awards-mobile', ['level' => $levels[2]->awards])
      @include('partials.awards-desktop', ['level' => $levels[2]->awards])
    </div>
    <div class="div-block-23 odd-premios" style="border-bottom: 0">
      <div class="div-block-24"><img class="image-23" src="images/nivel-1.png">
        <div class="text-block-12" >Nivel 01</div>
      </div>
      @include('partials.awards-mobile', ['level' => $levels[3]->awards])
      @include('partials.awards-desktop', ['level' => $levels[3]->awards])
  </div>
</div>
</div>
<div class="footer">
  <div class="footer-text">Toda la información aquí contenida es propiedad de Summit Agro Argentina S.A., prohibida su reproducción total o parcial, exhibición y/o uso sin expresa autorización de Summit Agro Argentina S.A.
    <br>
    Carlos Pellegrini 719, Piso 8 (C1009ABO), Cuidad de Buenos Aires Tel: (011) 3750-6750 - Copyright Summit Agro Argentina 2013. Todos los derechos reservados. <a target="_blank" href="/bases" style="color:white">Bases & Condiciones</a>
    <br>
    Si tenés alguna duda escribinos a <a style="color:white" href="mailto:summitsamurai@summit-agro.com.ar">summitsamurai@summit-agro.com.ar</a></div>
  </div>
</div>
<div id="modal" class="modal" style="background: transparent; display: none; max-width: 700px!important; box-shadow: none;">
 <img src="/images/modal.png" alt="" style="width: 100%">
 <div style="display: flex;margin-top: -33px;margin-left: 11%;justify-content: center;">
  <a class="cancel" href="" style="width: 220px; margin-right: 1em;">
    <img src="/images/ok.png" alt="">
  </a>
  <a class="ok" href="" style="width: 220px; margin-left: 1em;">
   <img src="/images/cancel.png" alt="">
 </a>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="/js/webflow.js" type="text/javascript"></script>
<script src="{{asset('bower_components/jquery-modal/jquery.modal.js')}}"></script>
<script>
  (function() {
    var link = "";
    $('.doLink').click(function(e) {
      e.preventDefault()
      $('#modal').modal()
      link = $(this).attr('href')
    })

    $('.ok').click(function(e) {
      e.preventDefault()
      window.location = link
    })

    $('.cancel').click(function(e) {
      e.preventDefault()
      $.modal.close()
    })
  })();
</script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

</body>
</html>