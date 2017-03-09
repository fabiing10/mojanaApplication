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
      <h2 class="c-black">Participacion</h2>
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
</div>

<!-- formulario -->

<div class="row contenido">
<p class="text-justify fz-20">Gracias por hacer parte de éste proceso de participación que servirá para identificar las necesidades más
relevantes y la visión de la región. Llene los siguientes campos:</p>
<form role="form" method="post">
{!! csrf_field() !!}
<div class="form-group">
  <div class="col-xs-1"><h4>1</h4></div><div class="col-xs-11"><h3>IDENTIFICACION</h3></div>
</div>
<div class="row">
  <div class="col-xs-6">
    <input type="text" class="form-control mbottom-5" name="nombres_apellidos" id="nombres_apellidos" placeholder="NOMBRES Y APELLIDOS">
  </div>
  <!-- TIPO DE IDENTIFICACION -->
  <div class="col-xs-6">
    <select class="form-control mleft-10" name="tipo_identificacion">
      <option>TIPO DE DOCUMENTO DE IDENTIFICACION</option>
      <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
      <option value="Cédula de Extranjería">Cédula de Extranjería</option>
      <option value="Tarjeta de identidad">Tarjeta de identidad</option>
      <option value="NIT">NIT</option>
    </select>
  </div>
</div>
<div class="row mbottom-5">
  <div class="col-xs-6">
      <!-- EDAD -->
    <select class="form-control" name="edad">
      <option>Seleccione su Edad</option>
      @for ($i = 18; $i < 57; $i++)
        <option value="{{$i}}">{{$i}}</option>
      @endfor
    </select>
  </div>
  <div class="col-xs-6">
    <!-- IDENTIFICACION -->
    <input type="text" class="form-control mleft-10" name="identificacion" id="identificacion" placeholder="NUMERO DE DOCUMENTO DE IDENTIFICAION">
  </div>
</div>
<div class="row">
  <div class="col-xs-3 grey-left" style=" padding-bottom: 20px; ">
    <div class="col-xs-3">
      <!-- GENERO -->
    <label class="pt-10">GENERO</label>
    </div>
    <div class="col-xs-6">
      <div class="checkbox">
        <label><input type="radio" value="1" name="genero">MASCULINO</label>
      </div>
      <div class="checkbox">
        <label><input type="radio" value="2" name="genero">FEMENINO</label>
      </div>
      <div class="checkbox">
        <label><input type="radio" value="3" name="genero">OTRO</label>
      </div>
    </div>
  </div>
  <div class="col-xs-3 grey-left" style=" width: 23.5%; padding-bottom: 10px;">
    <!-- REGIMEN DE SALUD -->
        <label class="pt-10">RÉGIMEN DE SALUD</label>
          <div class="checkbox">
          <label>
            <input type="radio" value="SUBSIDIADO" name="regimen_salud">
            SUBSIDIADO
          </label>
          </div>
          <div class="checkbox">
          <label>
            <input type="radio" value="CONTRIBUTIVO" name="regimen_salud">
            CONTRIBUTIVO
          </label>
          </div>
        </div>
<div class="col-xs-6">
  <!-- OCUPACION -->
  <select class="form-control mleft-5 mbottom-5" name="ocupacion">
    <option>OCUPACION</option>
    <option value="ARQUITECTO">arquitecto</option>
    <option value="GANADERO">ganadero</option>
    <option value="CONSTRUCTOR">constructor</option>
  </select>
  <!-- GRUPO ETNICO -->
  <input type="text" class="form-control mleft-5 mbottom-5" name="grupo_etnico" id="grupo-etnico" placeholder="GRUPO ETNICO">
  <div class="row mleft-5 grey-full p-3">
    <!-- DISCAPACIDAD -->
  <label>DISCAPACIDAD</label>
  <label class="checkbox-inline">
      <input type="radio" name="discapacidad" id="checkboxdiscapacidad" value="1"> SI
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="discapacidad" id="checkboxdiscapacidad" value="0"> NO
    </label>
    </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <!-- ESTRATO SOCIOECONÓMICO -->
        <input type="text" class="form-control grey-right" name="estrato" id="estrato-socioeconomico" placeholder="ESTRATO SOCIOECONÓMICO">
      </div>
      <div class="col-xs-6">
        <!-- NIVEL EDUCATIVO -->
        <input type="text" class="form-control grey-right mleft-10" name="nivel_educativo" id="nivel-educativo" placeholder="NIVEL EDUCATIVO">
      </div>
    </div>
    <div class="row grey-full">
      <div class="col-xs-8">
        <!-- DESPLAZAMIENTO -->
        <label>HA ESTADO EN SITUACIÓN DE DESPLAZAMIENTO O <br> HA SIDO VÍCTIMA DEL CONFLICTO ARMADO </label>
      </div>
      <div class="col-xs-4">
        <label class="checkbox-inline">
            <input type="radio" name="situacion_desplazamiento_conflicto" id="checkbox-conflicto" value="1"> SI
          </label>
          <label class="checkbox-inline">
            <input type="radio" name="situacion_desplazamiento_conflicto" id="checkbox-conflicto" value="0"> NO
          </label>
      </div>
    </div>
<div class="col-xs-1">
<h4>2</h4>
</div>
<div class="col-xs-11">
<h3>LUGAR</h3>
</div>
<div class="row mbottom-5">
<div class="col-xs-6">
  <!-- MUNICIPIO DE RESIDENCIA -->
  <select class="form-control" name="municipio_residencia">
    <option>MUNICIPIO DE RESIDENCIA</option>
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
</div>
<div class="col-xs-6">
  <!-- comuna_barrio_vereda -->
  <input type="text" class="form-control mleft-10" name="comuna_barrio_vereda" id="comuna_barrio_vereda" placeholder="COMUNA/BARRIO/VEREDA">
</div>
</div>
<div class="row">
<div class="col-xs-6 grey-left p-5">
<div class="col-xs-4">
  <!-- sector -->
  <label>SECTOR</label>
</div>
<div class="col-xs-8">
  <label class="checkbox-inline">
      <input type="radio" name="sector" value="1" id="checkbox-sector"> RURAL
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="sector" value="2" id="checkbox-sector"> URBANO
    </label>
</div>
</div>
<div class="col-xs-6">
  <!-- TIEMPO DE RESIDENCIA -->
<input type="text" class="form-control grey-full" name="tiempo_residencia" id="tiempo-residencia" placeholder="TIEMPO DE RESIDENCIA">
</div>
</div>
<div class="row">
<div class="col-xs-6 grey-left p-5">
<div class="col-xs-7">
  <!-- SALIDO DE SU DEPARTAMENTO -->
<label>HA SALIDO DE SU DEPARTAMENTO</label>
</div>
<div class="col-xs-5">
<label class="checkbox-inline">
    <input type="radio" name="ha_salido_departamento" id="checkbox-salir" value="1"> SI
  </label>
  <label class="checkbox-inline">
    <input type="radio" name="ha_salido_departamento" id="checkbox-salir" value="0"> NO
  </label>
</div>
</div>
<div class="col-xs-6 grey-right p-5">
<div class="col-xs-7">
  <!-- SALIDO DE SU MUNICIPIO -->
<label>HA SALIDO DE SU MUNICIPIO</label>
</div>
<div class="col-xs-5">
<label class="checkbox-inline">
    <input type="radio" name="ha_salido_municipio" id="checkbox-salir-m" value="1"> SI
  </label>
  <label class="checkbox-inline">
    <input type="radio" name="ha_salido_municipio" id="checkbox-salir-m" value="0"> NO
  </label>
</div>
</div>
</div>
<div class="col-xs-1">
      <h4>3</h4>
      </div>
      <div class="col-xs-11">
      <h3>VIVIENDA Y SERVICIOS</h3>
      </div>
<!-- fila 1 -->
<div class="row">
<div class="col-xs-6 grey-left">
      <div class="col-xs-4">
        <!-- condiciones_fisicas -->
      <label class="pt-10">LAS CONDICIONES FÍSICAS DE SU VIVIENDA SON</label>
      </div>
      <div class="col-xs-6">
        <div class="checkbox">
        <label>
          <input type="radio" value="MATERIAL" name="condiciones_fisicas">
          MATERIAL
        </label>
        </div>
        <div class="checkbox">
        <label>
          <input type="radio" value="BAREQUE" name="condiciones_fisicas">
          BAREQUE
        </label>
        </div>
        <div class="checkbox">
        <label>
          <input type="radio" value="PALAFITICA" name="condiciones_fisicas">
          PALAFITICA
        </label>
        </div>
      </div>
    </div>
    <div class="col-xs-6 grey-right">
      <div class="col-xs-4">
        <!-- VIVIENDA ES -->
        <label class="pt-10">SU VIVIENDA ES</label>
          </div>
          <div class="col-xs-6">
            <div class="checkbox">
            <label>
              <input type="radio" value="PROPIA" name="vivienda_es">
              PROPIA
            </label>
            </div>
            <div class="checkbox">
            <label>
              <input type="radio" value="ARRENDADA" name="vivienda_es">
              ARRENDADA
            </label>
            </div>
            <div class="checkbox">
            <label>
              <input type="radio" value="FAMILIAR" name="vivienda_es">
              FAMILIAR
            </label>
            </div>
          </div>
        </div>
      </div>
    <!--fila 2-->
      <div class="row">
        <div class="col-xs-6 grey-left">
          <!-- VIVIENDA CUENTA CON -->
              <label class="pt-10">SU VIVIENDA CUENTA CON</label>
                  <br>
                  <!-- AGUA POTABLE -->
                  <div class="col-xs-7 text-right" >
                    <label >AGUA POTABLE</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_agua_potable" id="agua-potable" value="si"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_agua_potable" id="agua-potable" value="no"> NO
                      </label>
                  </div>
                  <br>
                  <!-- ALCANTARILLADO -->
                  <div class="col-xs-7 text-right" >
                    <label >ALCANTARILLADO</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_alcantarillado" id="ALCANTARILLADO" value="si"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_alcantarillado" id="ALCANTARILLADO" value="no"> NO
                      </label>
                  </div>
                  <br>
                  <!-- ENERGIA -->
                  <div class="col-xs-7 text-right" >
                    <label >ENERGIA</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_energia" id="ENERGIA" value="si"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_energia" id="ENERGIA" value="no"> NO
                      </label>
                  </div>
                  <br>
                  <!-- GAS -->
                  <div class="col-xs-7 text-right" >
                    <label >GAS</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_gas" id="GAS" value="si"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_gas" id="GAS" value="no"> NO
                      </label>
                  </div>
                  <br>
                  <!-- RECOLECCIÓN DE BASURAS -->
                  <div class="col-xs-7 text-right" >
                    <label >RECOLECCIÓN DE BASURAS</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_recoleccion_basura" id="RECOLECCIÓN" value="si"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="vivienda_cuenta_recoleccion_basura" id="RECOLECCIÓN" value="no"> NO
                      </label>
                  </div>
            </div>
              <div class="col-xs-6 grey-right">
                <!-- MAS SUELDO -->
              <label class="pt-10">LE GUSTARÍA QUE PERMITIERAN <br>MÁS SUELO PARA</label>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="mas_suelo_para" id="vivienda" value="VIVIENDA"> VIVIENDA
                    </label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="mas_suelo_para" id="ganaderia" value="GANADERÍA"> GANADERÍA
                     </label>
                  </div>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="mas_suelo_para" id="comercio" value="COMERCIO"> COMERCIO
                    </label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="mas_suelo_para" id="mineria" value="MINERÍA"> MINERÍA
                     </label>
                  </div>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="mas_suelo_para" id="conservacion" value="CONSERVACIÓN"> CONSERVACIÓN
                    </label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="mas_suelo_para" id="industria" value="INDUSTRIA"> INDUSTRIA
                     </label>
                  </div>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="mas_suelo_para" id="proteccion" value="PROTECCIÓN"> PROTECCIÓN
                    </label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="mas_suelo_para" id="vias" value="VÍAS"> VÍAS
                     </label>
                  </div>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="mas_suelo_para" id="agricultura" value="AGRICULTURA"> AGRICULTURA
                    </label>
                  </div>
                  <div class="col-xs-5">
                  </div>
            </div>
          </div>
          <!-- PREGUNTAS -->
          <div class="row grey-full">
              <label class="pt-10">ESTADO DEL EQUIPAMIENTO DE SU ZONA</label>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >1) LOS ESPACIOS PÚBLICOS DEL MUNICIPIO EN GENERAL ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="Q_01" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_01" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_01" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_01" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >2) LOS PARQUES DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_02" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_02" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_02" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_02" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >3) LOS PUESTOS DE SALUD DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_03" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_03" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_03" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_03" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >4) LOS PUESTOS DE SALUD DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_04" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_04" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_04" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_04" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >5) LOS CENTROS CULTURALES Y ARTÍSTICOS EN EL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_05" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_05" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_05" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_05" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >6) LOS CENTROS CULTURALES Y ARTÍSTICOS DEL BARRIO O VEREDA ESTÁN ?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_06" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_06" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_06" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_06" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >7) LOS CENTROS EDUCATIVOS DEL MUNICIPIO ESTÁN ?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_07" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_07" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_07" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_07" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >8) LOS CENTROS EDUCATIVOS DEL BARRIO O VEREDA ESTÁN ?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_08" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_08" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_08" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_08" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >9) LOS CENTROS DEPORTIVOS Y RECREACIÓN DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_09" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_09" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_09" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_09" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >10) LOS CENTROS DEPORTIVOS Y DE RECREACIÓN DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_10" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_10" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_10" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_10" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >11) LAS BIBLIOTECAS PÚBLICAS DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_11" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_11" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_11" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_11" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >12) LAS BIBLIOTECAS PÚBLICAS DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_12" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_12" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_12" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_12" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >13) EN GENERAL LAS VÍAS PRINCIPALES DEL DEPARTAMENTO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_13" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_13" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_13" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_13" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >14) EN GENERAL LAS VÍAS PRINCIPALES DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_14" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_14" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_14" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_14" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >15) EN GENERAL LAS VÍAS DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_15" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_15" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_15" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_15" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >16) EN GENERAL LOS RÍOS, QUEBRADAS Y CIÉNAGAS DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_16" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_16" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_16" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_16" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >17) EN GENERAL EL ESTADO DE LOS DIQUES, JARILLONES, TERRAPLANES, ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_17" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_17" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_17" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_17" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >18) LAS CICLO VÍAS O CLICLORUTAS DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_18" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_18" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_18" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_18" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >19) LAS CICLO VÍAS O CICLORUTAS DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_19" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_19" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_19" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_19" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >20) EN GENERAL LAS OBRAS PATRIMONIALES DE SU MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_20" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_20" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_20" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_20" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >21) EN GENERAL LAS OBRAS PATRIMONIALES DE SU COMUNIDAD ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="Q_21" id="encuesta" value="EXCELENTE"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_21" id="encuesta" value="BUENO"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_21" id="encuesta" value="MALO"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="Q_21" id="encuesta" value="NO EXISTE"> NO EXISTE
                      </label>
                  </div>
            </div>
<div class="col-xs-1">
   <h4>4</h4>
   </div>
   <div class="col-xs-11">
   <h3>PROBLEMA Y SOLUCIÓN</h3>
</div>
<textarea class="form-control" name="mayor_problema" rows="5" id="comment" placeholder="¿CUAL ES EL MAYOR PROBLEMA DE LA REGIÓN?"></textarea>
<div class="row">
<div class="col-xs-6">

</div>
<div class="col-xs-1">
    <div id="map"></div>
</div>
</div>
<button type="submit" class="btn btn-default">Enviar</button>
</form>
</div>
@stop
