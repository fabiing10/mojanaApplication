<div class="row nivel_educativo">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_nivel_educativo['primaria'] > 60)
      <div class="bar bg-3764B5 right" style="width:{{$datos_nivel_educativo['primaria']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_nivel_educativo['primaria']}}% </label>
      </div>
      @else
      <label style="margin-right:5px;">{{$datos_nivel_educativo['primaria']}}%</label>
      <div class="bar bg-3764B5 right" style="width:{{$datos_nivel_educativo['primaria']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Primaria</span>
    </div>
  </div>
</div>
<div class="row nivel_educativo">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_nivel_educativo['secundaria'] > 60)
      <div class="bar bg-5A6CBA right" style="width:{{$datos_nivel_educativo['secundaria']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_nivel_educativo['secundaria']}}% </label>
      </div>
      @else
      <label style="margin-right:5px;">{{$datos_nivel_educativo['secundaria']}}%</label>
      <div class="bar bg-5A6CBA right" style="width:{{$datos_nivel_educativo['secundaria']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Secundaria</span>
    </div>
  </div>
</div>
<div class="row nivel_educativo">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_nivel_educativo['tecnica'] > 60)
      <div class="bar bg-394F7A right" style="width:{{$datos_nivel_educativo['tecnica']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_nivel_educativo['tecnica']}}% </label>
      </div>
      @else
      <label style="margin-right:5px;">{{$datos_nivel_educativo['tecnica']}}%</label>
      <div class="bar bg-394F7A right" style="width:{{$datos_nivel_educativo['tecnica']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Técnica</span>
    </div>
  </div>
</div>
<div class="row nivel_educativo">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_nivel_educativo['universitaria'] > 60)
      <div class="bar bg-72C4F2 right" style="width:{{$datos_nivel_educativo['universitaria']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_nivel_educativo['universitaria']}}% </label>
      </div>
      @else
      <label style="margin-right:5px;">{{$datos_nivel_educativo['universitaria']}}%</label>
      <div class="bar bg-72C4F2 right" style="width:{{$datos_nivel_educativo['universitaria']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>universitaria</span>
    </div>
  </div>
</div>
<div class="row nivel_educativo">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_nivel_educativo['ninguna'] > 60)
      <div class="bar bg-CFDAFF right" style="width:{{$datos_nivel_educativo['ninguna']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_nivel_educativo['ninguna']}}% </label>
      </div>
      @else
      <label style="margin-right:5px;">{{$datos_nivel_educativo['ninguna']}}%</label>
      <div class="bar bg-CFDAFF right" style="width:{{$datos_nivel_educativo['ninguna']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Ninguna</span>
    </div>
  </div>
</div>
