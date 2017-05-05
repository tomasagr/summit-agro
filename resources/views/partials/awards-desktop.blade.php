@foreach($level as $award)
<a href="/user/{{Auth::user()->id}}/awards/{{$award->id}}"
 class="desktop item-premio-link @if(Auth::user()->points < $award->points || $award->stock <= 0) {{"not-active"}}@else  {{"doLink"}} @endif">
 <div class="div-block-25">
  <div class="div-block-26"><img class="image-25" src="{{$award->image}}" width="185">
    <img class="image-24" src="images/lock.png" width="190" @if(Auth::user()->points >= $award->points) {{"style=display:none"}}@endif>
  </div>
  <div class="text-block-13" >{{$award->points}} puntos</div>
  <div class="text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>{{$award->name}}</div>
  <div class="text-14 text-block-14" @if(Auth::user()->points >= $award->points) {{"style=color:black"}}@endif>Disponible {{$award->stock}}u.</div>
</div>
</a>
@endforeach