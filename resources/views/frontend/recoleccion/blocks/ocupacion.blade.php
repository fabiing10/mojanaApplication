<div class="row estudiante">

  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_ocupacion['estudiante'] > 60)
      <div class="bar bg-B17F4A right" style="width:{{$datos_ocupacion['estudiante']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_ocupacion['estudiante']}}% </label>
      </div>
      @else
      <label style="margin-right: 5px;">{{$datos_ocupacion['estudiante']}}% </label><div class="bar bg-B17F4A right" style="width:{{$datos_ocupacion['estudiante']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Estudiante</span>
    </div>
  </div>
</div>
<div class="row estudiante">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_ocupacion['empleado'] > 60)
      <div class="bar bg-7D4E24 right" style="width:{{$datos_ocupacion['empleado']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_ocupacion['empleado']}}% </label>
      </div>
      @else
      <label style="margin-right: 5px;">{{$datos_ocupacion['empleado']}}%</label><div class="bar bg-7D4E24 right" style="width:{{$datos_ocupacion['empleado']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Empleado</span>
    </div>
  </div>
</div>
<div class="row estudiante">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_ocupacion['independiente'] > 60)
      <div class="bar bg-CA9E67 right" style="width:{{$datos_ocupacion['independiente']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_ocupacion['independiente']}}% </label>
      </div>
      @else
      <label style="margin-right: 5px;">{{$datos_ocupacion['independiente']}}%</label><div class="bar bg-CA9E67 right" style="width:{{$datos_ocupacion['independiente']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Independiente</span>
    </div>
  </div>
</div>
<div class="row estudiante">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_ocupacion['desempleado'] > 60)
      <div class="bar bg-3C3C3B right" style="width:{{$datos_ocupacion['desempleado']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_ocupacion['desempleado']}}% </label>
      </div>
      @else
      <label style="margin-right: 5px;">{{$datos_ocupacion['desempleado']}}%</label><div class="bar bg-3C3C3B right" style="width:{{$datos_ocupacion['desempleado']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Desempleado</span>
    </div>
  </div>
</div>
<div class="row estudiante">
  <div class="col-xs-6">
    <div class="row t-right">
      @if($datos_ocupacion['hogar'] > 60)
      <div class="bar bg-7B6A58 right" style="width:{{$datos_ocupacion['hogar']}}%;">
        <label style="float: left; color: white; margin-left: 5px;">{{$datos_ocupacion['hogar']}}% </label>
      </div>
      @else
      <label style="margin-right: 5px;">{{$datos_ocupacion['hogar']}}%</label><div class="bar bg-7B6A58 right" style="width:{{$datos_ocupacion['hogar']}}%;"></div>
      @endif
    </div>
  </div>
  <div class="col-xs-3">
    <div class="row t-left">
      <span>Hogar</span>
    </div>
  </div>
</div>
