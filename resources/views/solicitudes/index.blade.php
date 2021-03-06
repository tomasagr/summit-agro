<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Apr 03 2017 18:46:36 GMT+0000 (UTC)  -->
<html data-wf-page="58d63f394f3644b01d6493b5" data-wf-site="58d6377d8ca365092ba2436b">
<head>
  <meta charset="utf-8">
  <title>Summit Samurái</title>
  <meta content="Productos Disponibles" property="og:title">
  <meta content="width=device-width,maximum-scale=1.0, minimum-scale=1.0 initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/main.css?key=<?php echo time(); ?>" rel="stylesheet" type="text/css">
  <link href="css/custom.css?key=<?php echo time(); ?>" rel="stylesheet" type="text/css">
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

    a.ng-invalid.ng-touched {
      border: 0 !important;
    }
  </style>
</head>
<body ng-app="loadInvoices" ng-controller="InvoicesController as invoices"
      style="background: url('/images/bg-solicitudes.png') no-repeat top left;
      background-size: 100%" class="body-profile invoices">
  <div class="div-block-11">
    @include('partials.header')
  </div>
  <div class="card-success" ng-if="invoices.formHidden" ng-cloak>
    <h3>Puntos cargados con éxito</h3>
    <button onclick="window.location.href='/invoices'" class="btn-success">Volver a cargar</button>
  </div>
  <div class="container-custom" ng-if="!invoices.formHidden">
    <div class="w-form">
      <form name="invoicesForm" novalidate ng-cloak style="margin: 1em;">
        <div class="div-block-14">
          <div class="div-block-15">
            <a class="w-inline-block" href="#">
              <img ngf-thumbnail="invoices.invoice.file || 'images/factura.png'">
            </a>
            <a class="btn-success info w-button"
            ngf-pattern="'image/*'"
            ngf-select
            name="file"
            ng-model="invoices.invoice.file"
            ngf-accept="'image/*'"
            ngf-max-size="5MB"
            required
            href="#">Cargar factura</a>
          </div>
          <span class="help-block" style="color: red" ng-if="invoicesForm.file.$error.maxSize">La imagen no puede superar los 5MB</span>
          <div>
            <div class="w-row">
              <div class="w-col w-col-4">
                <input class="factura-field w-input"
                id="invoice_number"
                maxlength="256"
                ng-model="invoices.invoice.invoice_number"
                placeholder="*Numero de factura"
                required="required"
                type="text">
              </div>
              <div class="w-col w-col-4">
                <input class="factura-field w-input"
                  id="date"
                  maxlength="256"
                  ng-model="invoices.invoice.date"
                  placeholder="*Fecha"
                  onfocus="(this.type='date')"
                  required="required"
                  type="text">
              </div>
              <div class="w-col w-col-4">
                <input class="factura-field w-input"
                data-name="cuit"
                id="cuit"
                maxlength="256"
                ng-model="invoices.invoice.cuit"
                placeholder="*Cuit del cliente"
                required
                type="text">
              </div>
            </div>
          </div>
          <div>
            <div class="row-2 w-row">
              <div class="w-col w-col-6 responsive-6">
                <div class="header-table">Productos</div>
              </div>
              <div class="w-col w-col-1 responsive-1" style="padding: 0;
            width: 10px;
            margin-top: 14px;
            "></div>
              <div class="w-col w-col-2 responsive-2">
                <div class="header-table">Cantidad</div>
              </div>
              <div class="w-col w-col-3 responsive-3">
                <div class="header-table">Puntos</div>
              </div>
            </div>
          </div>
          <div>
            <div class="row-2 w-row" ng-repeat="product in invoices.productList" ng-cloak>
              <div class="w-col w-col-6 responsive-6">
                <select class="factura-field w-select"
                  ng-model="invoices.invoice.products[$index]"
                  id="products"
                  name="products"
                  required
                  ng-options="item as item.name for item in invoices.products">
                <option value="">Seleccionar</option>
              </select>
            </div>
            <div class=" w-col w-col-1 responsive-1" style="padding: 0;
            width: 10px;
            margin-top: 14px;
            ">@{{invoices.invoice.products[$index].unit}}</div>
            <div class="w-col w-col-2 responsive-2">
              <input class="factura-field w-input"
              ng-model="invoices.invoice.products[$index].quanty"
              id="quanty"
              min="1"
              ng-min="1"
              name="quanty"
              placeholder="*Cantidad"
              required
              type="number">
              <div class="div-block-17"></div>
            </div>
            <div class="w-col w-col-3 responsive-3">
              <div ng-if="invoices.invoice.products[$index]" class="points">
                + @{{invoices.invoice.products[$index].points * ( invoices.invoice.products[$index].quanty || 0)}} pts
              </div>
            </div>
          </div>
        </div>
        <div class="div-block-18">
          <a class="w-inline-block" ng-click="invoices.addProduct()"><img src="images/add-field2x.png" width="33">
          </a>
          <div class="text-block-6">Añadir mas productos</div>
        </div>
        <div class="w-row">
          <div class="w-col w-col-9">
            <input class="factura-field w-input"
                  id="promo_code"
                  ng-model="invoices.promoCode"
                  ng-change="invoices.searchCode()"
                  placeholder="Codigo promocional"
                  type="text">
            <small ng-if="invoices.code != ''" style="color: @{{invoices.codeColor}}">@{{invoices.codeMessage}}</small>
          </div>
          <div class="code w-col w-col-3">
            <div class="points" ng-if="invoices.code.points">+@{{invoices.code.points}} pts</div>
          </div>
        </div>
        <div class="row-3 w-row">
          <div class="w-col w-col-9">
            <div class="text-block-7">CANTIDAD TOTAL DE PUNTOS ACUMULADOS</div>
          </div>
          <div class="w-col w-col-3">
            <div class="code points">+@{{invoices.totalPoints | totalPointsFilter:invoices}} pts</div>
          </div>
        </div>
        <input type="hidden" ng-init="invoices.user_id = {{Auth::user()->id}}">
        <div class="div-block-20" style="margin-top: 10%; padding-bottom: 1em;">
          <div class="text-block-8">* Campos obligatorios</div>
          <button class="alt-btn btn-success w-button" ng-if="!invoices.loading" ng-click="invoices.storeInvoice()" type="submit" ng-disabled="invoicesForm.$invalid || invoicesForm.file.$error.maxSize">Sumar Puntos</button>
          <button class="alt-btn btn-success w-button" ng-if="invoices.loading" type="submit" ng-disabled="true">Cargando...</button>
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
        </div>
      </div>
      <div class="image-shadow">
        <img src="images/elipse.png" alt="">
      </div>
    </form>
  </div>
</div>
 <div class="footer">
  <div class="footer-text">Toda la información aquí contenida es propiedad de Summit Agro Argentina S.A., prohibida su reproducción total o parcial, exhibición y/o uso sin expresa autorización de Summit Agro Argentina S.A.
      <br>
      Carlos Pellegrini 719, Piso 8 (C1009ABO), Cuidad de Buenos Aires Tel: (011) 3750-6750 - Copyright Summit Agro Argentina 2013. Todos los derechos reservados. <a  target="_blank" href="/bases" style="color:white">Bases & Condiciones</a>
      <br>
      Si tenés alguna duda escribinos a <a style="color:white" href="mailto:summitsamurai@summit-agro.com.ar">summitsamurai@summit-agro.com.ar</a></div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>

<script src="bower_components/angular/angular.min.js"></script>
<script src="bower_components/ng-file-upload/ng-file-upload.js"></script>
<script src="js/components/invoices/module.js"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>