<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com -->
<!--  Last Published: Mon Apr 03 2017 18:46:36 GMT+0000 (UTC)  -->
<html data-wf-page="58d63f394f3644b01d6493b5" data-wf-site="58d6377d8ca365092ba2436b">
<head>
  <meta charset="utf-8">
  <title>Summit Agro | Cargar Factura</title>
  <meta content="Productos Disponibles" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
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
<body ng-app="loadInvoices" ng-controller="InvoicesController as invoices">
  <img class="image-13" sizes="100vw" src="images/cargar-bg.png" srcset="images/cargar-bg.png 500w, images/cargar-bg.png 800w, images/cargar-bg.png 1080w, images/cargar-bg.png 1600w, images/cargar-bg.png 1920w"><img class="image-14" sizes="100vw" src="images/capa-header.png" srcset="images/capa-header-p-500x21.png 500w, images/capa-header-p-800x33.png 800w, images/capa-header-p-1080x45.png 1080w, images/capa-header.png 1366w">
  <div class="div-block-11">
    <div class="container-custom">
      <div class="div-block-12">
        <a href="/home"><img class="image-15" src="images/logo-summit.svg"></a>
        <ul class="unordered-list-2 w-list-unstyled">
          <li class="list-item-4"><a href="/" class="link-6">INICIO</a>
          </li>
          <li class="list-item-4 link-active">
            <a class="link-8" href="/profile">MI PERFIL</a>
          </li>
          <li class="list-item-4">
            <a class="link-7" href="/logout">SALIR</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card-success" ng-if="invoices.formHidden" ng-cloak>
    <h3>Puntos cargados con exito</h3>
    <button onclick="window.location.href='/invoices'" class="btn-success">Volver a cargar</button>
  </div>
  <div class="container-custom" ng-if="!invoices.formHidden">
    <div class="w-form">
      <form name="invoicesForm" novalidate ng-cloak>
        <div class="div-block-14">
          <div class="div-block-15">
            <a class="w-inline-block" href="#">
              <img ngf-thumbnail="invoices.invoice.file || 'images/factura.png'">
            </a>
            <a class="btn-success info w-button"
            ngf-pattern="'image/*'"
            ngf-select
            ng-model="invoices.invoice.file"
            ngf-accept="'image/*'"
            ngf-max-size="20MB"
            href="#">Cargar factura</a>
          </div>
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
                data-name="date"
                id="date"
                maxlength="256"
                ng-model="invoices.invoice.date"
                placeholder="*Fecha"
                required="required"
                type="date">
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
              <div class="w-col w-col-6">
                <div class="header-table">Productos</div>
              </div>
              <div class="w-col w-col-3">
                <div class="header-table">Cantidad</div>
              </div>
              <div class="w-col w-col-3">
                <div class="header-table">Puntos</div>
              </div>
            </div>
          </div>
          <div>
            <div class="row-2 w-row" ng-repeat="product in invoices.productList" ng-cloak>
              <div class="w-col w-col-6">
                <select class="factura-field w-select"
                ng-model="invoices.invoice.products[$index]"
                id="products"
                name="products"
                required
                ng-options="item as item.name for item in invoices.products">
                <option value="">Seleccionar</option>
              </select>
            </div>
            <div class="column-3 w-col w-col-3">
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
            <div class="w-col w-col-3">
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
            placeholder="*Codigo promocional"
            type="text">
            <small ng-if="invoices.code != ''" style="color: @{{invoices.codeColor}}">@{{invoices.codeMessage}}</small>
          </div>
          <div class="code w-col w-col-3">
            <div class="points" ng-if="invoices.code.points">+@{{invoices.code.points}} pts</div>
          </div>
        </div>
        <div class="div-block-19"></div>
        <div class="row-3 w-row">
          <div class="w-col w-col-9">
            <div class="text-block-7">CANTIDAD TOTAL DE PUNTOS ACUMULADOS</div>
          </div>
          <div class="w-col w-col-3">
            <div class="code points">+@{{invoices.totalPoints | totalPointsFilter:invoices}} pts</div>
          </div>
        </div>
        <input type="hidden" ng-init="invoices.user_id = {{Auth::user()->id}}">
        <div class="div-block-20">
          <div class="text-block-8">* Campos obligatorios</div>
          <button class="alt-btn btn-success w-button" ng-click="invoices.storeInvoice()" type="submit" ng-disabled="invoicesForm.$invalid">Sumar Puntos</button>
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
        </div>
      </div>
    </form>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>

<script src="bower_components/angular/angular.min.js"></script>
<script src="bower_components/ng-file-upload/ng-file-upload.js"></script>
<script src="js/components/invoices/module.js"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>