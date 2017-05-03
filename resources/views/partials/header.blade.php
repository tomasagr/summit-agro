<style>
  .header-main {
  position: relative;
  padding-top: 28px;
  background-image: url('/images/header-top.png');
  background-position: 0px 0px;
  background-size: 100%;
  background-repeat: no-repeat;
}

.header-content {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  max-width: 1230px;
  margin-right: auto;
  margin-left: auto;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}

.logo-image {
  width: 340px;
}

.header-logo {
  display: inline-block;
  width: auto;
  -webkit-box-flex: 1;
  -webkit-flex: 1 0;
  -ms-flex: 1 0;
  flex: 1 0;
}

.houses {
  width: 100%;
  position: relative;
}

.header-links {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  width: 35%;
  margin-bottom: -39px;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-flex: 0;
  -webkit-flex: 0 auto;
  -ms-flex: 0 auto;
  flex: 0 auto;
}

.header-link {
  z-index: 1;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 109px;
  height: 46px;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  font-family: Lato, sans-serif;
  color: #555;
  text-decoration: none;
}

.header-link:hover {
  background-image: url('/images/hover.png');
  background-position: 50% 50%;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
}

.header-link.active {
  background-image: url('/images/hover.png');
  background-position: 0px 0px;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
}

.header-mobile {
    display: none;
  }

@media all and (min-width: 1656px) {
  .header-main {
    padding-top: 60px;
  }
}

@media all and (max-width: 990px) {
  .header-main {
    display: none;
  }

  .header-mobile {
    display: block;
  }

  .header-houses {
    width: 100%;
    position: absolute;
    z-index: -1;
  }

  .logo-mobile {
    text-align: center;
    padding-top: 1em;
  }

  .header-links {
    display: flex;
    width: 100%;
    margin-bottom: -24px;
    margin-top: 53px;
  }

  .header-link {
    font-size: 10px;
    width: 99px;
    height: 38px;
  }
}
</style>
<div class="header-main">
    <div class="header-content">
      <div class="header-logo">
        <a href="/home"><img class="logo-image" src="/images/logo-summit.svg"></a>
      </div>
      <div class="header-links">
        <div class="houses">
          <img src="/images/menu-bg.png" alt="" style="position: absolute; top: -50px; left: 0px;">
        </div>
        <a class="header-link w-inline-block" href="/home">
          <div>INICIO</div>
        </a>
        <a class="active header-link w-inline-block" href="/profile">
          <div>MI PERFIL</div>
        </a>
        <a class="header-link w-inline-block" href="/logout">
          <div>SALIR</div>
        </a>
      </div>
    </div>
  </div>

  <div class="header-mobile">
    <img class="header-houses" src="/images/houses-bg.png">
    <div class="logo-mobile">
      <a href="/home"><img width="300" src="/images/logo-summit.svg"></a>
    </div>

    <div class="header-links">
        <a class="header-link w-inline-block" href="/home">
          <div>INICIO</div>
        </a>
        <a class="active header-link w-inline-block" href="/profile">
          <div>MI PERFIL</div>
        </a>
        <a class="header-link w-inline-block" href="/logout">
          <div>SALIR</div>
        </a>
      </div>
  </div>