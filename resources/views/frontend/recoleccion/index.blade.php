@extends('frontend.layouts.recoleccion')

@section('container')
<div class="container">
  <div class="col-md-2">
      <figure>
        <a href="http://regionmojana.com/" target="_self">
          <img src="http://regionmojana.com/wp-content/uploads/2016/12/logo-dark-175x70.png" width="175" height="70" alt="logo-white" title="logo-white"></a>
      </figure>
  </div>
  <div class="col-md-9">
    <div class="col-md-1 btn-home">
        <figure>
        <a href="http://regionmojana.com/" target="_self"><img src="http://regionmojana.com/wp-content/uploads/2017/01/home.png" width="30" height="30" alt="icono-home" title="icono-home" style="margin-top: 10px;"></a>
      </figure>
    </div>
    <div class="col-md-5 title-internal">
        <h2 class="c-black">Participación</h2>
    </div>
    <div class="col-md-6">
        <div>
              <figure class="btn-redes">
                <a href="https://www.facebook.com/Regi%C3%B3n-Mojana-858663344273256/" target="_blank"><img src="http://regionmojana.com/wp-content/uploads/2017/01/facebook-1.png" width="38" height="38" alt="facebook" title="facebook"></a>
              </figure>
        </div>
        <div>
              <figure class="btn-redes">
                <a href="https://twitter.com/regionmojana" target="_blank"><img src="http://regionmojana.com/wp-content/uploads/2017/01/twitter-2.png" width="38" height="38" alt="twitter" title="twitter"></a>
              </figure>
        </div>
        <div>
              <figure class="btn-redes">
                <a href="https://www.youtube.com/channel/UCOQqMp2oZA09bbHDpoVogSg" target="_blank"><img src="http://regionmojana.com/wp-content/uploads/2017/01/youtube-2.png" width="38" height="38" alt="youtube" title="youtube"></a>
               </figure>
        </div>
        <div>
              <figure class="btn-redes">
                <a href="https://www.instagram.com/regionmojana/" target="_blank"><img src="http://regionmojana.com/wp-content/uploads/2017/01/instagram-2.png" width="38" height="38" alt="instagram" title="instagram"></a>
              </figure>
        </div>
        <div>
              <figure class="btn-redes">
                <a href="http://regionmojana.com/contacto/" target="_self"><img src="http://regionmojana.com/wp-content/uploads/2017/01/message-1.png" width="38" height="38" alt="message" title="message"></a>
              </figure>
        </div>
        <div>
              <figure class="btn-redes">
                <a href="http://regionmojana.com/contacto/" target="_self"><img src="http://regionmojana.com/wp-content/uploads/2017/01/participe-38x38.png" width="38" height="38" alt="participe" title="participe"></a>
              </figure>
        </div>
    </div>
  </div>
  <div class="col-md-1">
    <p>
      <a id="menu-layout" class="overlay-menu-toggle" href="#">
        <span class="menu-text">Menu</span>
        <i class="open icon-menu-fine">
        </i>
        <i class="close icon-cancel-fine">
        </i>
      </a>
    </p>
  </div>
  <div class="col-md-12 pt-10 background-dark">
    <div class="col-md-1">

    </div>
    <div class="col-md-11">
    <ul>
      <a href="">Inicio</a>
      <o>/</o>
      <a href="">Participación</a>
      <o>/ Resultados formulario</o>
    </ul>
    </div>
  </div>
</div>

<!-- formulario -->

<div class="row contenido">
{!! Form::open(['url' => 'participacion/nuevo' , 'method' => 'post']) !!}
<div class="form-group">
  <div class="col-md-1 numbers">
    <h3>1</h3>
  </div>
  <div class="col-md-11">
    <h3>IDENTIFICACIÓN</h3>
  </div>
</div>
<div class="row">
  <div class="row">
    <div class="col-xs-4" style="padding-left: 35px;">
        <div class="row">
          <h2>Genero</h2>
          @include('frontend.resultados.blocks.genero')


        </div>

        <div class="row" style="    margin-top: 55px;">
          <h2>Edad</h2>
          <canvas id="chartEdades" width="400" height="300"></canvas>
        </div>
      </div>
    <div class="col-xs-4" style="background-color:#f5f5f5; padding-left: 35px;">
      <div class="row">
        <h2>Régimen de salud</h2>
          <canvas id="chartRegimenSalud" width="400" height="200"></canvas>
        </div>
        <div class="row">
          <h2>Nivel Educativo</h2>
            @include('frontend.resultados.blocks.nivel_educativo')
          </div>
    </div>
    <div class="col-xs-4" style="padding-left: 35px;">
      <div class="row">
        <h2>Ocupación</h2>
            @include('frontend.resultados.blocks.ocupacion')
        </div>
      <div class="row">
        <h2>Discapacidad</h2>
          @include('frontend.resultados.blocks.discapacidad')
        </div>
    </div>
  </div>
  <div class="row">

    <div class="col-xs-12">
      <div class="row" style="padding-top: 55px;">
        <div class="col-xs-9">
          <div class="row" style="padding-right:20px;">
        <h2 style="text-align: right; line-height: 35px !important;">Ha estado en situacion de desplazamiento o<br>ha sido victima del conflicto armado</h2>
        </div>
      </div>
      <div class="col-xs-3">
        <div class="row">
          <canvas id="chartSituacionDesplazamiento" width="300" height="200"></canvas>
        </div>
      </div>
      </div>
    </div>
  </div>

</div>
<div class="form-group">
  <div class="col-md-1 numbers">
    <h3>2</h3>
  </div>
  <div class="col-md-11">
    <h3>UBICACIÓN</h3>
  </div>
</div>
<div class="row">
    <div class="col-xs-8" >
      <div class="col-xs-12"style="padding-left: 35px; background-color:#eaeaea;">
      <div class="row">
        <h2 style="text-align:center;">Participación por municipio</h2>
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
          <canvas id="chartMunicipios" width="400" height="200"></canvas>
        </div>
      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <h2>Quiénes han salido<br> de su departamento</h2>
      <canvas id="chartHanSalido" width="400" height="200"></canvas>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <h2>Quiénes han salido<br> de su Municipio</h2>
      <canvas id="chartHanSalidoM" width="400" height="200"></canvas>
    </div>
  </div>
  <div class="col-xs-4" style="padding-left: 35px;">
    <div class="row">
      <h2>Sector</h2>
      @include('frontend.resultados.blocks.sector')
    </div>
    <div class="row">
      <h2 class="header-padding">Tiempo de Residencia</h2>
        <canvas id="chartTiempoResidencia" width="300" height="200"></canvas>
      </div>
  </div>
</div>
<br>
<div class="row" style="background:#f5f5f5; padding-left:35px;">
    <h2>ESTADO DE LA INFRAESRUCTURA, EQUIPAMIENTO Y <br/> ELEMENTOS AMBIENTALES DE SU ZONA POR TEMAS</h2>
      <br>
      <div class="col-md-12">
      <table class="mleft-20 mbottom-10">
      <tr>
        <th rowspan="2" class="ambiental text-center white">AMBIENTAL</th>
        <td class="inner_table1">Ríos, quebradas y ciénagas del municipio</td>

      </tr>
      <tr>
        <td class="inner_table2">Diques, jarillones, terraplanes</td>

      </tr>
      <tr>
        <th rowspan="16" class="social text-center white">SOCIAL</th>
        <td class="inner_table3">Espacios públicos del municipio en general</td>

      </tr>
      <tr>
        <td class="inner_table4">Parques del barrio o vereda</td>
      </tr>
      <tr>
        <td class="inner_table5">Los puestos de salud del municipio</td>
      </tr>
      <tr>
        <td class="inner_table6">Los puestos de salud del barrio o vereda</td>
      </tr>
      <tr>
        <td class="inner_table7">Centros culturales y artísticos en el municipio</td>
      </tr>
      <tr>
        <td class="inner_table8">Centros culturales y artísticos del barrio o vereda</td>
      </tr>
      <tr>
        <td class="inner_table9">Centros educativos del municipio</td>
      </tr>
      <tr>
        <td class="inner_table10">Centros educativos del barrio o vereda</td>
      </tr>
      <tr>
        <td class="inner_table11">Centros deportivos y de recreación del municipio</td>
      </tr>
      <tr>
        <td class="inner_table12">Centros deportivos y de recreación del barrio o vereda</td>
      </tr>
      <tr>
        <td class="inner_table13">Bibliotecas públicas del municipio</td>
      </tr>
      <tr>
        <td class="inner_table14">Bibliotecas públicas del barrio o vereda</td>
      </tr>
      <tr>
        <td class="inner_table15">Ciclo vías o cliclorutas del municipio</td>
      </tr>
      <tr>
        <td class="inner_table16">Ciclo vías o ciclorutas del barrio o vereda</td>
      </tr>
      <tr>
        <td class="inner_table17">Las obras patrimoniales de su municipio</td>
      </tr>
      <tr>
        <td class="inner_table18">Las obras patrimoniales de su comunidad</td>
      </tr>
      <tr>
        <th rowspan="3" class="economico text-center white">ECONÓMICO</th>
        <td class="inner_table19">Las vías principales del departamento</td>
      </tr>
      <tr>
        <td class="inner_table20">Las vías principales del municipio</td>
      </tr>
      <tr>
        <td class="inner_table21">Las vías del barrio o vereda</td>
      </tr>
      <tr>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-xs-6">
    <div class="row">
      <h2>Estado de la infraestructura, equipamiento y elemento ambientales de su zona.</h2>
      </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      <h2>Estado de la infraestructura, Equipamiento y elementos ambientales de su zona por Dimensiones</h2>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-md-1 numbers">
    <h3>3</h3>
  </div>
  <div class="col-md-11">
    <h3>VIVIENDAS Y SERVICIOS</h3>
  </div>
</div>
<div class="row">
  <div class="col-xs-6" style="padding-left: 35px;">
    <div class="row">
      <h2>Condiciones físicas de las viviendas</h2>
      <canvas id="chartCondiciones" width="400" height="200"></canvas>
    </div>
  </div>
  <div class="col-xs-6" style="padding-left: 35px;">
    <div class="row">
      <h2>La vivienda cuenta con</h2>
      @include('frontend.resultados.blocks.vivienda-cuenta')
    </div>
  </div>
</div>



{!! Form::close() !!}
</div>
@stop
