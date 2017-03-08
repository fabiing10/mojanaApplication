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
  <div class="col-xs-6">
    <select class="form-control mleft-10" name="tipo_documento">
      <option>TIPO DE DOCUMENTO DE IDENTIFICACION</option>
      <option value="1">Cédula de Ciudadanía</option>
      <option value="2">Cédula de Extranjería</option>
      <option value="3">Tarjeta de identidad</option>
      <option value="4">NIT</option>
    </select>
  </div>
</div>

<div class="row mbottom-5">
  <div class="col-xs-6">
    <select class="form-control" name="edad">
      <option>Seleccione su Edad</option>
      @for ($i = 18; $i < 57; $i++)
        <option value="{{$i}}">{{$i}} Años</option>
      @endfor
    </select>
  </div>
  <div class="col-xs-6">
    <input type="text" class="form-control mleft-10" id="identificacion" placeholder="NUMERO DE DOCUMENTO DE IDENTIFICAION">
  </div>
</div>

<div class="row">
  <div class="col-xs-3 grey-left" style=" padding-bottom: 20px; ">
    <div class="col-xs-3">
    <label class="pt-10">GENERO</label>
    </div>
    <div class="col-xs-6">
      <div class="checkbox">
        <label><input type="radio" value="" name="genero">MASCULINO</label>
      </div>
      <div class="checkbox">
        <label><input type="radio" value="" name="genero">FEMENINO</label>
      </div>
      <div class="checkbox">
        <label><input type="radio" value="" name="genero">OTRO</label>
      </div>
    </div>
  </div>
  <div class="col-xs-3 grey-left" style=" width: 23.5%; padding-bottom: 10px;">
        <label class="pt-10">RÉGIMEN DE SALUD</label>
          <div class="checkbox">
          <label>
            <input type="radio" value="" name="salud">
            SUBSIDIADO
          </label>
          </div>
          <div class="checkbox">
          <label>
            <input type="radio" value="" name="salud">
            CONTRIBUTIVO
          </label>
          </div>
        </div>
<div class="col-xs-6">
  <select class="form-control mleft-5 mbottom-5">
    <option>OCUPACION</option>
    <option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
    <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option>
    <option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option>
    <option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option>
    <option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option>
  </select>
  <input type="text" class="form-control mleft-5 mbottom-5" id="grupo-etnico" placeholder="GRUPO ETNICO">
  <div class="row mleft-5 grey-full p-3">
  <label>DISCAPACIDAD</label>
  <label class="checkbox-inline">
      <input type="radio" name="DISCAPACIDAD" id="checkboxdiscapacidad" value="opcion_1"> SI
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="DISCAPACIDAD" id="checkboxdiscapacidad" value="opcion_2"> NO
    </label>
    </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <input type="text" class="form-control grey-right" id="estrato-socioeconomico" placeholder="ESTRATO SOCIOECONÓMICO">
      </div>
      <div class="col-xs-6">
        <input type="text" class="form-control grey-right mleft-10" id="nivel-educativo" placeholder="NIVEL EDUCATIVO">
      </div>
    </div>
    <div class="row grey-full">
      <div class="col-xs-8">
        <label>HA ESTADO EN SITUACIÓN DE DESPLAZAMIENTO O <br> HA SIDO VÍCTIMA DEL CONFLICTO ARMADO </label>
      </div>
      <div class="col-xs-4">
        <label class="checkbox-inline">
            <input type="radio" name="CONFLICTO" id="checkbox-conflicto" value="opcion_1"> SI
          </label>
          <label class="checkbox-inline">
            <input type="radio" name="CONFLICTO" id="checkbox-conflicto" value="opcion_2"> NO
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
  <select class="form-control">
    <option>MUNICIPIO DE RESIDENCIA</option>
    <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
    <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
  </select>
</div>
<div class="col-xs-6">
  <input type="text" class="form-control mleft-10" id="TIPO-VIVIENDA" placeholder="COMUNA/BARRIO/VEREDA">
</div>
</div>
<div class="row">
<div class="col-xs-6 grey-left p-5">
<div class="col-xs-4">
  <label>SECTOR</label>
</div>
<div class="col-xs-8">
  <label class="checkbox-inline">
      <input type="radio" name="SECTOR" id="checkbox-sector" value="opcion_1"> RURAL
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="SECTOR" id="checkbox-sector" value="opcion_2"> URBANO
    </label>
</div>
</div>
<div class="col-xs-6">
<input type="text" class="form-control grey-full" id="tiempo-residencia" placeholder="TIEMPO DE RESIDENCIA">
</div>
</div>
<div class="row">
<div class="col-xs-6 grey-left p-5">
<div class="col-xs-7">
<label>HA SALIDO DE SU DEPARTAMENTO</label>
</div>
<div class="col-xs-5">
<label class="checkbox-inline">
    <input type="radio" name="salir" id="checkbox-salir" value="opcion_1"> SI
  </label>
  <label class="checkbox-inline">
    <input type="radio" name="salir" id="checkbox-salir" value="opcion_2"> NO
  </label>
</div>
</div>
<div class="col-xs-6 grey-right p-5">
<div class="col-xs-7">
<label>HA SALIDO DE SU MUNICIPIO</label>
</div>
<div class="col-xs-5">
<label class="checkbox-inline">
    <input type="radio" name="salir-m" id="checkbox-salir-m" value="opcion_1"> SI
  </label>
  <label class="checkbox-inline">
    <input type="radio" name="salir-m" id="checkbox-salir-m" value="opcion_2"> NO
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
      <label class="pt-10">LAS CONDICIONES FÍSICAS DE SU VIVIENDA SON</label>
      </div>
      <div class="col-xs-6">
        <div class="checkbox">
        <label>
          <input type="radio" value="" name="condiciones">
          MATERIAL
        </label>
        </div>
        <div class="checkbox">
        <label>
          <input type="radio" value="" name="condiciones">
          BAREQUE
        </label>
        </div>
        <div class="checkbox">
        <label>
          <input type="radio" value="" name="condiciones">
          PALAFITICA
        </label>
        </div>
      </div>
    </div>
    <div class="col-xs-6 grey-right">
      <div class="col-xs-4">
        <label class="pt-10">SU VIVIENDA ES</label>
          </div>
          <div class="col-xs-6">
            <div class="checkbox">
            <label>
              <input type="radio" value="" name="vivienda">
              PROPIA
            </label>
            </div>
            <div class="checkbox">
            <label>
              <input type="radio" value="" name="vivienda">
              ARRENDADA
            </label>
            </div>
            <div class="checkbox">
            <label>
              <input type="radio" value="" name="vivienda">
              FAMILIAR
            </label>
            </div>
          </div>
        </div>
      </div>

    <!--fila 2-->
      <div class="row">
        <div class="col-xs-6 grey-left">
              <label class="pt-10">SU VIVIENDA CUENTA CON</label>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >AGUA POTABLE</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="agua-potable" id="agua-potable" value="opcion_1"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="agua-potable" id="agua-potable" value="opcion_2"> NO
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >ALCANTARILLADO</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="ALCANTARILLADO" id="ALCANTARILLADO" value="opcion_1"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="ALCANTARILLADO" id="ALCANTARILLADO" value="opcion_2"> NO
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >ENERGIA</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="ENERGIA" id="ENERGIA" value="opcion_1"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="ENERGIA" id="ENERGIA" value="opcion_2"> NO
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >GAS</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="GAS" id="GAS" value="opcion_1"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="GAS" id="GAS" value="opcion_2"> NO
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >RECOLECCIÓN DE BASURAS</label>
                  </div>
                  <div class="col-xs-5 pleft-10">
                    <label class="checkbox-inline">
                        <input type="radio" name="RECOLECCIÓN" id="RECOLECCIÓN" value="opcion_1"> SI
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="RECOLECCIÓN" id="RECOLECCIÓN" value="opcion_2"> NO
                      </label>
                  </div>
            </div>
        <div class="col-xs-6 grey-right">
              <label class="pt-10">LE GUSTARÍA QUE PERMITIERAN <br>MÁS SUELO PARA</label>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="vivienda" id="vivienda" value="opcion_1"> VIVIENDA
                    </label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="ganaderia" id="ganaderia" value="opcion_1"> GANADERÍA
                     </label>
                  </div>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="comercio" id="comercio" value="opcion_1"> COMERCIO
                    </label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="mineria" id="mineria" value="opcion_1"> MINERÍA
                     </label>
                  </div>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="conservacion" id="conservacion" value="opcion_1"> CONSERVACIÓN
                    </label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="industria" id="industria" value="opcion_1"> INDUSTRIA
                     </label>
                  </div>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="proteccion" id="proteccion" value="opcion_1"> PROTECCIÓN
                    </label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="vias" id="vias" value="opcion_1"> VÍAS
                     </label>
                  </div>
                  <br>
                  <div class="col-xs-3">
                  </div>
                  <div class="col-xs-4" >
                    <label class="checkbox-inline">
                        <input type="radio" name="agricultura" id="agricultura" value="opcion_1"> AGRICULTURA
                    </label>
                  </div>
                  <div class="col-xs-5">
                  </div>
            </div>
          </div>
          <div class="row grey-full">
              <label class="pt-10">ESTADO DEL EQUIPAMIENTO DE SU ZONA</label>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >1) LOS ESPACIOS PÚBLICOS DEL MUNICIPIO EN GENERAL ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                    <label class="checkbox-inline">
                        <input type="radio" name="encuesta" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >2) LOS PARQUES DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-2" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-2" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-2" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-2" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >3) LOS PUESTOS DE SALUD DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-3" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-3" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-3" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-3" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >4) LOS PUESTOS DE SALUD DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-4" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-4" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-4" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-4" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >5) LOS CENTROS CULTURALES Y ARTÍSTICOS EN EL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-5" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-5" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-5" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-5" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >6) LOS CENTROS CULTURALES Y ARTÍSTICOS DEL BARRIO O VEREDA ESTÁN ?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-6" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-6" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-6" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-6" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >7) LOS CENTROS EDUCATIVOS DEL MUNICIPIO ESTÁN ?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-7" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-7" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-7" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-7" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >8) LOS CENTROS EDUCATIVOS DEL BARRIO O VEREDA ESTÁN ?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-8" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-8" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-8" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-8" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >9) LOS CENTROS DEPORTIVOS Y RECREACIÓN DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-9" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-9" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-9" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-9" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >10) LOS CENTROS DEPORTIVOS Y DE RECREACIÓN DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-10" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-10" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-10" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-10" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >11) LAS BIBLIOTECAS PÚBLICAS DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-11" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-11" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-11" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-11" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >12) LAS BIBLIOTECAS PÚBLICAS DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-12" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-12" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-12" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-12" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >13) EN GENERAL LAS VÍAS PRINCIPALES DEL DEPARTAMENTO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-13" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-13" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-13" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-13" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >14) EN GENERAL LAS VÍAS PRINCIPALES DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-14" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-14" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-14" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-14" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >15) EN GENERAL LAS VÍAS DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-15" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-15" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-15" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-15" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >16) EN GENERAL LOS RÍOS, QUEBRADAS Y CIÉNAGAS DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-16" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-16" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-16" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-16" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >17) EN GENERAL EL ESTADO DE LOS DIQUES, JARILLONES, TERRAPLANES, ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-17" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-17" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-17" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-17" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >18) LAS CICLO VÍAS O CLICLORUTAS DEL MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-18" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-18" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-18" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-18" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >19) LAS CICLO VÍAS O CICLORUTAS DEL BARRIO O VEREDA ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-19" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-19" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-19" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-19" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >20) EN GENERAL LAS OBRAS PATRIMONIALES DE SU MUNICIPIO ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-20" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-20" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-20" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-20" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
                  <br>
                  <div class="col-xs-7 text-right" >
                    <label >21) EN GENERAL LAS OBRAS PATRIMONIALES DE SU COMUNIDAD ESTÁN?</label>
                  </div>
                  <div class="col-xs-5">
                     <label class="checkbox-inline">
                        <input type="radio" name="encuesta-21" id="encuesta" value="opcion_1"> EXCELENTE
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-21" id="encuesta" value="opcion_2"> BUENO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-21" id="encuesta" value="opcion_3"> MALO
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="encuesta-21" id="encuesta" value="opcion_4"> NO EXISTE
                      </label>
                  </div>
            </div>
<div class="col-xs-1">
   <h4>4</h4>
   </div>
   <div class="col-xs-11">
   <h3>PROBLEMA Y SOLUCIÓN</h3>
</div>
<textarea class="form-control" rows="5" id="comment" placeholder="¿CUAL ES EL MAYOR PROBLEMA DE LA REGIÓN?"></textarea>
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
