<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Fri Apr 21 2017 12:47:04 GMT+0000 (UTC)  -->
<html data-wf-page="58f7a040f5bb8549330bb718" data-wf-site="58d6377d8ca365092ba2436b" ng-app="app.avatars">
<head>
  <meta charset="utf-8">
  <title>Summit Samurái</title>
  <meta content="Avatar" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/avatar-mujer.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <script src="/js/modernizr.js" type="text/javascript"></script>
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
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
</head>
<body class="body-4" ng-controller="AvatarsController" ng-cloak>
  @include('partials.header')
  <div class="div-block-41">
    <div>
      <div class="text-block-19"><img src="/images/creatusamurai.png" alt="" width="250px"></div>
      <div class="text-block-20">Elegí las opciones y personalizá tu samurái</div>
    </div>
    <div class="div-block-42">
      <div class="columnt-1 div-block-43">
        <div class="box-red">
          <div class="box-red-header">
            <div class="text-block-22">01</div>
            <div class="text-block-21">ELIGE TU NOMBRE GUERRERO</div>
          </div>
          <div class="div-block-44">
            <div class="text-block-23">
              <input ng-model="avatar.name" ng-change="translate()" type="text" autofocus>
              <small ng-if="loading"> Traduciendo...</small></div>
              <div class="text-block-24"> @{{avatar.japanese}}</div><img height="20" src="/images/correcto.svg" width="20">
            </div>
          </div>
          <br><br>
          <div class="box-red default-box">
            <div class="box-red-header default-header">
              <div class="text-block-22">02</div>
              <div class="text-block-21">ELIGE TU GENERO</div>
            </div>
            <div class="row-6 w-row">
              <div class="column-7 w-col w-col-6">
                <a class="button-gender male w-button" href="/avatar-hombre/@{{userid}}"></a>
                <div class="title-gender">MASCULINO</div>
              </div>
              <div class="column-8 w-col w-col-6">
                <a class="button-gender w-button woman button-active" href="#"></a>
                <div class="title-gender">FEMENINO</div>
              </div>
            </div>
          </div>
          <div class="avatar-desktop">
            @include('partials.avatar-m-mobile')
          </div>
          <div class="avatar-mobile">
            @include('partials.avatar-m-mobile')
          </div>
        </div>
        <div class="columns-2">
          <div class="div-block-46">
            <div style="width: 300px; height: 300px; background: white" margin-left="">
              <div class="div-block-45" id="canvas"
              style="width:300px; height: 300px;visibility: visible; background: transparent;">
              <img class="f @{{selectedPelo}}" ng-src="/images/f/@{{selectedPelo}}.svg">
              <img class="f @{{selectedBoca}}" ng-src="/images/f/@{{selectedBoca}}.svg">
              <img src="/images/base-face-f.svg" width="130">
              <img class="f @{{selectedOjos}}" ng-src="/images/f/@{{selectedOjos}}.svg">
            </div>
          </div>
          <div class="div-block-47">
            <div class="text-block-26">@{{avatar.name}}</div>
            <div class="text-block-26">@{{avatar.japanese}}</div>
          </div>
        </div>
      </div>
    </div>
    <div style="text-align: center" ng-if="avatar.name.length == 0"><small>Nombre requerido</small></div>
    <div class="div-block-48"><a ng-click="store()"
     ng-if="avatar.name.length != 0" class="btn-success w-button" href="#">CREAR SAMURAI
     <i ng-if="loadingUpload" class="fa fa-spinner fa-spin" style="font-size: 14px!important"></i></a>

     <div class="div-block-48"><a ng-if="avatar.name.length == 0"
      class="btn-success w-button" href="#">CREAR SAMURAI</a>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('bower_components/angular/angular.js')}}"></script>
<script src="{{asset('js/components/avatars/modules.js')}}"></script>
<script src="/js/webflow.js" type="text/javascript"></script>
<script src="{{asset('bower_components/dom-to-image/dist/dom-to-image.min.js')}}"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>