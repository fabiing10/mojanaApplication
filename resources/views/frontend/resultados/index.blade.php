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
  {!! Form::open(['url' => 'resultados/redirect' , 'method' => 'post' , 'id' => 'FormSearch']) !!}
  <input type="hidden" name="option_url" id="option_url" value="{{$option_url}}" />
  <select name="municipio" id="municipio" onchange="submitForm()" class="general_select">
    <option value="general">Seleccione una municipio</option>
    <option value="general">General</option>
    <option value="nechi">Nechí</option>
    <option value="achi">Achí</option>
    <option value="magangue">Magangué</option>
    <option value="san_jacinto_cauca">San Jacinto del Cauca</option>
    <option value="ayapel">Ayapel</option>
    <option value="caimito">Caimito</option>
    <option value="guaranda">Guaranda</option>
    <option value="majagual">Majagual</option>
    <option value="san_benito_abad">San Benito Abad</option>
    <option value="san_marcos">San Marcos</option>
    <option value="sucre">Sucre</option>

  </select>
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
    <div class="col-xs-4" style="">
        <div class="row row-gral" style="padding-bottom: 70px;">
          <h2>Género</h2>
          @include('frontend.resultados.blocks.genero')
        </div>

        <div class="row row-gral" style="margin-top: 15px;">
          <h2>Edad</h2>
          <canvas id="chartEdades" width="400" height="300"></canvas>
          <br>
          <div class="row">
            <div class="col-xs-6" style="background-color:#006633;text-align:center;color:white;">18 - 25 Años</div>
            <div class="col-xs-6" style="background-color:#2fac66;text-align:center;color:white;">25 - 35 Años</div>
            <div class="col-xs-6" style="background-color:#00a19a;text-align:center;color:white;">35 - 45 Años</div>
            <div class="col-xs-6" style="background-color:#00e0cf;text-align:center;color:white;">45 - 55 Años</div>
            <div class="col-xs-6" style="background-color:#2bca6d;text-align:center;color:white;">55 - 68 Años</div>
            <div class="col-xs-6" style="background-color:#1eaeff;text-align:center;color:white;">68 - 80 Años</div>
          </div>
        </div>
      </div>
    <div class="col-xs-4" style="background-color:#f5f5f5; ">
      <div class="row row-gral">
        <h2>Régimen de salud</h2>
          <canvas id="chartRegimenSalud" width="400" height="200"></canvas>
        </div>
      <div class="row row-gral">
        <h2>Estrato Socio Económico</h2>
          <canvas id="chartEstrato" width="400" height="300"></canvas>
          <br>
          <div class="row">
            <div class="col-xs-6" style="background-color:#3764B5;text-align:center;color:white;">Estrato 1</div>
            <div class="col-xs-6" style="background-color:#5A6CBA;text-align:center;color:white;">Estrato 2</div>
            <div class="col-xs-6" style="background-color:#394F7A;text-align:center;color:white;">Estrato 3</div>
            <div class="col-xs-6" style="background-color:#72C4F2;text-align:center;color:white;">Estrato 4</div>
            <div class="col-xs-6" style="background-color:#1eaeff;text-align:center;color:white;">Estrato 5</div>
            <div class="col-xs-6" style="background-color:#1eaeff;text-align:center;color:white;">Estrato 6</div>

          </div>
        </div>
    </div>
    <div class="col-xs-4" style="">
      <div class="row row-gral">
        <h2>Ocupación</h2>
            @include('frontend.resultados.blocks.ocupacion')
        </div>
      <div class="row row-gral">
        <h2>Discapacidad</h2>
          @include('frontend.resultados.blocks.discapacidad')
        </div>
    </div>
  </div>
  <div class="row row-gral">
      <div class="col-xs-5" style="">
        <div class="row">
          <h2>Nivel Educativo</h2>
            @include('frontend.resultados.blocks.nivel_educativo')
          </div>
    </div>
    <div class="col-xs-7">
      <div class="row" style="padding-top: 55px;">
        <div class="col-xs-6">
          <div class="row" style="padding-right:20px;">
        <h2 style="text-align: right; line-height: 35px !important;">Ha estado en<br>situación de<br>desplazamiento o<br>ha sido víctima del<br>conflicto armado</h2>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="row ">
          <canvas id="chartSituacionDesplazamiento" width="300" height="200"></canvas>
          <br>
          <div class="row">
            <div class="col-xs-6" style="background-color:#484847;text-align:center;color:white;">Si</div>
            <div class="col-xs-6" style="background-color:#878787;text-align:center;color:white;">No</div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12" style="">
      <div class="row">
        <h2>Actores</h2>
        <canvas id="chartActores" width="400" height="50"></canvas>
      </div>
    </div>
  </div>
</div>
<div class="data-line">
  <div class="col-md-1 numbers">
    <h3>2</h3>
  </div>
  <div class="col-md-11">
    <h3>UBICACIÓN</h3>
  </div>
</div>
<div class="row">
    <div class="col-xs-8" >
      <div class="col-xs-12"style=" background-color:#eaeaea;">
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
    <div class="col-xs-6" style="">
      <div class="row row-gral">
      <h2>Quiénes han salido<br> de su departamento</h2>
      <canvas id="chartHanSalido" width="400" height="200"></canvas>
    </div>
    </div>
    <div class="col-xs-6" style="">
      <div class="row row-gral">
      <h2>Quiénes han salido<br> de su Municipio</h2>
      <canvas id="chartHanSalidoM" width="400" height="200"></canvas>
      </div>
    </div>
  </div>
  <div class="col-xs-4" style="">
    <div class="row row-gral">
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
    <h2 style="padding-left:5px;">Estado de la infraestructura, equipamiento y<br> elementos ambientales de su zona por temas.</h2>
      <br>
      <div class="col-md-12">
      <table class="mleft-20 mbottom-10">
        <tr>
         <td></td>
         <td></td>
         <td style="text-align:center; width:80px;"><img style="width:20%; padding:0px;"src="../participacion/images/excelente.png" alt=""></td>
         <td style="text-align:center; width:80px;"><img style="width:20%; padding:0px;"src="../participacion/images/bueno.png" alt=""></td>
         <td style="text-align:center; width:80px;"><img style="width:20%; padding:0px;"src="../participacion/images/malo.png" alt=""></td>
         <td style="text-align:center; width:80px;"><img style="width:20%; padding:0px;"src="../participacion/images/no_existe.png" alt=""></td>
       </tr>
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
          <th class=""><img style="width:20%; padding:0px;"src="../participacion/images/excelente.png" alt=""></th>
          <th class=""><img style="width:20%; padding:0px;"src="../participacion/images/bueno.png" alt=""></th>
          <th class=""><img style="width:20%; padding:0px;"src="../participacion/images/malo.png" alt=""></th>
          <th class=""><img style="width:20%; padding:0px;"src="../participacion/images/no_existe.png" alt=""></th>

        </tr>
        <tr class="">
          <th class="" style="text-align:center;">Ambiental</th>
          <th class="ver" style="background:#006b2b;">{{$datos_dimensiones['table']['ea']}}%</th>
          <th class="ver" style="background:#009640;">{{$datos_dimensiones['table']['ba']}}%</th>
          <th class="ver" style="background:#00b248;">{{$datos_dimensiones['table']['ma']}}%</th>
          <th class="ver" style="background:#00fc66;">{{$datos_dimensiones['table']['nea']}}%</th>

        </tr>
        <tr class="">
          <th class="" style="text-align:center;">Social</th>
          <th class="ver" style="background:#333333;">{{$datos_dimensiones['table']['es']}}%</th>
          <th class="ver" style="background:#575756;">{{$datos_dimensiones['table']['bs']}}%</th>
          <th class="ver" style="background:#919191;">{{$datos_dimensiones['table']['ms']}}%</th>
          <th class="ver" style="background:#d6d6d6;">{{$datos_dimensiones['table']['nes']}}%</th>

        </tr>
        <tr class="">
          <th class="" style="text-align:center;">Económico</th>
          <th class="ver" style="background:#005877;">{{$datos_dimensiones['table']['ee']}}%</th>
          <th class="ver" style="background:#047faa;">{{$datos_dimensiones['table']['be']}}%</th>
          <th class="ver" style="background:#009fe3;">{{$datos_dimensiones['table']['me']}}%</th>
          <th class="ver" style="background:#40ceff;">{{$datos_dimensiones['table']['nee']}}%</th>
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="data-line">
  <div class="col-md-1 numbers">
    <h3>3</h3>
  </div>
  <div class="col-md-11">
    <h3>VIVIENDA Y SERVICIOS</h3>
  </div>
</div>
<div class="row">
  <div class="col-xs-6" style="">
    <div class="row row-gral-bg">
      <h2>Condiciones físicas de las viviendas</h2>
      <canvas id="chartCondiciones" width="400" height="200"></canvas>
    </div>
  </div>
  <div class="col-xs-6" style="">
    <div class="row row-gral-bg">
      <h2>La vivienda es</h2>
      <canvas id="chartViviendaEs" width="400" height="200"></canvas>
    </div>
  </div>
</div>
<br>
<div class="row" style="background:#f5f5f5;">
  <div class="col-xs-6" style="">
    <div class="row row-gral-bg">
      <h2>La vivienda cuenta con</h2>
      @include('frontend.resultados.blocks.vivienda-cuenta')
      <div class="row cuenta_con_bar">
      <div class="col-xs-3"><div class="bar bg-1d1d1b h-20 w-c">Si</div></div>
      <div class="col-xs-3"><div class="bar bg-e30613 h-20 w-c">No</div></div>
      </div>
    </div>
  </div>
  <div class="col-xs-6" style="">
    <div class="row row-gral-bg">
      <div class="col-xs-5">
        <h2>Le gustaría que permitieran<br>mas suelo para</h2>
      </div>
      <div class="col-xs-7" style="margin-top: 40px;">
        @include('frontend.resultados.blocks.suelo')
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-10" style="">
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
          <th class="economico" style="text-align:center;">Económico</th>
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
  <div class="col-xs-12" style=" padding-left:35px;">
    <div class="row">
      <div class="col-xs-4"><h1 style="color:white;">AMBIENTAL</h1></div><div class="col-xs-8"><h2 style="color:white;">Temas por Problematicas</h2></div>
    </div>

    @include('frontend.resultados.blocks.variables_ambientales')
  </div>
</div>

<div class="row row_panel" style="padding-left:35px;">
    <div class="col-xs-6" style="">
      <div class="row">
        <h2>Temas Ambientales por municipio</h2>
            @include('frontend.resultados.blocks.temas_ambientales')
      </div>
    </div>
    <div class="col-xs-6" style="">
      <div class="row">
        <h2>Ubicación</h2>
        <div id="map_ambiental" style="height:400px;"></div>
      </div>
    </div>
</div>

<div class="row row_panel" style="background:#4d4d4c;">
  <div class="col-xs-12" style=" padding-left:35px;">
    <div class="row">
      <div class="col-xs-4"><h1 style="color:white;">SOCIAL</h1></div><div class="col-xs-8"><h2 style="color:white;">Temas por Problematicas</h2></div>
    </div>
    @include('frontend.resultados.blocks.variables_sociales')
  </div>
</div>

<div class="row row_panel" style="padding-left:35px;">
    <div class="col-xs-6" style="">
      <div class="row">
        <h2>Temas Sociales por municipio</h2>
        @include('frontend.resultados.blocks.temas_sociales')
      </div>
    </div>
    <div class="col-xs-6" style="">
      <div class="row">
        <h2>Ubicación</h2>
        <div id="map_social" style="height:400px;"></div>
      </div>
    </div>
</div>

<div class="row row_panel" style="background:#0095df;">
  <div class="col-xs-12" style=" padding-left:35px;">
    <div class="row">
      <div class="col-xs-4"><h1 style="color:white;">ECONÓMICO</h1></div><div class="col-xs-8"><h2 style="color:white;">Temas por Problematicas</h2></div>
    </div>
      @include('frontend.resultados.blocks.variables_economicas')
  </div>
</div>

<div class="row row_panel" style="padding-left:35px;">
    <div class="col-xs-6" style="">
      <div class="row">
        <h2>Temas Economicos por municipio</h2>
        @include('frontend.resultados.blocks.temas_economicos')
      </div>
    </div>
    <div class="col-xs-6" style="">
      <div class="row">
        <h2>Ubicación</h2>
        <div id="map_economico" style="height:400px;"></div>
      </div>
    </div>
</div>

<div class="row" style="background:#08113c;margin-bottom:15px;">
  <div class="row">
    <h2 style="color:white;text-align:center;">Mapa General de Problematicas por Tema</h2>
  </div>
  <div class="col-xs-12" style="">
    <div class="row">
        <div id="map_general" style="width:100%;height:600px;"></div>
    </div>
  </div>
</div>
<div class="row border-download" style="margin-bottom:100px;">
  <div class="col-xs-9" ></div>
  <div class="col-xs-3">
    <a href="" id="download_url" target="_blank">
      <img src="http://regionmojana.com/wp-content/uploads/2017/06/download_bg.png" width="200" style="float:right;"/>
    </a>
  </div>
</div>
{!! Form::close() !!}
</div>
@stop
