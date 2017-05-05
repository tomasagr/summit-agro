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
          
        </div>
      </div>
      <div class="w-slide">
        <div class="row-7 w-row">
        <div class="column-11 w-col w-col-4">
            <a class="@{{selectedPelo == 'pelo-3' ? 'box-active' : ''}} m-bg pelo-3 slider-btn w-button"  ng-click="selectPelo('pelo-3')" href="#"></a>
          </div>
           <div class="column-9 w-col w-col-4">
            <a class="@{{selectedPelo == 'pelo-4' ? 'box-active' : ''}} m-bg pelo-4 slider-btn w-button"  ng-click="selectPelo('pelo-4')" href="#"></a>
          </div>
        </div>
      </div>  
      <div class="w-slide">
        <div class="row-7 w-row">
         
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
        </div>
      </div>
      <div class="w-slide">
        <div class="row-7 w-row">
         <div class="column-11 w-col w-col-4">
          <a class="@{{selectedOjos == 'ojos-3' ? 'box-active' : ''}} m-bg ojos-3 slider-btn w-button"
          ng-click="selectOjos('ojos-3')" href="#"></a>
        </div>
        <div class="column-9 w-col w-col-4">
          <a class="@{{selectedOjos == 'ojos-3' ? 'box-active' : ''}} m-bg ojos-4 slider-btn w-button"
          ng-click="selectOjos('ojos-4')" href="#"></a>
        </div>
      </div>
    </div>
    <div class="w-slide">
      <div class="row-7 w-row">
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
         
        </div>
      </div>
      <div class="w-slide">
        <div class="row-7 w-row">
         <div class="column-11 w-col w-col-4">
            <a class="@{{selectedBoca == 'boca-3' ? 'box-active' : ''}} m-bg boca-3 slider-btn w-button"
            ng-click="selectBoca('boca-3')" href="#"></a>
          </div>
          <div class="column-9 w-col w-col-4">
            <a class="@{{selectedBoca == 'boca-4' ? 'box-active' : ''}} m-bg boca-4 slider-btn w-button" 
            ng-click="selectBoca('boca-4')" href="#"></a>
          </div>
        </div>
      </div>
      <div class="w-slide">
        <div class="row-7 w-row">
          
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