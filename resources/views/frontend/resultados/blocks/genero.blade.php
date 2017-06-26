<div class="row">
  <div class="col-xs-3">
    <div class="row t-right">
      {{$datos_genero['hombres']}} %
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      <div class="bar bg-348EA9 bar_data" style="width:{{$datos_genero['hombres']}}%;">M</div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-3">
    <div class="row t-right">
      {{$datos_genero['mujeres']}} %
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      <div class="bar bg-53BB9B bar_data" style="width:{{$datos_genero['mujeres']}}%">F</div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-3">
    <div class="row t-right">
      {{$datos_genero['otros']}} %
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      <div class="bar bg-53BB9B bar_data" style="width:{{$datos_genero['otros']}}%">O</div>
    </div>
  </div>
</div>
