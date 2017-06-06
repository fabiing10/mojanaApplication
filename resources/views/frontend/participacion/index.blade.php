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
      <o>/ Completar formulario</o>
    </ul>
    </div>
  </div>
</div>

<!-- formulario -->

<div class="row contenido">
<form role="form">
<div class="form-group">
  <div class="col-md-1 numbers">
    <h3>1</h3>
  </div>
  <div class="col-md-11">
    <h3>IDENTIFICACIÓN</h3>
  </div>

</div>
<div class="row">
<div class="col-xs-6">
  <input type="text" class="form-control mbottom-5" id="name" placeholder="NOMBRE Y APELLIDOS">
</div>
<div class="col-xs-6">
  <select class="form-control mleft-10" name="tipo_identificacion">
    <option value="">TIPO DE DOCUMENTO DE IDENTIFICACIÓN</option>
    <option value="cedula ciudadania">Cédula de Ciudadanía</option>
    <option value="cedula extranjeria">Cédula de Extranjería</option>
    <option value="tarjeta identidad">Tarjeta de identidad</option>
    <option value="nit">NIT</option>
  </select>
</div>
</div>
<div class="row mbottom-5">
<div class="col-xs-6">
  <select class="form-control" name="edad">
    <option value="">EDAD</option>
    <option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
    <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option>
    <option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option>
    <option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option>
    <option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option>
  </select>
</div>
<div class="col-xs-6">
  <input type="text" class="form-control mleft-10" name="n-documento" id="n-documento" placeholder="NUMERO DE DOCUMENTO DE IDENTIFICACIÓN">
</div>
</div>
<div class="row">
<div class="col-xs-3 grey-left" style=" padding-bottom: 20px; ">
      <div class="col-xs-3">
      <label class="pt-10 mleft-10">GÉNERO</label>
      </div>
      <div class="col-xs-6">
        <div class="checkbox">
        <label>
          <input type="radio" value="masculino" name="genero">
          MASCULINO
        </label>
        </div>
        <div class="checkbox">
        <label>
          <input type="radio" value="femenino" name="genero">
          FEMENINO
        </label>
        </div>
        <div class="checkbox">
        <label>
          <input type="radio" value="otro" name="genero">
          OTRO
        </label>
        </div>
      </div>
    </div>
    <div class="col-xs-3 grey-left" style=" width: 23.5%; padding-bottom: 10px;">
          <label class="pt-10">RÉGIMEN DE SALUD</label>
            <div class="checkbox">
            <label>
              <input type="radio" value="subsidiado" name="regimen_salud">
              SUBSIDIADO
            </label>
            </div>
            <div class="checkbox">
            <label>
              <input type="radio" value="contributivo" name="regimen_salud">
              CONTRIBUTIVO
            </label>
            </div>
          </div>
  <div class="col-xs-6">
    <select class="form-control mbottom-5" name="ocupacion">
      <option>OCUPACIÓN</option>
      <option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
      <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option>
      <option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option>
      <option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option>
      <option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option>
    </select>
    <input type="text" class="form-control mbottom-5" id="grupo-etnico" placeholder="GRUPO ÉTNICO">
    <div class="row grey-full p-3">
    <label>DISCAPACIDAD</label>
    <label class="checkbox-inline">
        <input type="radio" name="discapacidad" id="checkboxdiscapacidad" value="si"> SI
      </label>
      <label class="checkbox-inline">
        <input type="radio" name="discapacidad" id="checkboxdiscapacidad" value="no"> NO
      </label>
      </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
        </div>
        <div class="col-xs-6">
          <input type="text" class="form-control grey-right mleft-10" name="nivel_educativo" id="nivel-educativo" placeholder="NIVEL EDUCATIVO">
        </div>
      </div>
      <div class="row grey-full">
        <div class="col-xs-8">
          <label class="mleft-10 mtop-5">HA ESTADO EN SITUACIÓN DE DESPLAZAMIENTO O <br> HA SIDO VÍCTIMA DEL CONFLICTO ARMADO </label>
        </div>
        <div class="col-xs-4">
          <label class="checkbox-inline mtop-10">
              <input type="radio" name="situacion_dezplazamiento" id="checkbox-conflicto" value="si"> SI
            </label>
            <label class="checkbox-inline mtop-10">
              <input type="radio" name="situacion_dezplazamiento" id="checkbox-conflicto" value="no"> NO
            </label>
        </div>
      </div>
      <div class="col-xs-12">
        <select class="form-control mtop-5" name="sector_perteneciente">
          <option>A QUE SECTOR PERTENECE</option>
          <option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
          <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option>
          <option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option>
          <option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option>
          <option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option>
        </select>
      </div>
      <div class="col-md-1 numbers">
        <h3>2</h3>
      </div>
      <div class="col-md-11">
          <h3>UBICACIÓN</h3>
      </div>
<div class="row mbottom-5">
  <div class="col-xs-6">
    <select class="form-control" name="municipio_residencia">
      <option value="">MUNICIPIO DE RESIDENCIA</option>
      <option value="Nechí">Nechí</option><option value="Achí">Achí</option><option value="Magangué">Magangué</option><option value="San Jacinto del Cauca">San Jacinto del Cauca</option><option value="Ayapel">Ayapel</option><option value="Caimito">Caimito</option><option value="Guaranda">Guaranda</option><option value="Majagual">Majagual</option>
      <option value="San Benito Abad">San Benito Abad</option><option value="San Marcos">San Marcos</option><option value="Sucre">Sucre</option>
    </select>
  </div>
  <div class="col-xs-6">
    <input type="text" class="form-control mleft-10" name="tipo_vivienda" id="TIPO-VIVIENDA" placeholder="COMUNA/BARRIO/VEREDA">
  </div>
</div>
<div class="row">
<div class="col-xs-6 grey-left p-5">
  <div class="col-xs-4">
    <label>SECTOR</label>
  </div>
  <div class="col-xs-8">
    <label class="checkbox-inline">
        <input type="radio" name="sector" id="checkbox-sector" value="rural"> RURAL
      </label>
      <label class="checkbox-inline">
        <input type="radio" name="sector" id="checkbox-sector" value="urbano"> URBANO
      </label>
  </div>
</div>
<div class="col-xs-6">
  <input type="text" class="form-control grey-full" name="tiempo_residencia" id="tiempo-residencia" placeholder="TIEMPO DE RESIDENCIA">
</div>
</div>
<div class="row">
<div class="col-xs-6 grey-left p-5">
<div class="col-xs-7">
  <label>HA SALIDO DE SU DEPARTAMENTO</label>
</div>
<div class="col-xs-5">
  <label class="checkbox-inline">
      <input type="radio" name="ha_salido_departamento" id="checkbox-salir" value="si"> SI
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="ha_salido_departamento" id="checkbox-salir" value="no"> NO
    </label>
</div>
</div>
<div class="col-xs-6 grey-right p-5">
<div class="col-xs-7">
  <label>HA SALIDO DE SU MUNICIPIO</label>
</div>
<div class="col-xs-5">
  <label class="checkbox-inline">
      <input type="radio" name="ha_salido_municipio" id="checkbox-salir-m" value="si"> SI
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="ha_salido_municipio" id="checkbox-salir-m" value="no"> NO
    </label>
</div>
</div>
</div>
<div class="row grey-full">
<label class="pt-10 label-questions">ESTADO DE LA INFRAESRUCTURA, EQUIPAMIENTO Y <br/> ELEMENTOS AMBIENTALES DE SU ZONA POR TEMAS</label>
    <br>
    <div class="col-md-12">
    <table class="mleft-20 mbottom-10">
    <tr>
      <th rowspan="2" class="ambiental text-center white">AMBIENTAL</th>
      <td>Ríos, quebradas y ciénagas del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta1" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta1" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta1" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta1" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Diques, jarillones, terraplanes</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta2" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta2" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta2" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta2" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <th rowspan="16" class="social text-center white">SOCIAL</th>
      <td>Espacios públicos del municipio en general</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta3" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta3" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta3" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta3" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Parques del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta4" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta4" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta4" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta4" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Los puestos de salud del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta5" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta5" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta5" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta5" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Los puestos de salud del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta6" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta6" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta6" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta6" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros culturales y artísticos en el municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta7" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta7" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta7" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta7" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros culturales y artísticos del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta8" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta8" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta8" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta8" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros educativos del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta9" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta9" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta9" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta9" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros educativos del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta10" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta10" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta10" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta10" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros deportivos y de recreación del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta11" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta11" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta11" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta11" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros deportivos y de recreación del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta12" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta12" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta12" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta12" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Bibliotecas públicas del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta13" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta13" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta13" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta13" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Bibliotecas públicas del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta14" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta14" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta14" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta14" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Ciclo vías o cliclorutas del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta15" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta15" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta15" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta15" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Ciclo vías o ciclorutas del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta16" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta16" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta16" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta16" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Las obras patrimoniales de su municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta17" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta17" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta17" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta17" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Las obras patrimoniales de su comunidad</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta18" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta18" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta18" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta18" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <th rowspan="3" class="economico text-center white">ECONÓMICO</th>
      <td>Las vías principales del departamento</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta19" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta19" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta19" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta19" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Las vías principales del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta20" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta20" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta20" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta20" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
      <td>Las vías del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta21" id="encuesta" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta21" id="encuesta" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta21" id="encuesta" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="pregunta21" id="encuesta" value="NE"></label></td>
    </tr>
    <tr>
  </table>
</div>
</div>
  <div class="col-md-1 numbers">
    <h3>3</h3>
  </div>
  <div class="col-md-11">
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
            <input type="radio" value="material" name="condiciones_vivienda">
            MATERIAL
          </label>
          </div>
          <div class="checkbox">
          <label>
            <input type="radio" value="bareque" name="condiciones_vivienda">
            BAREQUE
          </label>
          </div>
          <div class="checkbox">
          <label>
            <input type="radio" value="palafitica" name="condiciones_vivienda">
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
                <input type="radio" value="propia" name="vivienda">
                PROPIA
              </label>
              </div>
              <div class="checkbox">
              <label>
                <input type="radio" value="arrendada" name="vivienda">
                ARRENDADA
              </label>
              </div>
              <div class="checkbox">
              <label>
                <input type="radio" value="familiar" name="vivienda">
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
                          <input type="radio" name="agua-potable" id="agua-potable" value="si"> SI
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="agua-potable" id="agua-potable" value="no"> NO
                        </label>
                    </div>
                    <br>
                    <div class="col-xs-7 text-right" >
                      <label >ALCANTARILLADO</label>
                    </div>
                    <div class="col-xs-5 pleft-10">
                      <label class="checkbox-inline">
                          <input type="radio" name="alcantarillado" id="ALCANTARILLADO" value="si"> SI
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="alcantarillado" id="ALCANTARILLADO" value="no"> NO
                        </label>
                    </div>
                    <br>
                    <div class="col-xs-7 text-right" >
                      <label >ENERGÍA</label>
                    </div>
                    <div class="col-xs-5 pleft-10">
                      <label class="checkbox-inline">
                          <input type="radio" name="energia" id="ENERGIA" value="si"> SI
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="energia" id="ENERGIA" value="no"> NO
                        </label>
                    </div>
                    <br>
                    <div class="col-xs-7 text-right" >
                      <label >GAS</label>
                    </div>
                    <div class="col-xs-5 pleft-10">
                      <label class="checkbox-inline">
                          <input type="radio" name="gas" id="GAS" value="si"> SI
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="gas" id="GAS" value="no"> NO
                        </label>
                    </div>
                    <br>
                    <div class="col-xs-7 text-right" >
                      <label >RECOLECCIÓN DE BASURAS</label>
                    </div>
                    <div class="col-xs-5 pleft-10">
                      <label class="checkbox-inline">
                          <input type="radio" name="recoleccion" id="RECOLECCIÓN" value="si"> SI
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="recoleccion" id="RECOLECCIÓN" value="no"> NO
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
                          <input type="radio" name="vivienda" id="vivienda" value="vivienda"> VIVIENDA
                      </label>
                    </div>
                    <div class="col-xs-5">
                      <label class="checkbox-inline">
                          <input type="radio" name="ganaderia" id="ganaderia" value="ganaderia"> GANADERÍA
                       </label>
                    </div>
                    <br>
                    <div class="col-xs-3">
                    </div>
                    <div class="col-xs-4" >
                      <label class="checkbox-inline">
                          <input type="radio" name="comercio" id="comercio" value="comercio"> COMERCIO
                      </label>
                    </div>
                    <div class="col-xs-5">
                      <label class="checkbox-inline">
                          <input type="radio" name="mineria" id="mineria" value="mineria"> MINERÍA
                       </label>
                    </div>
                    <br>
                    <div class="col-xs-3">
                    </div>
                    <div class="col-xs-4" >
                      <label class="checkbox-inline">
                          <input type="radio" name="conservacion" id="conservacion" value="conservacion"> CONSERVACIÓN
                      </label>
                    </div>
                    <div class="col-xs-5">
                      <label class="checkbox-inline">
                          <input type="radio" name="industria" id="industria" value="industria"> INDUSTRIA
                       </label>
                    </div>
                    <br>
                    <div class="col-xs-3">
                    </div>
                    <div class="col-xs-4" >
                      <label class="checkbox-inline">
                          <input type="radio" name="proteccion" id="proteccion" value="proteccion"> PROTECCIÓN
                      </label>
                    </div>
                    <div class="col-xs-5">
                      <label class="checkbox-inline">
                          <input type="radio" name="vias" id="vias" value="vias"> VÍAS
                       </label>
                    </div>
                    <br>
                    <div class="col-xs-3">
                    </div>
                    <div class="col-xs-4" >
                      <label class="checkbox-inline">
                          <input type="radio" name="agricultura" id="agricultura" value="agricultura"> AGRICULTURA
                      </label>
                    </div>
                    <div class="col-xs-5">
                    </div>
              </div>
            </div>

              <div class="col-md-1 numbers">
                <h3>4</h3>
              </div>
              <div class="col-md-11">
                  <h3>PROBLEMA Y SOLUCIÓN</h3>
              </div>

  <textarea class="form-control" rows="5" id="comment" placeholder="¿CUAL ES EL MAYOR PROBLEMA DE LA REGIÓN?"></textarea>
  <div class="row ambiental">
  <div class="col-xs-6">
    <h4>Ambiental</h4>
    <select class="form-control my-10 mtop-25" name="tema_problematica">
      <option>TEMA DE LA PROBLEMATICA</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
    <select class="form-control my-10" name="problematica">
      <option>PROBLEMATICA</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
    <select class="form-control my-10" name="solucion">
      <option>SOLUCION</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
  </div>
  <div class="col-xs-5 mleft-50">
    <select class="form-control my-10" name="ubicacion_solucion">
      <option>UBICACION DE LA SOLUCION</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
      <div id="map"></div>
  </div>
  </div>
  <!-- social -->

  <div class="row social mtop-10">
  <div class="col-xs-6">
    <h4>SOCIAL</h4>
    <select class="form-control my-10 mtop-25" name="tema_problematica">
      <option>TEMA DE LA PROBLEMATICA</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
    <select class="form-control my-10" name="problematica">
      <option>PROBLEMATICA</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
    <select class="form-control my-10" name="solucion">
      <option>SOLUCION</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
  </div>
  <div class="col-xs-5 mleft-50">
    <select class="form-control my-10" name="ubicacion_solucion">
      <option>UBICACION DE LA SOLUCION</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
      <div id="map2"></div>
  </div>
  </div>
  <!-- economico -->

  <div class="row economico mtop-10 mbottom-10">
  <div class="col-xs-6">
    <h4>ECONÓMICO</h4>
    <select class="form-control my-10 mtop-25" name="tema_problematica">
      <option>TEMA DE LA PROBLEMATICA</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
    <select class="form-control my-10" name="problematica">
      <option>PROBLEMATICA</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
    <select class="form-control my-10" name="solucion">
      <option>SOLUCION</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
  </div>
  <div class="col-xs-5 mleft-50">
    <select class="form-control my-10" name="ubicacion_solucion">
      <option>UBICACION DE LA SOLUCION</option>
      <option>Nechí</option><option>Achí</option><option>Magangué</option><option>San Jacinto del Cauca</option><option>Ayapel</option><option>Caimito</option><option>Guaranda</option><option>Majagual</option>
      <option>San Benito Abad</option><option>San Marcos</option><option>Sucre</option>
    </select>
      <div id="map3"></div>
  </div>
  </div>
  <button type="submit" class="btn btn-default"><img src="icon.png" alt="" class="icono"></img>Enviar</button>
</form>
</div>
@stop
