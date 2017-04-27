<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Fri Apr 21 2017 12:47:04 GMT+0000 (UTC)  -->
<html data-wf-page="58f7a040f5bb8549330bb718" data-wf-site="58d6377d8ca365092ba2436b" ng-app="app.avatars">
<head>
  <meta charset="utf-8">
  <title>Avatar</title>
  <meta content="Avatar" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/avatar.css" rel="stylesheet" type="text/css">
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
  <script src="/js/modernizr.js" type="text/javascript"></script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
<body class="body-4" ng-controller="AvatarsController" ng-cloak>
  <div class="div-block-37">
    <div class="div-block-38">
      <div class="div-block-39"><img class="image-40" src="/images/logo-summit.svg">
      </div>
      <div class="div-block-40">
        <a class="link-block-2 w-inline-block" href="/home">
          <div>INICIO</div>
        </a>
        <a class="btn-active link-block-2 w-inline-block" href="/profile">
          <div>MI PERFIL</div>
        </a>
        <a class="link-block-2 w-inline-block" href="/logout">
          <div>SALIR</div>
        </a>
      </div>
    </div>
    <div class="div-block-41">
      <div>
        <div class="text-block-19"><img src="/images/creatusamurai.png" alt="" width="250px"></div>
        <div class="text-block-20">elige las opciones y personalizá tu samurái</div>
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
                  <a class="button-gender male w-button button-active" href="#"></a>
                  <div class="title-gender">MASCULINO</div>
                </div>
                <div class="column-8 w-col w-col-6">
                  <a class="button-gender off w-button woman" href="/avatar-mujer/@{{userid}}"></a>
                  <div class="title-gender">FEMENINO</div>
                </div>
              </div>
            </div>
            
            <div class="box-red default-box">
              <div class="box-red-header default-header">
                <div class="text-block-22">03</div>
                <div class="text-block-21">TIPO DE PELO</div>
              </div>
              <div class="slider w-slider" data-animation="slide" data-duration="500">
                <div class="w-slider-mask">
                  <div class="w-slide">
                    <div class="row-7 w-row">
                      <div class="column-9 w-col w-col-4">
                        <a class="@{{selectedPelo == 'pelo-1' ? 'box-active' : ''}} m-bg pelo-1 slider-btn w-button"
                        ng-click="selectPelo('pelo-1')" href="#"></a>
                      </div>
                      <div class="column-10 w-col w-col-4">
                        <a class="@{{selectedPelo == 'pelo-2' ? 'box-active' : ''}} m-bg pelo-2 slider-btn w-button"  ng-click="selectPelo('pelo-2')" href="#"></a>
                      </div>
                      <div class="column-11 w-col w-col-4">
                        <a class="@{{selectedPelo == 'pelo-3' ? 'box-active' : ''}} m-bg pelo-3 slider-btn w-button"  ng-click="selectPelo('pelo-3')" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <div class="w-slide">
                    <div class="row-7 w-row">
                      <div class="column-9 w-col w-col-4">
                        <a class="@{{selectedPelo == 'pelo-4' ? 'box-active' : ''}} m-bg pelo-4 slider-btn w-button"  ng-click="selectPelo('pelo-4')" href="#"></a>
                      </div>
                      <div class="column-10 w-col w-col-4">
                        <a class="@{{selectedPelo == 'pelo-5' ? 'box-active' : ''}} m-bg pelo-5 slider-btn w-button"  ng-click="selectPelo('pelo-5')" href="#"></a>
                      </div>
                      <div class="column-11 w-col w-col-4">
                        <a class="@{{selectedPelo == 'pelo-6' ? 'box-active' : ''}} m-bg pelo-6 slider-btn w-button"  ng-click="selectPelo('pelo-6')" href="#"></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="left-arrow w-slider-arrow-left"></div>
                <div class="right-arrow w-slider-arrow-right"></div>
              </div>
            </div>
            <div class="box-red default-box">
              <div class="box-red-header default-header">
                <div class="text-block-22">04</div>
                <div class="text-block-21">TIPO DE OJOS</div>
              </div>
              <div class="slider w-slider" data-animation="slide" data-duration="500">
                <div class="w-slider-mask">
                  <div class="w-slide">
                    <div class="row-7 w-row">
                      <div class="column-9 w-col w-col-4">
                        <a class="@{{selectedOjos == 'ojos-1' ? 'box-active' : ''}} m-bg ojos-1 slider-btn w-button" 
                        ng-click="selectOjos('ojos-1')" href="#"></a>
                      </div>
                      <div class="column-10 w-col w-col-4">
                        <a class="@{{selectedOjos == 'ojos-2' ? 'box-active' : ''}} m-bg ojos-2 slider-btn w-button" 
                        ng-click="selectOjos('ojos-2')" href="#"></a>
                      </div>
                      <div class="column-11 w-col w-col-4">
                        <a class="@{{selectedOjos == 'ojos-3' ? 'box-active' : ''}} m-bg ojos-3 slider-btn w-button" 
                        ng-click="selectOjos('ojos-3')" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <div class="w-slide">
                    <div class="row-7 w-row">
                      <div class="column-9 w-col w-col-4">
                        <a class="@{{selectedOjos == 'ojos-3' ? 'box-active' : ''}} m-bg ojos-4 slider-btn w-button" 
                        ng-click="selectOjos('ojos-4')" href="#"></a>
                      </div>
                      <div class="column-10 w-col w-col-4">
                        <a class="@{{selectedOjos == 'ojos-5' ? 'box-active' : ''}} m-bg ojos-5 slider-btn w-button" 
                        ng-click="selectOjos('ojos-5')" href="#"></a>
                      </div>
                      <div class="column-11 w-col w-col-4">
                        <a class="@{{selectedOjos == 'ojos-6' ? 'box-active' : ''}} m-bg ojos-6 slider-btn w-button" 
                        ng-click="selectOjos('ojos-6')" href="#"></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="left-arrow w-slider-arrow-left"></div>
                <div class="right-arrow w-slider-arrow-right"></div>
              </div>
            </div>
            <div class="box-red default-box">
              <div class="box-red-header default-header">
                <div class="text-block-22">05</div>
                <div class="text-block-21">TIPO DE BOCA</div>
              </div>
              <div class="slider w-slider" data-animation="slide" data-duration="500">
                <div class="w-slider-mask">
                  <div class="w-slide">
                    <div class="row-7 w-row">
                      <div class="column-9 w-col w-col-4">
                        <a class="@{{selectedBoca == 'boca-1' ? 'box-active' : ''}} m-bg boca-1 slider-btn w-button" 
                        ng-click="selectBoca('boca-1')" href="#"></a>
                      </div>
                      <div class="column-10 w-col w-col-4">
                        <a class="@{{selectedBoca == 'boca-2' ? 'box-active' : ''}} m-bg boca-2 slider-btn w-button"
                        ng-click="selectBoca('boca-2')" href="#"></a>
                      </div>
                      <div class="column-11 w-col w-col-4">
                        <a class="@{{selectedBoca == 'boca-3' ? 'box-active' : ''}} m-bg boca-3 slider-btn w-button" 
                        ng-click="selectBoca('boca-3')" href="#"></a>
                      </div>
                    </div>
                  </div>
                  <div class="w-slide">
                    <div class="row-7 w-row">
                      <div class="column-9 w-col w-col-4">
                        <a class="@{{selectedBoca == 'boca-4' ? 'box-active' : ''}} m-bg boca-4 slider-btn w-button" 
                        ng-click="selectBoca('boca-4')" href="#"></a>
                      </div>
                      <div class="column-10 w-col w-col-4">
                        <a class="@{{selectedBoca == 'boca-5' ? 'box-active' : ''}} m-bg boca-5 slider-btn w-button" 
                        ng-click="selectBoca('boca-5')" href="#"></a>
                      </div>
                      <div class="column-11 w-col w-col-4">
                        <a class="@{{selectedBoca == 'boca-6' ? 'box-active' : ''}} m-bg boca-6 slider-btn w-button" 
                        ng-click="selectBoca('boca-6')" href="#"></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="left-arrow w-slider-arrow-left"></div>
                <div class="right-arrow w-slider-arrow-right"></div>
              </div>
            </div>
          </div>
          <div class="columns-2">
            <div class="div-block-46">
            <div style="width: 300px; height: 300px; background: white" margin-left="">
                <div class="div-block-45" id="canvas"
                style="width:300px; height: 300px;visibility: visible; background: transparent;">
                <img class="m @{{selectedPelo}}" ng-src="/images/@{{selectedPelo}}.svg">
                <img class="m @{{selectedBoca}} m" ng-src="/images/@{{selectedBoca}}.svg">
                <img src="/images/base-face-m.svg" width="130">
                <img class="m @{{selectedOjos}}" ng-src="/images/@{{selectedOjos}}.svg">
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
       <i ng-if="loadingUpload" class="fa fa-spinner fa-spin" style="font-size: 14px!important"></i></a></a>
       <div class="div-block-48"><a ng-if="avatar.name.length == 0" class="btn-success w-button" href="#">CREAR SAMURAI</a>
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