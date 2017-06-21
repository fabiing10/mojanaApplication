<div class="row">
  <div class="col-xs-6">
    <div class="row t-right bar-30">
      Vivienda
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_suelo['vivienda'] > 60)
      <div class="bar bg-1d1d1b l-left" style="width:{{$datos_suelo['vivienda']}}%;">
        <label style="margin-right:5px; float:right; color:white;">{{$datos_suelo['vivienda']}}%</label>
      </div>
      @else
      <div class="bar bg-1d1d1b l-left" style="width:{{$datos_suelo['vivienda']}}%;"></div>
      <label style="margin-left:5px;">{{$datos_suelo['vivienda']}}%</label>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-6 ">
    <div class="row t-right bar-30">
      Comercio
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_suelo['comercio'] > 60)
      <div class="bar bg-3C3C3B l-left" style="width:{{$datos_suelo['comercio']}}%">
        <label style="margin-right:5px; float:right; color:white;">{{$datos_suelo['comercio']}}%</label>
      </div>
      @else
      <div class="bar bg-3C3C3B l-left" style="width:{{$datos_suelo['comercio']}}%"></div>
      <label style="margin-left:5px;">{{$datos_suelo['comercio']}}%</label>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-6 ">
    <div class="row t-right bar-30">
      Conservación
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_suelo['conservacion'] > 60)
      <div class="bar bg-b2b2b2 l-left" style="width:{{$datos_suelo['conservacion']}}%">
        <label style="margin-right:5px; float:right; color:white;">{{$datos_suelo['conservacion']}}%</label>
      </div>
      @else
      <div class="bar bg-b2b2b2 l-left" style="width:{{$datos_suelo['conservacion']}}%"></div>
      <label style="margin-left:5px;">{{$datos_suelo['conservacion']}}%</label>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-6">
    <div class="row t-right bar-30">
      Protección
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_suelo['proteccion'] > 60)
      <div class="bar bg-dadada l-left" style="width:{{$datos_suelo['proteccion']}}%">
        <label style="margin-right:5px; float:right; color:white;">{{$datos_suelo['proteccion']}}%</label>
      </div>
      @else
      <div class="bar bg-dadada l-left" style="width:{{$datos_suelo['proteccion']}}%"></div>
      <label style="margin-left:5px;">{{$datos_suelo['proteccion']}}%</label>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-6">
    <div class="row t-right bar-30">
      Agricultura
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_suelo['agricultura'] > 60)
      <div class="bar bg-1d1d1b l-left" style="width:{{$datos_suelo['agricultura']}}%">
        <label style="margin-right:5px; float:right; color:white;">{{$datos_suelo['agricultura']}}%</label>
      </div>
      @else
      <div class="bar bg-1d1d1b l-left" style="width:{{$datos_suelo['agricultura']}}%"></div>
      <label style="margin-left:5px;">{{$datos_suelo['agricultura']}}%</label>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-6">
    <div class="row t-right bar-30">
      Ganaderia
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_suelo['ganaderia'] > 60 )
      <div class="bar bg-3C3C3B l-left" style="width:{{$datos_suelo['ganaderia']}}%"></div>
      <label style="margin-right:5px; float:right; color:white;">{{$datos_suelo['ganaderia']}}%</label>
      @else
      <div class="bar bg-3C3C3B l-left" style="width:{{$datos_suelo['ganaderia']}}%"></div>
      <label style="margin-left:5px;">{{$datos_suelo['ganaderia']}}%</label>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-6">
    <div class="row t-right bar-30">
      Mineria
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_suelo['mineria'] > 60)
      <div class="bar bg-b2b2b2 l-left" style="width:{{$datos_suelo['mineria']}}%">
        <label style="margin-right:5px; float:right; color:white;">{{$datos_suelo['mineria']}}%</label>
      </div>
      @else
      <div class="bar bg-b2b2b2 l-left" style="width:{{$datos_suelo['mineria']}}%"></div>
      <label style="margin-left:5px;">{{$datos_suelo['mineria']}}%</label>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-6">
    <div class="row t-right bar-30">
      Industria
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_suelo['industria'] > 60)
      <div class="bar bg-dadada l-left" style="width:{{$datos_suelo['industria']}}%">
        <label style="margin-right:5px; float:right; color:white;">{{$datos_suelo['industria']}}%</label>
      </div>
      @else
      <div class="bar bg-dadada l-left" style="width:{{$datos_suelo['industria']}}%"></div>
      <label style="margin-left:5px;">{{$datos_suelo['industria']}}%</label>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xs-6">
    <div class="row t-right bar-30">
      Vias
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      @if($datos_suelo['vias'] > 60)
      <div class="bar bg-1d1d1b l-left" style="width:{{$datos_suelo['vias']}}%">
        <label style="margin-right:5px; float:right; color:white;">{{$datos_suelo['vias']}}%</label>
      </div>
      @else
      <div class="bar bg-1d1d1b l-left" style="width:{{$datos_suelo['vias']}}%"></div>
      <label style="margin-left:5px;">{{$datos_suelo['vias']}}%</label>
      @endif
    </div>
  </div>
</div>
