<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Tue Mar 28 2017 23:32:22 GMT+0000 (UTC)  -->
<html data-wf-page="58d63f144f3644b01d6493b0" data-wf-site="58d6377d8ca365092ba2436b">
<head>
  <meta charset="utf-8">
  <title>Summit Agro | Login</title>
  <meta content="Login" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/main.css" rel="stylesheet" type="text/css">
  <link href="css/custom.css" rel="stylesheet" type="text/css">
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
<body>
<img class="image-3" src="images/login-bg.png">
  <div class="w-container">
    <div class="div-block-6">
      <div class="div-block-7"><img class="image-7" height="60" src="images/logo-summit.svg" width="370"><img class="image-8" src="images/user-pic.png">
      </div>
      <div class="div-block-8">
        <div class="w-form">
          <form class="form" action="{{ route('login') }}" id="email-form" name="email-form" method="POST">
          {{csrf_field()}}
          <img class="image-10" src="images/arbol.png">
            <div class="div-block-10">
              <div class="div-block-4 login-field">
                <input autofocus="autofocus" class="custom-input login-filed w-input" data-name="Field 2" id="field-2" maxlength="256" name="email" placeholder="*Email" required="required" type="email"><img class="image-5" height="20" src="images/email.svg" width="20">
              </div>
              <div class="div-block-4 login-field">
                <input class="custom-input login-filed w-input" data-name="Field 3" id="field-3" maxlength="256" name="password" placeholder="*Contraseña" required="required" type="password"><img class="image-5" height="20" src="images/contrasena.svg" width="20">
              </div>
            </div>
            <div class="div-block-9">
              <input class="btn-success ligon-btn w-button" data-wait="Please wait..." type="submit" value="Ingresar">
              <div class="text-block-5"><a class="link-5">¿Olvidaste tu contraseña ?</a>
              </div>
            </div><img class="image-11" src="images/pasto.png">
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form</div>
          </div>
        </div>
      </div>
    </div><img class="image-9" sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 832px" src="images/elipse.png" srcset="images/elipse-p-500x29.png 500w, images/elipse-p-800x46.png 800w, images/elipse.png 832w">
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>