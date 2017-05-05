<div class="slider w-slider" data-animation="slide" data-duration="500">
  <div class="w-slider-mask">
    @foreach($level as $award)
    <div class="w-slide">
      <a href="/user/{{Auth::user()->id}}/awards/{{$award->id}}"
       class="mobile item-premio-link @if(Auth::user()->points < $award->points || $award->stock <= 0) {{"not-active"}}@else  {{"doLink"}} @endif">
       <div class="div-block-25">
        <div class="div-block-26">
          <img class="image-25" src="{{$award->image}}" width="185">
          <img class="image-24" src="images/lock.png" width="190" @if(Auth::user()->points >= $award->points) {{"style=display:none"}}@endif>
        </div>
        <div class="text-block-13" >{{$award->points}} pts.</div>
        <div class="text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>{{$award->name}}</div>
        <div class="text-14 text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>Disponible {{$award->stock}}u.
        </div>
      </div>
    </a>
  </div>
  @endforeach
</div>
<div class="left-arrow w-slider-arrow-left"></div>
<div class="right-arrow w-slider-arrow-right"></div>
</div>