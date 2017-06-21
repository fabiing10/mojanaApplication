<div class="row estudiante">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_discapacidad['si'] > 60)
      <div class="bar bg-575756 right" style="width:{{$datos_discapacidad['si']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_discapacidad['si']}}% </label>
      </div>
      @else
      <label style="margin-right:5px;">{{$datos_discapacidad['si']}}%</label>
      <div class="bar bg-575756 right" style="width:{{$datos_discapacidad['si']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Si</span>
    </div>
  </div>
</div>
<div class="row estudiante">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_discapacidad['no'] > 60)
      <div class="bar bg-878787 right" style="width:{{$datos_discapacidad['no']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_discapacidad['no']}}% </label>
      </div>
      @else
      <label style="margin-right:5px;">{{$datos_discapacidad['no']}}%</label>
      <div class="bar bg-878787 right" style="width:{{$datos_discapacidad['no']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>No</span>
    </div>
  </div>
</div>
