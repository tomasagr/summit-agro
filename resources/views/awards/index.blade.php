<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Apr 05 2017 11:35:29 GMT+0000 (UTC)  -->
<html data-wf-page="58e294199b1faa2f73aee6dc" data-wf-site="58d6377d8ca365092ba2436b">
<head>
  <meta charset="utf-8">
  <title>Premios</title>
  <meta content="Premios" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/main.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/custom-1.css">
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
  </style>
</head>
<body class="body"><img class="image-19" sizes="100vw" src="images/premios-bg.png" srcset="images/premios-bg-p-500x649.png 500w, images/premios-bg-p-800x1038.png 800w, images/premios-bg-p-1080x1402.png 1080w, images/premios-bg-p-1600x2076.png 1600w, images/premios-bg.png 1920w">
  <div class="div-block-11">
    <div class="container-custom">
      <div class="div-block-12">
        <img onclick="window.location='/home'" class="image-15" src="images/logo-summit.svg" style="cursor: pointer;">
        <ul class="unordered-list-2 w-list-unstyled">
          <li class="list-item-4"><a href="/home" class="link-6">INICIO</a>
          </li>
          <li class="list-item-4 link-active"><a href="/profile" class="link-8">MI PERFIL</a>
          </li>
          <li class="list-item-4"><a href="/logout" class="link-7">SALIR</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container-custom">
      <div class="user-header">
        <div class="user-data">
          <div class="user-image"><img src="images/personaje-2.png">
          </div>
          <div class="div-block-22">
            <div class="text-block-9"><span class="text-span-2">Hola</span> <span class="text-span">{{Auth::user()->first_name}} {{Auth::user()->last_name}} </span>
            </div>
            <div><a>Modificar mis datos</a>
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
          <div class="div-block-27"><a class="btn-success w-button" href="/invoices">Sumar puntos</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-custom container-premios">
      <div class="premios-content">
        <div class="premios-title">PREMIOS DISPONIBLES</div>
      </div>
      @if (session('status'))
      <div class="alert alert-success" style="border-radius: 5px; display: block; padding: 1em; background: green; font-family:Helvetica; font-size: 13px; color: white; width: 50%; margin: 0 auto;">
        {{session('status')}}
      </div>
      @endif
        <div class="div-block-23">
          <div class="div-block-24"><img class="image-20" src="images/nivel-4.png" @if(Auth::user()->points >= $levels[0]->points) {{"style=opacity:1"}}@endif>
            <div class="text-block-12"  @if(Auth::user()->points < $levels[0]->points) {{"style=color:gray"}}@endif>Nivel 04</div>
          </div>
          @foreach($levels[0]->awards as $award)
          <a href="/user/{{Auth::user()->id}}/awards/{{$award->id}}"
             class="item-premio-link @if(Auth::user()->points < $award->points || $award->stock <= 0) {{"not-active"}} @endif">
            <div class="div-block-25">
              <div class="div-block-26"><img class="image-25" src="{{$award->image}}" width="185">
                <img class="image-24" src="images/lock.png" width="190" @if(Auth::user()->points >= $award->points) {{"style=display:none"}}@endif>
              </div>
              <div class="text-block-13" >{{$award->points}} puntos</div>
              <div class="text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>{{$award->name}}</div>
              <div class="text-14 text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>Disponible {{$award->stock}}u.</div>
            </div>
          </a>
          @endforeach
        </div>
        <div class="div-block-23 odd-premios">
          <div class="div-block-24"><img class="image-20" src="images/nivel-1.png" @if(Auth::user()->points >= $levels[0]->points) {{"style=opacity:1"}}@endif>
            <div class="text-block-12"  @if(Auth::user()->points < $levels[1]->points) {{"style=color:gray"}}@endif>Nivel 03</div>
          </div>
          @foreach($levels[1]->awards as $award)
          <a href="/user/{{Auth::user()->id}}/awards/{{$award->id}}" class="item-premio-link @if(Auth::user()->points < $award->points || $award->stock <= 0) {{"not-active"}}@endif" >
            <div class="div-block-25">
              <div class="div-block-26"><img class="image-25" src="{{$award->image}}" width="185">
                <img class="image-24" src="images/lock.png" width="190" @if(Auth::user()->points >= $award->points) {{"style=display:none"}}@endif>
              </div>
              <div class="text-block-13" >{{$award->points}} puntos</div>
              <div class="text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>{{$award->name}}</div>
              <div class="text-14 text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>Disponible {{$award->stock}}u.</div>
            </div>
          </a>
          @endforeach
        </div>
        <div class="div-block-23">
          <div class="div-block-24">
            <img class="image-22" src="images/nivel-2.png" @if(Auth::user()->points >= $levels[2]->points) {{"style=opacity:1"}}@endif>
            <div class="text-block-12"  @if(Auth::user()->points < $levels[2]->points) {{"style=color:gray"}}@endif>Nivel 02</div>
          </div>
          @foreach($levels[2]->awards as $award)
          <a href="/user/{{Auth::user()->id}}/awards/{{$award->id}}" class="item-premio-link @if(Auth::user()->points < $award->points || $award->stock <= 0) {{"not-active"}}@endif" >
            <div class="div-block-25">
              <div class="div-block-26"><img class="image-25" src="{{$award->image}}" width="185">
                <img class="image-24" src="images/lock.png" width="190" @if(Auth::user()->points >= $award->points) {{"style=display:none"}}@endif>
              </div>
              <div class="text-block-13" >{{$award->points}} puntos</div>
              <div class="text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>{{$award->name}}</div>
              <div class="text-14 text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>Disponible {{$award->stock}} u.</div>
            </div>
          </a>
          @endforeach
        </div>
        <div class="div-block-23 odd-premios" style="border-bottom: 0">
          <div class="div-block-24"><img class="image-23" src="images/nivel-1.png">
            <div class="text-block-12" >Nivel 01</div>
          </div>
          @foreach($levels[3]->awards as $award)
          <a href="/user/{{Auth::user()->id}}/awards/{{$award->id}}" class="item-premio-link @if(Auth::user()->points < $award->points || $award->stock <= 0) {{"not-active"}}@endif" >
            <div class="div-block-25">
              <div class="div-block-26"><img class="image-25" src="{{$award->image}}" width="185">
                <img class="image-24" src="images/lock.png" width="190" @if(Auth::user()->points >= $award->points) {{"style=display:none"}}@endif>
              </div>
              <div class="text-block-13" >{{$award->points}} puntos</div>
              <div class="text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>{{$award->name}}</div>
              <div class="text-14 text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>Disponible {{$award->stock}} u.</div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>