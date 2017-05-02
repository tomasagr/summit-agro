<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Wed Apr 19 2017 15:21:31 GMT+0000 (UTC)  -->
<html data-wf-page="58f77effaa1ab6491f47d42d" data-wf-site="58d6377d8ca365092ba2436b" ng-app="app.register">
<head>
  <meta charset="utf-8">
  <title>Summit Samurái</title>
  <meta content="Registro" property="og:title">
  <meta content="width=device-width, initial-scale=1"
         name="viewport">
  <meta content="Webflow"
         name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/register.css?key=<?php echo time();?>" rel="stylesheet" type="text/css">
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
<body class="body-3" ng-controller="RegisterController">
  <div class="w-container">
  <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    <div class="div-block" style="margin-top: 241px">
      <div class="row w-row">
        <div class="column w-col w-col-6">
          <div class="column-content"><img src="images/logo-summit.svg">
            <div class="text-block"><img src="/images/bienvenido.png" alt="" width="268"></div>
            <div class="desc text-block">ingresa para poder sumar puntos y ganar grandes premios</div>
            <div class="div-block-3 v-divisor">
              <div class="div-block-2"></div>
            </div><img class="image-4" height="555" src="images/pers-registro.svg">
          </div>
        </div>
        <div class="column-2 w-col w-col-6">
          <div class="column-content">
            <div class="w-form">
              <form action="/users" method="POST" autocomplete="off">
                {{csrf_field()}}
                <div class="div-block-4">
                  <input autofocus class="custom-input w-input"
                         name="first_name"
                         placeholder="*Nombre"
                         required="required"
                         type="text">
                  <img class="image-5" height="20" src="images/user.svg" width="20">
                </div>
                <div class="div-block-4">
                  <input  class="custom-input w-input"
                          name="last_name"
                          placeholder="*Apellido"
                          required="required"
                          type="text">
                          <img class="image-5" height="20" src="images/user.svg" width="20">
                </div>
                <div class="div-block-4">
                  <input  class="custom-input w-input"
                         name="dni"
                         placeholder="*DNI"
                         required="required"
                         type="text">
                  <img class="image-5" height="20" src="images/dni.svg" width="20">
                </div>
                <div class="div-block-4">
                  <input class="custom-input w-input"
                         name="email"
                         placeholder="*Email"
                         required="required"
                         type="email">
                    <img class="image-5" height="20" src="images/email.svg" width="20">
                </div>
                <div class="div-block-4">
                  <input  class="custom-input w-input"
                         name="phone"
                         placeholder="*Telefono"
                         required="required"
                         type="text">
                  <img class="image-5" height="20" src="images/telefono.svg" width="20">
                </div>
                <div class="div-block-4">
                  <input  class="custom-input w-input"
                         name="address"
                         placeholder="*Dirección"
                         required="required"
                         googleplace
                         ng-model="googleplace"
                         type="text">
                  <img class="image-5" height="20" src="images/direccion.svg" width="20">
                </div>
                <div class="div-block-4">
                  <input  class="custom-input w-input"
                         name="password"
                         placeholder="*Contraseña"
                         required="required"
                         type="password">
                  <img class="image-5" height="20" src="images/contrasena.svg" width="20">
                </div>
                <div class="div-block-5"></div>
                <div class="div-block-4">
                  <input class="custom-input w-input"
                         name="cuit"
                         placeholder="*CUIT de la empresa"
                         required="required"
                         ng-model="cuit"
                         ng-change="checkAgronomia()"
                         type="text">
                  <img class="image-5" height="20" src="images/user.svg" width="20">
                </div>
                <div class="div-block-4">
                  <input  class="custom-input w-input"
                          name="agronomy"
                          placeholder="*Agronomia"
                          ng-model="agronomy"
                          required="required"
                          type="text">
                  <img class="image-5" height="20" src="images/agronomia.svg" width="20">
                  <div class="left radio-agr w-clearfix w-radio">
                    <input class="radio-button w-radio-input"
                             name="agronomy_type"
                             type="radio"
                             required
                             value="casa">
                    <label class="field-label w-form-label" for="Casa Central-2">Casa central</label>
                  </div>
                  <div class="radio-agr right w-clearfix w-radio">
                    <input class="w-radio-input"
                           name="agronomy_type"
                           type="radio"
                           required
                           value="sucursal">
                    <label class="field-label w-form-label" for="Casa Central-2">Sucursal</label>
                  </div>
                </div>
                <div class="block-flex">
                  <img height="20" src="images/user.svg" width="20">
                  <div class="text-block-2">Genero</div>
                  <div class="radio-button-field-2 w-clearfix w-radio">
                    <input class="w-radio-input"
                             name="gender"
                             type="radio"
                             value="Femenino">
                    <label class="field-label-2 w-form-label" for="Femenino">Femenino</label>
                  </div>
                  <div class="radio-button-field-2 w-clearfix w-radio">
                    <input class="w-radio-input"
                             name="gender"
                             type="radio"
                             value="Femenino">
                    <label class="field-label-2 w-form-label" for="Femenino">Masculino</label>
                  </div>
                </div>
                <div class="div-block-4 select-box"><img height="25" src="images/cumpleanos.svg" width="25">
                  <div class="text-block-3">Cumpleaños</div>
                  <input class="custom-input w-input"
                         name="birthday"
                         type="date"
                         style="padding-left: 0 !important;">
                </div>
                <div class="div-block-4 select-box"><img height="25" src="images/talle.svg" width="25">
                  <div class="text-block-3">Talle</div>
                  <select class="custom-input custom-select talle w-select"
                          name="size">
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="XL">XL</option>
                  </select>
                </div>
                <div class="div-block-4 select-box">
                  <img height="25" src="images/estadocivil.svg" width="25">
                  <select class="custom-input custom-select estado-select w-select"
                         name="civil_status">
                    <option value="">Estado Civil</option>
                    <option value="casado">Casado</option>
                    <option value="soltero">Soltero</option>
                    <option value="viudo">Viudo</option>
                  </select>
                </div>
                <div class="div-block-4 select-box">
                   <img height="25" src="images/aniversario.svg" width="25">
                  <div class="text-block-3">Aniversario</div>
                  <input class="custom-input w-input"
                         name="aniversario"
                         type="date"
                         style="padding-left: 0 !important;">
                </div>
                <div class="div-block-4 select-box">
                  <input  class="custom-input w-input"
                         name="childrens"
                         placeholder="Cantidad de hijos"
                         type="text">
                  <img class="image-5" height="20" src="images/cantidadhijos.svg" width="20">
                </div>
                <div class="div-block-4 select-box"><img height="25" src="images/deportes.svg" width="25">
                  <select class="custom-input custom-select estado-select w-select"
                          name="sports">
                    <option value="">Deportes</option>
                    <option value="futbol">Futbol</option>
                    <option value="basquet">Basquet</option>
                    <option value="tenis">Tenis</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
                <div class="div-block-4 select-box"><img height="25" src="images/hobby.svg" width="25">
                  <select class="custom-input custom-select estado-select w-select"
                         name="hobby">
                    <option value="">Hobby</option>
                    <option value="deporte">Deportes</option>
                    <option value="cocina">Cocina</option>
                    <option value="musica">Musica</option>
                    <option value="otros">Otros</option>
                  </select>
                </div>
                <div class="div-block-4 select-box">
                  <input class="custom-input w-input"
                         name="team"
                         placeholder="Equipo de futbol"
                         type="text">
                  <img class="image-5" height="20" src="images/equipofutbol.svg" width="20">
                </div>
                <div class="checkbox-field w-checkbox w-clearfix">
                  <input class="checkbox w-checkbox-input"
                         id="checkbox"
                         name="checkbox"
                         type="checkbox">
                  <label class="field-label-3 w-form-label" for="checkbox">Acepto los <a href="/bases" class="link-3" style="color:white">Terminos y Condiciones</a></label>
                </div>

                <button class="btn-success w-button @{{status == false ? 'not-active' : ''}}"
                        type="submit">Registrarme</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img class="image-6" src="images/elipse.png">
    <div style="text-align: center; font-family: 'Lato'; margin-top: .3em; margin-left: 30%;">
      * campos obligatorios <br>
      Si ya tienes cuenta <a href="/login" style="color: black">ingresa aqui</a>
    </div>
  </div>
  <div class="div-block-40">
    <div class="text-block-21">Toda la información aquí contenida es propiedad de Summit Agro Argentina S.A., prohibida su reproducción total o parcial, exhibición y/o uso sin expresa autorización de Summit Agro Argentina S.A.
      <br>
      Carlos Pellegrini 719, Piso 8 (C1009ABO), Cuidad de Buenos Aires Tel: (011) 3750-6750 - Copyright Summit Agro Argentina 2013. Todos los derechos reservados. <a href="/bases" style="color:white">Bases & Condiciones</a>
      <br>
      Si tenes alguna duda escribinos a <a style="color:white" href="mailto:summitsamurai@summit-agro.com.ar">summitsamurai@summit-agro.com.ar</a></div>
  </div>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false&key=AIzaSyCqVmmATrASj9S6j5U6oyATsJZjnT667F8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="/js/angular.min.js"></script>
  <script src="/js/components/register/module_.js"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>