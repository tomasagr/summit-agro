<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Apr 19 2017 14:31:58 GMT+0000 (UTC)  -->
<html data-wf-page="58f6a0d6aa1ab6491f478c5b" data-wf-site="58d6377d8ca365092ba2436b">
<head>
  <meta charset="utf-8">
  <title>Summit Agro</title>
  <meta content="Iniciar Sesión" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/lucass-fresh-project-21ce23.webflow.css" rel="stylesheet" type="text/css">
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
<body class="body-4"
style="background: url('/images/login-bg.jpg') no-repeat top left;
background-size: 100%">
<div class="div-block-52">
    <div class="div-block-53">
      <div class="div-block-42"><img class="image-46" sizes="(max-width: 991px) 49vw, 395.421875px" src="/images/arbol.png" srcset="/images/arbol-p-500.png 500w, /images/arbol.png 576w">
        <div class="div-block-43">
          <div class="div-block-44"><img src="/images/logo-summit.svg" width="382">
          </div>
          <div class="div-block-45"><img src="/images/user-pic.png">
          </div>
      </div>
      <div class="div-block-46">
          <div>
            <div class="w-form">
              <form class="form" role="form" method="POST" action="{{ route('password.email') }}" style="flex-wrap: wrap">
                {{ csrf_field() }}
                <p style="font-family: 'Lato'; width: 100%; color: white; font-weight: 300; margin: 2em 0; ">Ingresa tu mail para recuperar tu contraseña</p>
                <div class="div-block-47">
                  <div class="div-block-48">
                    <input class="form-control w-input" data-name="email" id="email-2" maxlength="256" name="email" placeholder="Email" required="required" type="email"><img class="image-45" height="25" src="/images/email.svg" width="25">
                </div>
                <div class="div-block-48">

                </div>
            </div>
            <div class=""><button class="btn-success w-button" type="summit">Enviar</button>
            </div>
            @if (session('status'))
            <p style="font-family: 'Lato'; width: 100%; color: white; font-weight: 300; margin: 1em 0; ">{{ session('status') }}</p>
            @endif
        </div>
    </form>
    <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
    </div>
    <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form</div>
    </div>
</div>
</div>
<img class="image-47" style="bottom: 0" src="/images/pasto.png"><img class="image-48" src="/images/elipse.png">
</div>
<div class="text-block-23">Si aun no te haz registrado haz <a href="/register" class="link-3">click aqui</a>
</div>
</div>
</div>
<div class="div-block-40">
  <div class="text-block-21">Toda la información aquí contenida es propiedad de Summit Agro Argentina S.A., prohibida su reproducción total o parcial, exhibición y/o uso sin expresa autorización de Summit Agro Argentina S.A.
      <br>
      Carlos Pellegrini 719, Piso 8 (C1009ABO), Cuidad de Buenos Aires Tel: (011) 3750-6750 - Copyright Summit Agro Argentina 2013. Todos los derechos reservados. <a href="/bases" style="color:white">Terminos &amp;Condiciones.</a>
      <br>
      Si tenes alguna duda escribinos a <a style="color:white" href="mailto:summitsamurai@summit-agro.com.ar">summitsamurai@summit-agro.com.ar</a></div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
<script src="/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>