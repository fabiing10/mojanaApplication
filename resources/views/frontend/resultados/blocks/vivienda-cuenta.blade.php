<div class="row" style="margin-bottom:10px;">
  <div class="col-xs-4">
    <div class="row t-right bar-20">
      Agua Potable
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_servicios['agua_si'] > 80)
      <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['agua_si']}}%;"><label class="left_bar w-c">{{$datos_servicios['agua_si']}}%</label></div>
      @else
      <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['agua_si']}}%;"></div><label class="left_bar">{{$datos_servicios['agua_si']}}%</label>
      @endif

      @if($datos_servicios['agua_no'] > 80)
      <div class="bar bg-e30613 h-20 left_bar" style="width:{{$datos_servicios['agua_no']}}%;"><label class="left_bar w-c">{{$datos_servicios['agua_no']}}%</label></div>
      @else
      <div class="bar bg-e30613 h-20 left_bar" style="width:{{$datos_servicios['agua_no']}}%;"></div><label class="left_bar">{{$datos_servicios['agua_no']}}%</label>
      @endif
    </div>
  </div>
</div>

<div class="row" style="margin-bottom:10px;">
  <div class="col-xs-4">
    <div class="row t-right bar-20">
      Alcantarillado
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_servicios['alcantarillado_si'] > 80)
        <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['alcantarillado_si']}}%;"><label class="left_bar w-c">{{$datos_servicios['alcantarillado_si']}}%</label></div>
      @else
        <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['alcantarillado_si']}}%;"></div><label class="left_bar">{{$datos_servicios['alcantarillado_si']}}%</label>
      @endif

      @if($datos_servicios['alcantarillado_no'] > 80)
        <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['alcantarillado_no']}}%;"><label class="left_bar w-c">{{$datos_servicios['alcantarillado_no']}}%</label></div>
      @else
        <div class="bar bg-e30613 h-20 left_bar" style="width:{{$datos_servicios['alcantarillado_no']}}%;"></div><label class="left_bar">{{$datos_servicios['alcantarillado_no']}}%</label>
      @endif

    </div>
  </div>
</div>

<div class="row" style="margin-bottom:10px;">
  <div class="col-xs-4">
    <div class="row t-right bar-20">
      Energía
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_servicios['energia_si'] > 80)
      <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['energia_si']}}%;"><label class="left_bar w-c">{{$datos_servicios['energia_si']}}%</label></div>
      @else
      <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['energia_si']}}%;"></div><label class="left_bar">{{$datos_servicios['energia_si']}}%</label>
      @endif

      @if($datos_servicios['energia_no'] > 80)
      <div class="bar bg-e30613 h-20 left_bar" style="width:{{$datos_servicios['energia_no']}}%;"> <label class="left_bar w-c">{{$datos_servicios['energia_no']}}%</label></div>
      @else
      <div class="bar bg-e30613 h-20 left_bar" style="width:{{$datos_servicios['energia_no']}}%;"></div><label class="left_bar">{{$datos_servicios['energia_no']}}%</label>
      @endif
    </div>
  </div>
</div>

<div class="row" style="margin-bottom:10px;">
  <div class="col-xs-4">
    <div class="row t-right bar-20">
      Gas
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">

      @if($datos_servicios['gas_si'] > 80)
      <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['gas_si']}}%;"><label class="left_bar w-c">{{$datos_servicios['gas_si']}}%</label></div>
      @else
      <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['gas_si']}}%;"></div><label class="left_bar">{{$datos_servicios['gas_si']}}%</label>
      @endif

      @if($datos_servicios['gas_no'] > 80)
      <div class="bar bg-e30613 h-20 left_bar" style="width:{{$datos_servicios['gas_no']}}%;"><label class="left_bar w-c">{{$datos_servicios['gas_no']}}%</label></div>
      @else
      <div class="bar bg-e30613 h-20 left_bar" style="width:{{$datos_servicios['gas_no']}}%;"></div><label class="left_bar">{{$datos_servicios['gas_no']}}%</label>
      @endif

    </div>
  </div>
</div>

<div class="row" style="margin-bottom:10px;">
  <div class="col-xs-4">
    <div class="row t-right bar-20">
      Recolección de basuras
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_servicios['recoleccion_si'] > 80)
      <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['recoleccion_si']}}%;"><label class="left_bar w-c">{{$datos_servicios['recoleccion_si']}}%</label></div>
      @else
      <div class="bar bg-1d1d1b h-20 left_bar" style="width:{{$datos_servicios['recoleccion_si']}}%;"></div><label class="left_bar">{{$datos_servicios['recoleccion_si']}}%</label>
      @endif

      @if($datos_servicios['recoleccion_no'] > 80)
      <div class="bar bg-e30613 h-20 left_bar" style="width:{{$datos_servicios['recoleccion_no']}}%;"><label class="left_bar w-c">{{$datos_servicios['recoleccion_no']}}%</label></div>
      @else
      <div class="bar bg-e30613 h-20 left_bar" style="width:{{$datos_servicios['recoleccion_no']}}%;"></div><label class="left_bar">{{$datos_servicios['recoleccion_no']}}%</label>
      @endif

    </div>
  </div>
</div>
