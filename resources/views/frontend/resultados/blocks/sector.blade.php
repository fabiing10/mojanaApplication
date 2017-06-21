<div class="row estudiante">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_sector['rural'] >60)
      <div class="bar bg-006633 right" style="width:{{$datos_sector['rural']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_sector['rural']}}% </label>
      </div>
      @else
      <label style="margin-right:5px;">{{$datos_sector['rural']}}%</label>
      <div class="bar bg-2fac66 right" style="width:{{$datos_sector['rural']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>RURAL</span>
    </div>
  </div>
</div>
<div class="row estudiante">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_sector['urbano'] >60)

      <div class="bar bg-2fac66 right" style="width:{{$datos_sector['urbano']}}%;">
      <label style="float: left; color: white; margin-left: 5px;">  {{$datos_sector['urbano']}}%</label>
      </div>
      @else
      <label style="margin-right:5px;">{{$datos_sector['urbano']}}%</label>
      <div class="bar bg-2fac66 right" style="width:{{$datos_sector['urbano']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>URBANO</span>
    </div>
  </div>
</div>
