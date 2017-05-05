<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Apr 24 2017 16:46:32 GMT+0000 (UTC)  -->
<html data-wf-page="58fe1de48d8ae76d1b65acbf" data-wf-site="58d6377d8ca365092ba2436b" ng-app="app.editprofile">
<head>
  <meta charset="utf-8">
  <title>Summit Samurái</title>
  <meta content="Iniciar Sesión" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/editprofile.css?key=<?php echo time(); ?>" rel="stylesheet" type="text/css">
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
<body class="body-4" ng-controller="ShowController">
  @include('partials.header')
  <div class="div-block-52">
    <div class="div-block-53">
      <div class="div-block-42">
        <div class="div-block-43">
          <div class="div-block-44"><img src="/images/logo-summit.svg" width="382">
          </div>
        </div>
        <div class="div-block-46">
          <div>
            <div class="w-form">
              <form class="form" name="editprofileForm">
                <div class="div-block-61 desktop">
                  <div class="text-block-26">MIS DATOS PERSONALES</div>
                  <div>
                    <img class="image-50"
                    ngf-thumbnail="file || '/images/user-pic.png'"
                    style="border-radius: 100%; width: 108px; height: 100px">
                  </div>
                  <div><a class="btn-success info w-button"
                    type="file"
                    ng-model="file"
                    ngf-select="uploadFiles($file, $invalidFiles)"
                    accept="image/*">CAMBIAR FOTO</a>
                  </div>
                </div>
                <div class="div-block-61 mobile">
                  <div class="header-data">
                    <div>
                    <img class="image-50"
                    ngf-thumbnail="file || '/images/user-pic.png'"
                    style="border-radius: 100%; width: 108px; height: 100px">
                  </div>
                  <div>
                  <a class="btn-success info w-button"
                  style="margin-bottom: 1em;"
                    type="file"
                    ng-model="file"
                    ngf-select="uploadFiles($file, $invalidFiles)"
                    accept="image/*">CAMBIAR FOTO</a>
                  </div>
                  </div>
                  <div class="text-block-26" style="margin: .5em 0;">MIS DATOS PERSONALES</div>
                </div>
                <div class="div-block-47">
                  <div class="div-block-48">
                    <input autofocus class="form-control register w-input"
                    name="first_name"
                    placeholder="*Nombre"
                    required="required"
                    ng-model="user.first_name"
                    type="text">
                    <img class="image-45" height="25" src="/images/user.svg" width="25">
                  </div>
                  <div class="div-block-48">
                    <input class="form-control register w-input"
                    placeholder="*DNI"
                    required="required"
                    ng-model="user.dni"
                    type="text"><img class="image-45" height="25" src="/images/user.svg" width="25">
                  </div>
                  <div class="div-block-48">
                    <input class="form-control register w-input"
                    placeholder="*CUIT"
                    ng-model="user.agronomy"
                    required="required"
                    type="text"><img class="image-45" height="25" src="/images/user.svg" width="25">
                  </div>
                  <div class="div-block-48">
                    <input class="form-control register w-input"
                    placeholder="*Dirección"
                    ng-model="user.address"
                    required="required"
                    type="text"><img class="image-45"
                    height="25" src="/images/user.svg"
                    width="25">
                  </div>
                  <div class="div-block-4 select-box">
                    <img height="25" src="/images/talle.svg" width="25">
                    <div class="text-block-3">Talle</div>
                    <select class="custom-input custom-select talle w-select"
                    name="size" ng-model="user.size"
                    ng-options="item.value as item.name for item in size">
                  </select>
                </div>
              </div>
              <div class="div-block-47">
                <div class="div-block-48">
                  <input class="form-control register w-input"
                  placeholder="*Email"
                  required="required"
                  ng-model="user.email"
                  type="text"><img class="image-45" height="25" src="/images/email.svg" width="25">
                </div>
                <div class="div-block-48">
                  <input class="form-control register w-input"
                  placeholder="*Agronomía"
                  ng-model="user.agronomy"
                  required="required"
                  type="text"><img class="image-45" height="25" src="/images/agronomia.svg" width="25">
                </div>
                <div class="div-block-48">
                  <input class="form-control register w-input"
                  placeholder="*Contraseña"
                  ng-model="password"
                  required="required" type="text"><img class="image-45" height="25" src="/images/contrasena.svg" width="25">
                </div>
              </div>
              <div class="div-block-49"><a class="btn-success s w-button" href="#" ng-click="update()" style="margin-right: 0">Modificar</a>
              </div>
              <div ng-if="message"><p style="color: green">Editado con exito</p></div>
            </form>
          </div>
        </div>
      </div><img class="image-48" src="/images/elipse.png">
    </div>
  </div>
  <div class="div-block-40">
    <div class="text-block-21">Toda la información aquí contenida es propiedad de Summit Agro Argentina S.A., prohibida su reproducción total o parcial, exhibición y/o uso sin expresa autorización de Summit Agro Argentina S.A.
      <br>
      Carlos Pellegrini 719, Piso 8 (C1009ABO), Cuidad de Buenos Aires Tel: (011) 3750-6750 - Copyright Summit Agro Argentina 2013. Todos los derechos reservados. <a  target="_blank" href="/bases" style="color:white">Bases y Condiciones.</a>
      <br>
      Si tenes alguna duda escribinos a <a style="color:white" href="mailto:summitsamurai@summit-agro.com.ar">summitsamurai@summit-agro.com.ar</a></div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script src="/js/angular.min.js"></script>
  <script src="/bower_components/ng-file-upload/ng-file-upload.min.js"></script>
  <script src="/js/components/user/module.js"></script>

</body>
</html>