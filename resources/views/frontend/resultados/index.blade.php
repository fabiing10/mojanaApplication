@extends('frontend.layouts.participacion')

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
          <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
        </div>
        <div class="row">
          <h2>Edad</h2>
          <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
        </div>
      </div>
    <div class="col-xs-4" style="background-color:#f5f5f5; padding-left: 35px;">
      <div class="row">
        <h2>Regimen de salud</h2>
        <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
      </div>
      <div class="row">
        <h2>Estrato Socioeconomico</h2>
        <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
      </div>
    </div>
    <div class="col-xs-4" style="padding-left: 35px;">
      <div class="row">
        <h2>Ocupacion</h2>
        <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
      </div>
      <div class="row">
        <h2>Discapacidad</h2>
        <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="col-xs-5" style="padding-left: 35px;">
        <div class="row">
          <h2>Nivel Educativo</h2>
          <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
        </div>
    </div>
    <div class="col-xs-7">
      <div class="row" style="padding-top: 55px;">
        <div class="col-xs-2">

        </div>
        <div class="col-xs-4">
          <div class="row" style="padding-right:20px;">
        <h2 style="text-align: right; line-height: 35px !important;">Ha estado en<br>situacion de<br>desplazamiento o<br>ha sido victima del<br>conflicto armado</h2>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="row">
        <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
      </div>
      </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12" style="padding-left: 35px;">
      <div class="row">
        <h2>Actores</h2>
        <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:100%; height: 150px;"></img>
      </div>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-md-1 numbers">
    <h3>2</h3>
  </div>
  <div class="col-md-11">
    <h3>UBICACION</h3>
  </div>
</div>
<div class="row">
    <div class="col-xs-8" >
      <div class="col-xs-12"style="padding-left: 35px; background-color:#eaeaea;">
      <div class="row">
        <h2 style="text-align:center;">Participacion por municipio</h2>
        <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <h2>Quienes han salido<br> de su departamento</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <h2>Quienes han salido<br> de su Municipio</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
  </div>
  <div class="col-xs-4" style="padding-left: 35px;">
    <div class="row">
      <h2>Sector</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
    <div class="row">
      <h2>Tiempo de Residencia</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
  </div>
</div>
<br>
<div class="row" style="background:#f5f5f5; padding-left:35px;">
    <label class="pt-10 label-questions">ESTADO DE LA INFRAESRUCTURA, EQUIPAMIENTO Y <br/> ELEMENTOS AMBIENTALES DE SU ZONA POR TEMAS</label>
      <br>
      <div class="col-md-12">
      <table class="mleft-20 mbottom-10">
      <tr>
        <th rowspan="2" class="ambiental text-center white">AMBIENTAL</th>
        <td>Ríos, quebradas y ciénagas del municipio</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Diques, jarillones, terraplanes</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <th rowspan="16" class="social text-center white">SOCIAL</th>
        <td>Espacios públicos del municipio en general</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Parques del barrio o vereda</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Los puestos de salud del municipio</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Los puestos de salud del barrio o vereda</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Centros culturales y artísticos en el municipio</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Centros culturales y artísticos del barrio o vereda</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Centros educativos del municipio</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Centros educativos del barrio o vereda</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Centros deportivos y de recreación del municipio</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Centros deportivos y de recreación del barrio o vereda</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Bibliotecas públicas del municipio</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Bibliotecas públicas del barrio o vereda</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Ciclo vías o cliclorutas del municipio</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Ciclo vías o ciclorutas del barrio o vereda</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Las obras patrimoniales de su municipio</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Las obras patrimoniales de su comunidad</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <th rowspan="3" class="economico text-center white">ECONÓMICO</th>
        <td>Las vías principales del departamento</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Las vías principales del municipio</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
        <td>Las vías del barrio o vereda</td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
        <td><div class="">0%</div></td>
      </tr>
      <tr>
    </table>
  </div>
</div>
<br>
<div class="row">
  <div class="col-xs-6">
    <div class="row">
      <h2>ESTADO DE LA INFRAESTRUCTURA,<br>EQUIPAMIENTO Y ELEMENTOS<br>AMBIENTALES DE SU ZONA</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
  </div>
  <div class="col-xs-6">
    <div class="row">
      <h2>ESTADO DE LA INFRAESTRUCTURA,<br>EQUIPAMIENTO Y ELEMENTOS AMBIENTALES<br>DE SU ZONA POR DIMENSIONES</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
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
      <h2>Condiciones fisicas de las viviendas</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
  </div>
  <div class="col-xs-6" style="padding-left: 35px;">
    <div class="row">
      <h2>La vivienda es</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
  </div>
</div>
<br>
<div class="row" style="background:#f5f5f5;">
  <div class="col-xs-6" style="padding-left: 35px;">
    <div class="row">
      <h2>La vivienda cuenta con</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
  </div>
  <div class="col-xs-6" style="padding-left: 35px;">
    <div class="row">
      <div class="col-xs-6">
        <h2>Le gustaria que<br>permitieran<br>mas suelo para</h2>
      </div>
      <div class="col-xs-6">
        <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-3" style="padding-left: 35px;">
    <div class="row">
    </div>
  </div>
  <div class="col-xs-6" style="padding-left: 35px;">
    <div class="row">
      <h2>Problemas por temas</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
  </div>
  <div class="col-xs-3" style="padding-left: 35px;">
    <div class="row">
    </div>
  </div>
</div>
<br>
<div class="row" style="background:#f5f5f5;">
  <div class="col-xs-4" style="padding-left: 35px;">
    <div class="row">
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
  </div>
  <div class="col-xs-8" style="padding-left: 35px;">
    <div class="row">
      <h2>Dimensiones principales por municipio</h2>
      <img src="http://team6.co.kr/wp-content/uploads/2014/11/default-placeholder-1024x1024-960x500.png" style="width:90%;"></img>
    </div>
  </div>
</div>
<br>
<div class="row" style="background:#018b38;">
  <div class="col-xs-12" style="padding-left: 35px; padding-left:35px;">
    <div class="row">
      <div class="col-xs-4"><h1 style="color:white;">AMBIENTAL</h1></div><div class="col-xs-8"><h2 style="color:white;">variables</h2></div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>

      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h4> Contaminacion por mineria </h4>
      </div>
      <div class="row">
        <h4> Contaminacion de fuentes hidricas y ecosistemas </h4>
      </div>
      <div class="row">
        <h4> Residuos solidos </h4>
      </div>
      <div class="row">
        <h4> Contaminacion ambiental </h4>
      </div>
      <div class="row">
        <h4> Deforestacion</h4>
      </div>
      <div class="row">
        <h4> Inundaciones </h4>
      </div>
      <div class="row">
        <h4> Sequias </h4>
      </div>
      <div class="row">
        <h4> Especies foraneas </h4>
      </div>
      <div class="row">
        <h4> Ecosistemas nativos </h4>
      </div>
      <div class="row">
        <h4> Contaminacion Ambiental </h4>
      </div>
      <div class="row">
        <h4> Sedimentacion </h4>
      </div>
      <div class="row">
        <h4> Erosion </h4>
      </div>
    </div>
  </div>
</div>

<div class="row" style="padding-left:35px;">
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Temas ambientales por municipio</h2>
        <div class="col-xs-6">
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
        </div>
        <div class="col-xs-6" style="padding-left:15px;">
          <div class="row">
            <h4 style="color:black;"> Achi </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Ayapel </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Caimito </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Guaranda </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Magangue </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Majagual </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Nechi </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> San Benito Abad </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> San Jacinto del Cauca </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> San Marcos </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Sucre </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Ubicacion</h2>

      </div>
    </div>
</div>

<div class="row" style="background:#4d4d4c;">
  <div class="col-xs-12" style="padding-left: 35px; padding-left:35px;">
    <div class="row">
      <div class="col-xs-4"><h1 style="color:white;">SOCIAL</h1></div><div class="col-xs-8"><h2 style="color:white;">variables</h2></div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>

      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h4> Contaminacion por mineria </h4>
      </div>
      <div class="row">
        <h4> Contaminacion de fuentes hidricas y ecosistemas </h4>
      </div>
      <div class="row">
        <h4> Residuos solidos </h4>
      </div>
      <div class="row">
        <h4> Contaminacion ambiental </h4>
      </div>
      <div class="row">
        <h4> Deforestacion</h4>
      </div>
      <div class="row">
        <h4> Inundaciones </h4>
      </div>
      <div class="row">
        <h4> Sequias </h4>
      </div>
      <div class="row">
        <h4> Especies foraneas </h4>
      </div>
      <div class="row">
        <h4> Ecosistemas nativos </h4>
      </div>
      <div class="row">
        <h4> Contaminacion Ambiental </h4>
      </div>
      <div class="row">
        <h4> Sedimentacion </h4>
      </div>
      <div class="row">
        <h4> Erosion </h4>
      </div>
    </div>
  </div>
</div>

<div class="row" style="padding-left:35px;">
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Temas ambientales por municipio</h2>
        <div class="col-xs-6">
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
        </div>
        <div class="col-xs-6" style="padding-left:15px;">
          <div class="row">
            <h4 style="color:black;"> Achi </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Ayapel </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Caimito </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Guaranda </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Magangue </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Majagual </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Nechi </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> San Benito Abad </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> San Jacinto del Cauca </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> San Marcos </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Sucre </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Ubicacion</h2>

      </div>
    </div>
</div>

<div class="row" style="background:#0095df;">
  <div class="col-xs-12" style="padding-left: 35px; padding-left:35px;">
    <div class="row">
      <div class="col-xs-4"><h1 style="color:white;">ECONOMICO</h1></div><div class="col-xs-8"><h2 style="color:white;">variables</h2></div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>
        <div class="row">
          <h4 style="text-align:right;"> Contaminacion por mineria </h4>
        </div>

      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h4> Contaminacion por mineria </h4>
      </div>
      <div class="row">
        <h4> Contaminacion de fuentes hidricas y ecosistemas </h4>
      </div>
      <div class="row">
        <h4> Residuos solidos </h4>
      </div>
      <div class="row">
        <h4> Contaminacion ambiental </h4>
      </div>
      <div class="row">
        <h4> Deforestacion</h4>
      </div>
      <div class="row">
        <h4> Inundaciones </h4>
      </div>
      <div class="row">
        <h4> Sequias </h4>
      </div>
      <div class="row">
        <h4> Especies foraneas </h4>
      </div>
      <div class="row">
        <h4> Ecosistemas nativos </h4>
      </div>
      <div class="row">
        <h4> Contaminacion Ambiental </h4>
      </div>
      <div class="row">
        <h4> Sedimentacion </h4>
      </div>
      <div class="row">
        <h4> Erosion </h4>
      </div>
    </div>
  </div>
</div>

<div class="row" style="padding-left:35px;">
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Temas ambientales por municipio</h2>
        <div class="col-xs-6">
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
          <div class="row">
            <h4 style="color:black; text-align:right;"> Contaminacion </h4>
          </div>
        </div>
        <div class="col-xs-6" style="padding-left:15px;">
          <div class="row">
            <h4 style="color:black;"> Achi </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Ayapel </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Caimito </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Guaranda </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Magangue </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Majagual </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Nechi </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> San Benito Abad </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> San Jacinto del Cauca </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> San Marcos </h4>
          </div>
          <div class="row">
            <h4 style="color:black;"> Sucre </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-6" style="padding-left: 35px;">
      <div class="row">
        <h2>Ubicacion</h2>

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
