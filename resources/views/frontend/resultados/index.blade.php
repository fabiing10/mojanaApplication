@extends('frontend.layouts.respuestas')

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
        <h2 class="c-black">Resultados Online</h2>
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
        <span class="menu-text" style="color:#001923 !important;">Menu</span>
        <img src="../participacion/images/menu.png" alt="#" ></img>
      </a>
    </p>
  </div>
  <div class="col-md-12 pt-10 background-dark">

    <div class="col-md-11">
    <ul>
      <a href="http://regionmojana.com/">Inicio</a>
      <o>/</o>
      <a href="http://regionmojana.com/participacion/">Participación</a>
      <o>/ Completar formulario</o>
    </ul>
    </div>
  </div>
</div>
<!-- formulario -->

<div class="container" style="padding-top:0px;">
{!! Form::open(['url' => 'participacion/nuevo' , 'method' => 'post']) !!}
<div class="form-group" style="margin-bottom: 0px;">
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
        <h2>Estrato Socio Económico</h2>
          <canvas id="chartSector" width="400" height="300"></canvas>
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
      <div class="col-xs-5" style="padding-left: 35px;">
        <div class="row">
          <h2>Nivel Educativo</h2>
            @include('frontend.resultados.blocks.nivel_educativo')
          </div>
    </div>
    <div class="col-xs-7">
      <div class="row" style="padding-top: 55px;">
        <div class="col-xs-6">
          <div class="row" style="padding-right:20px;">
        <h2 style="text-align: right; line-height: 35px !important;">Ha estado en<br>situacion de<br>desplazamiento o<br>ha sido victima del<br>conflicto armado</h2>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="row">
          <canvas id="chartSituacionDesplazamiento" width="300" height="200"></canvas>
        </div>
      </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12" style="padding-left: 35px;">
      <div class="row">
        <h2>Actores</h2>
        <canvas id="chartActores" width="400" height="50"></canvas>
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
        <div class="col-md-4">
          <img src="/participacion/images/mapa_select.png" class="img_mapa"/>
        </div>
        <div class="col-md-8">
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
    <div class="row m-t-20">
      <h2 class="header-padding" style="text-align: center;">Tiempo de Residencia</h2>
        <canvas id="chartTiempoResidencia" width="200" height="100"></canvas>
        <div class="row block-tiempo_residencia">
          <div class="row m-b-10">
            <div class="col-xs-6">
              <div class="t_r_01" ></div>
            </div>
            <div class="col-xs-6 label-g-c"> 1 a 10 Años</div>
          </div>
          <div class="row m-b-10">
            <div class="col-xs-6">
              <div class="t_r_02" ></div>
            </div>
            <div class="col-xs-6 label-g-c"> 11 a 20 Años</div>
          </div>
          <div class="row m-b-10">
            <div class="col-xs-6">
              <div class="t_r_03" ></div>
            </div>
            <div class="col-xs-6 label-g-c"> 21 a 30 Años</div>
          </div>
          <div class="row m-b-10">
            <div class="col-xs-6">
              <div class="t_r_04" ></div>
            </div>
            <div class="col-xs-6 label-g-c">Mas de 30 Años</div>
          </div>

        </div>
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
      <canvas id="chartEstadoInfraestructura" width="400" height="160"></canvas>
      </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      <h2>Estado de la infraestructura, Equipamiento y elementos ambientales de su zona por Dimensiones</h2>
      <table id="resultado" style="width:80%; margin:0 auto; text-align:center;">


        <tr>
          <th></th>
          <th class="">E</th>
          <th class="">B</th>
          <th class="">M</th>
          <th class="">NE</th>

        </tr>
        <tr class="">
          <th class="" style="text-align:center;">Ambiental</th>
          <th class="ver" style="background:#006b2b;">30%</th>
          <th class="ver" style="background:#009640;">40%</th>
          <th class="ver" style="background:#00b248;">20%</th>
          <th class="ver" style="background:#00fc66;">10%</th>

        </tr>
        <tr class="">
          <th class="" style="text-align:center;">Social</th>
          <th class="ver" style="background:#333333;">24%</th>
          <th class="ver" style="background:#575756;">36%</th>
          <th class="ver" style="background:#919191;">35%</th>
          <th class="ver" style="background:#d6d6d6;">5%</th>

        </tr>
        <tr class="">
          <th class="" style="text-align:center;">Economico</th>
          <th class="ver" style="background:#005877;">43%</th>
          <th class="ver" style="background:#047faa;">16%</th>
          <th class="ver" style="background:#009fe3;">29%</th>
          <th class="ver" style="background:#40ceff;">12%</th>
        </tr>
      </table>
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
      <h2>La vivienda es</h2>
      <canvas id="chartViviendaEs" width="400" height="200"></canvas>
    </div>
  </div>
</div>
<br>
<div class="row" style="background:#f5f5f5;">
  <div class="col-xs-6" style="padding-left: 35px;">
    <div class="row">
      <h2>La vivienda cuenta con</h2>
      @include('frontend.resultados.blocks.vivienda-cuenta')
    </div>
  </div>
  <div class="col-xs-6" style="padding-left: 35px;">
    <div class="row">
      <div class="col-xs-5">
        <h2>Le gustaria que permitieran<br>mas suelo para</h2>
      </div>
      <div class="col-xs-7" style="margin-top: 40px;">
        @include('frontend.resultados.blocks.suelo')
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-10" style="padding-left: 35px;">
    <div class="row">
      <h2>Problemas por temas</h2>
      <div class="row">
        @include('frontend.resultados.blocks.problemas-tema')
      </div>
    </div>
  </div>
<br>
<div class="row" style="padding-bottom:20px;">
  <div class="col-md-12">
    <h2>Problemas dimension vs tema</h2>
    <div class="row">
      <table id="mojana" style="width:80%; margin:0 auto; text-align:center;">

        <tr>
          <th></th>
          <th colspan="2"><img src="/participacion/images/img_entorno.png" style="width:90%;" /></th>
          <th colspan="4"><img src="/participacion/images/img_infraestructura.png" style="width:90%;" /></th>

        </tr>
        <tr>
          <th></th>
          <th class="title">Suelo</th>
          <th class="title">Estructura<br/>Ecologica</th>
          <th class="title">Transporte<br/>y Movilidad</th>
          <th class="title">Servicios<br/>Publicos</th>
          <th class="title">Espacio<br>Publico</th>
          <th class="title">Edificaciones</th>
        </tr>
        <tr class="tr-ambiental">
          <th class="ambiental" style="text-align:center;">Ambiental</th>
          <th class="ver" style="background:#9d9d9c;"></th>
          <th class="ver" style="background:#706f6f;"></th>
          <th class="ver" style="background:#1d1d1b;"></th>
          <th class="ver" style="background:#3c3c3b;"></th>
          <th class="ver" style="background:#575756;"></th>
          <th class="ver" style="background:#878787;"></th>
        </tr>
        <tr class="tr-social">
          <th class="social" style="text-align:center;">Social</th>
          <th class="ver" style="background:#ededed;"></th>
          <th class="ver" style="background:#ededed;"></th>
          <th class="ver" style="background:#878787;"></th>
          <th class="ver" style="background:#878787;"></th>
          <th class="ver" style="background:#575756;"></th>
          <th class="ver" style="background:#ededed;"></th>
        </tr>
        <tr class="tr-economico">
          <th class="economico" style="text-align:center;">Economico</th>
          <th class="ver" style="background:#b2b2b2;"></th>
          <th class="ver" style="background:#dadada;"></th>
          <th class="ver" style="background:#575756;"></th>
          <th class="ver" style="background:#878787;"></th>
          <th class="ver" style="background:#b2b2b2;"></th>
          <th class="ver" style="background:#ededed;"></th>
        </tr>
      </table>
    </div>
  </div>
</div>

<div class="row row_panel" style="background:#018b38;">
  <div class="col-xs-12" style="padding-left: 35px; padding-left:35px;">
    <div class="row">
      <div class="col-xs-4"><h1 style="color:white;">AMBIENTAL</h1></div><div class="col-xs-8"><h2 style="color:white;">variables</h2></div>
    </div>

    @include('frontend.resultados.blocks.variables_ambientales')
  </div>
</div>

<div class="row row_panel" style="padding-left:35px;">
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Temas Ambientales por municipio</h2>
            @include('frontend.resultados.blocks.temas_ambientales')
      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Ubicación</h2>
        <div id="map_ambiental" style="height:400px;"></div>
      </div>
    </div>
</div>

<div class="row row_panel" style="background:#4d4d4c;">
  <div class="col-xs-12" style="padding-left: 35px; padding-left:35px;">
    <div class="row">
      <div class="col-xs-4"><h1 style="color:white;">SOCIAL</h1></div><div class="col-xs-8"><h2 style="color:white;">variables</h2></div>
    </div>
    @include('frontend.resultados.blocks.variables_sociales')
  </div>
</div>

<div class="row row_panel" style="padding-left:35px;">
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Temas Sociales por municipio</h2>
        @include('frontend.resultados.blocks.temas_sociales')
      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Ubicación</h2>
        <div id="map_social" style="height:400px;"></div>
      </div>
    </div>
</div>

<div class="row row_panel" style="background:#0095df;">
  <div class="col-xs-12" style="padding-left: 35px; padding-left:35px;">
    <div class="row">
      <div class="col-xs-4"><h1 style="color:white;">ECONOMICO</h1></div><div class="col-xs-8"><h2 style="color:white;">variables</h2></div>
    </div>
      @include('frontend.resultados.blocks.variables_economicas')
  </div>
</div>

<div class="row row_panel" style="padding-left:35px;">
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Temas Economicos por municipio</h2>
        @include('frontend.resultados.blocks.temas_economicos')
      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Ubicación</h2>
        <div id="map_economico" style="height:400px;"></div>
      </div>
    </div>
</div>

<div class="row" style="background:gray;">
  <div class="col-xs-12" style="">
    <div class="row">
        <div id="map_general" style="width:100%;height:400px;"></div>
    </div>
  </div>
</div>
<!--<table id="indicadores" style="width: 100%; border: none;" class="indicadores">
  <tbody>
    <tr>
    <th colspan="3"></th>
    <th style="padding-bottom: 0px;" colspan="5"><img style="height: 80%; vertical-align: bottom;" src="http://regionmojana.com/wp-content/uploads/2017/03/infraestructura.png" alt="" /></th>
    <th></th>
    </tr>
    <tr>
    <th></th>
    <th style="padding-bottom: 0px !important; padding-top: 0px !important;" colspan="2"><img style="height: 80%;" src="http://regionmojana.com/wp-content/uploads/2017/03/entorno-natural.png" alt="" /></th>
    <th style="padding-bottom: 0px !important; padding-top: 0px !important;" colspan="3"><img style="height: 80%;" src="http://regionmojana.com/wp-content/uploads/2017/03/publica.png" alt="" /></th>
    <th style="padding-bottom: 0px !important; padding-top: 0px !important; text-align: left;">PRIVADA</th>
    <th colspan="2"></th>
    </tr>
    <tr>
    <th></th>
    <th class="title-tabla">Suelo</th>
    <th class="title-tabla">Estructura
    Ecologica</th>
    <th class="title-tabla">Transporte
    y Movilidad</th>
    <th class="title-tabla">Servicios
    Publicos</th>
    <th class="title-tabla">Espacio
    Publico</th>
    <th class="title-tabla">Edificaciones</th>
    <th colspan="2"></th>
    </tr>
    <tr class="tr-ambiental">
    <th class="ambiental-tabla">Ambiental</th>
    <th class="ver-tabla">
    <div class="button-query" data-query="A-1">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="A-2">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="A-3">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="A-4">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="A-5">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="A-6">Ver +</div></th>
    <th class="ambiental-tabla"><img style="height: 3%;" src="http://regionmojana.com/wp-content/uploads/2017/03/002-next.png" alt="" /></th>
    <th class="title-objetivos" rowspan="3">objetivos</th>
    </tr>
    <tr class="tr-social">
    <th class="social-tabla">Social</th>
    <th class="ver-tabla">
    <div class="button-query" data-query="S-1">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="S-2">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="S-3">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="S-4">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="S-5">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="S-6">Ver +</div></th>
    <th class="social-tabla"><img style="height: 3%;" src="http://regionmojana.com/wp-content/uploads/2017/03/002-next.png" alt="" /></th>
    </tr>
    <tr class="tr-economico">
    <th class="economico-tabla">Economico</th>
    <th class="ver-tabla">
    <div class="button-query" data-query="E-1">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="E-2">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="E-3">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="E-4">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="E-5">Ver +</div></th>
    <th class="ver-tabla">
    <div class="button-query" data-query="E-6">Ver +</div></th>
    <th class="economico-tabla"><img style="height: 3%;" src="http://regionmojana.com/wp-content/uploads/2017/03/002-next.png" alt="" /></th>
    </tr>
    <tr>
    <th></th>
    <th class="arrows-tabla"><img style="height: 3%;" src="http://regionmojana.com/wp-content/uploads/2017/03/001-down-arrow.png" alt="" /></th>
    <th class="arrows-tabla"><img style="height: 3%;" src="http://regionmojana.com/wp-content/uploads/2017/03/001-down-arrow.png" alt="" /></th>
    <th class="arrows-tabla"><img style="height: 3%;" src="http://regionmojana.com/wp-content/uploads/2017/03/001-down-arrow.png" alt="" /></th>
    <th class="arrows-tabla"><img style="height: 3%;" src="http://regionmojana.com/wp-content/uploads/2017/03/001-down-arrow.png" alt="" /></th>
    <th class="arrows-tabla"><img style="height: 3%;" src="http://regionmojana.com/wp-content/uploads/2017/03/001-down-arrow.png" alt="" /></th>
    <th class="arrows-tabla"><img style="height: 3%;" src="http://regionmojana.com/wp-content/uploads/2017/03/001-down-arrow.png" alt="" /></th>
    <th colspan="2"></th>
    </tr>
    <tr>
    <th></th>
    <th class="titlefooter-tabla" colspan="6">Desarrollo y Equilibrio Territorial</th>
    <th colspan="2"></th>
    </tr>
  </tbody>
</table>-->
{!! Form::close() !!}
</div>
@stop
