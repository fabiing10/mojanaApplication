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

<div class="container" style="padding-top:0px;">
{!! Form::open(['url' => 'participacion/nuevo' , 'method' => 'post']) !!}
<div class="form-group" style="margin-bottom: -7px;">
  <div class="col-md-1 numbers">
    <h3>1</h3>
  </div>
  <div class="col-md-11">
    <h3>IDENTIFICACIÓN</h3>
  </div>
</div>
<div class="row">
<div class="col-xs-6">
  <input type="text" class="form-control mbottom-5" name="nombres_apellidos" placeholder="NOMBRE Y APELLIDOS">
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
    @for ($i = 18; $i < 81 ; $i++)
          <option value="{{$i}}">{{ $i }}</option>
    @endfor
</select>
</div>
<div class="col-xs-6">
  <input type="text" class="form-control mleft-10" name="identificacion" placeholder="NUMERO DE DOCUMENTO DE IDENTIFICACIÓN">
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
          <input type="radio" value="1" name="genero">
          MASCULINO
        </label>
        </div>
        <div class="checkbox">
        <label>
          <input type="radio" value="2" name="genero">
          FEMENINO
        </label>
        </div>
        <div class="checkbox">
        <label>
          <input type="radio" value="3" name="genero">
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
      <option value="estudiante">Estudiante</option>
      <option value="empleado">Empleado</option>
      <option value="independiente">Independiente</option>
      <option value="desempleado">Desempleado</option>
      <option value="hogar">Hogar</option>
      <option value="pensionado">Pensionado</option>
    </select>
    <input type="text" class="form-control mbottom-5" name="grupo_etnico" placeholder="GRUPO ÉTNICO">
    <div class="row grey-full p-3">
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
          <select class="form-control" name="estrato_socio_economico">
            <option value="0">ESTRATO SOCIOECONOMICO</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
          </select>
        </div>
        <div class="col-xs-6">
          <select class="form-control mbottom-5" name="nivel_educativo">
            <option>NIVEL EDUCATIVO</option>
            <option value="primaria">Primaria</option>
            <option value="secundaria">Secundaria</option>
            <option value="tecnica">Técnica</option>
            <option value="universitaria">Universitaria</option>
            <option value="ninguno">Ninguno</option>
          </select>
        </div>
      </div>
      <div class="row grey-full">
        <div class="col-xs-8">
          <label class="mleft-10 mtop-5">HA ESTADO EN SITUACIÓN DE DESPLAZAMIENTO O <br> HA SIDO VÍCTIMA DEL CONFLICTO ARMADO </label>
        </div>
        <div class="col-xs-4">
          <label class="checkbox-inline mtop-10">
              <input type="radio" name="situacion_dezplazamiento_conflicto" id="checkbox-conflicto" value="1"> SI
            </label>
            <label class="checkbox-inline mtop-10">
              <input type="radio" name="situacion_dezplazamiento_conflicto" id="checkbox-conflicto" value="0"> NO
            </label>
        </div>
      </div>
      <div class="col-xs-12">
        <select class="form-control mtop-5" name="sector_pertenece" onchange="changeOptions(this)">
          <option>A QUE SECTOR PERTENECE</option>
                <option value="Ninguno">Ninguno</option>
                <option value="Transporte y vías">Transporte y vías</option>
                <option value="Infraestructura y servicios públicos">Infraestructura y servicios públicos</option>
                <option value="Gremios">Gremios</option>
                <option value="Medio ambiente y desarrollo">Medio ambiente y desarrollo</option>
        </select>
      </div>

      <div style="display:none;" id="Transporte">
          <div class="form-group">
            <div class="col-md-1 numbers">
              <h3 style="padding-bottom:38px;"></h3>
            </div>
            <div class="col-md-11">
              <h3>TRANSPORTE Y VIAS</h3>
            </div>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="rutas_movilidad">
              <option value="">RUTAS DE MOVILIDAD</option>
              <option value="Avenidas">Avenidas</option>
              <option value="Carreteras">Carreteras</option>
              <option value="Vías primarias">Vías primarias</option>
              <option value="Vías secundarias">Vías secundarias</option>
              <option value="Vías terciarias">Vías terciarias</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="como_movilizan_personas">
              <option value="">¿COMO SE MOVILIZAN LAS PERSONAS?</option>
              <option value="Mototaxi">Mototaxi</option>
              <option value="Lancha (Chalupa, canoas)">Lancha (Chalupa, canoas)</option>
              <option value="Transporte público">Transporte público</option>
              <option value="Taxi">Taxi</option>
              <option value="Particular">Particular</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="requerimientos_movilidad">
              <option value="">REQUERIMIENTOS DE MOVILIDAD</option>
              <option value="Pavimentación de vías primarias, secundarias y terciarias">Pavimentación de vías primarias, secundarias y terciarias</option>
              <option value="Regulación de precios de transporte público">Regulación de precios de transporte público</option>
              <option value="Terminal de transportes">Terminal de transportes</option>
              <option value="Muelles de transferencia de cargas">Muelles de transferencia de cargas</option>
              <option value="Creación de oficina de tránsito y transporte">Creación de oficina de tránsito y transporte</option>
              <option value="Ampliación de las vías principales urbanas">Ampliación de las vías principales urbanas</option>
              <option value="Puentes">Puentes</option>
              <option value="Adecuaciones para personas de la tercera edad y discapacitadas">Adecuaciones para personas de la tercera edad y discapacitadas</option>
              <option value="Construcción de andenes">Construcción de andenes</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="como_movilizan_mercancias">
              <option value="">¿COMO SE MOVILIZAN LAS MERCANCIAS?</option>
              <option value="Camiones">Camiones</option>
              <option value="Buses">Buses</option>
              <option value="Carretillas y carretas">Carretillas y carretas</option>
              <option value="Vehículos de tracción animal">Vehículos de tracción animal</option>
              <option value="Chalupas">Chalupas</option>
              <option value="Flotas">Flotas</option>
              <option value="Motocarros">Motocarros</option>
              <option value="Remolcadores">Remolcadores</option>
              <option value="Vehículo particular">Vehículo particular</option>
              <option value="Vehículo contratado por empresas privadas">Vehículo contratado por empresas privadas</option>
            </select>
          </div>
        </div>
      <div style="display:none;" id="Infraestructura">
          <div class="form-group">
            <div class="col-md-1 numbers">
              <h3 style="padding-bottom:38px;"></h3>
            </div>
            <div class="col-md-11">
              <h3>INFRAESTRUCTURA Y SERVICIOS PUBLICOS</h3>
            </div>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="principal_problematica">
              <option value="">PRINCIPAL PROBLEMATICA DEL SECTOR</option>
              <option value="Inexistencia, insuficiencia y deterioro de la infraestructura para el servicio de alcantarillado">Inexistencia, insuficiencia y deterioro de la infraestructura para el servicio de alcantarillado</option>
              <option value="Inexistencia, insuficiencia y deterioro de la infraestructura para el servicio de acueducto">Inexistencia, insuficiencia y deterioro de la infraestructura para el servicio de acueducto</option>
              <option value="Inexistencia, insuficiencia y deterioro de la infraestructura para el servicio de gas">Inexistencia, insuficiencia y deterioro de la infraestructura para el servicio de gas</option>
              <option value="Inexistencia, insuficiencia y deterioro de la infraestructura para la conectividad (Tics)">Inexistencia, insuficiencia y deterioro de la infraestructura para la conectividad (Tics)</option>
              <option value="Inexistencia, insuficiencia y deterioro de la infraestructura del servicio de redes eléctricas">Inexistencia, insuficiencia y deterioro de la infraestructura del servicio de redes eléctricas</option>
              <option value="Falla en la cobertura y calidad de la prestación del servicio">Falla en la cobertura y calidad de la prestación del servicio</option>
              <option value="Abusos en el cobro por la reconexión para la prestación del servicio">Abusos en el cobro por la reconexión para la prestación del servicio</option>
              <option value="Falta actualización predial, catastro, estratificación">Falta actualización predial, catastro, estratificación</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="posibles_soluciones">
              <option value="">POSIBLES SOLUCIONES</option>
              <option value="Construcción y mejoramiento de la infraestructura para el servicio de alcantarillado">Construcción y mejoramiento de la infraestructura para el servicio de alcantarillado</option>
              <option value="Construcción y mejoramiento de la infraestructura para el servicio de acueducto">Construcción y mejoramiento de la infraestructura para el servicio de acueducto</option>
              <option value="Construcción y mejoramiento de la infraestructura para el servicio de gas">Construcción y mejoramiento de la infraestructura para el servicio de gas</option>
              <option value="Construcción y mejoramiento de la infraestructura para el servicio de Tics">Construcción y mejoramiento de la infraestructura para el servicio de Tics</option>
              <option value="Construcción y mejoramiento de la infraestructura para el servicio de redes eléctricas">Construcción y mejoramiento de la infraestructura para el servicio de redes eléctricas</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="infraestructura_con_cuenta">
              <option value="">INFRAESTRUCTURA CON LA QUE CUENTA</option>
              <option value="servicio de alcantarillado">servicio de alcantarillado</option>
              <option value="servicio de acueducto">servicio de acueducto</option>
              <option value="servicio de gas">servicio de gas</option>
              <option value="servicio de Tics">servicio de Tics</option>
              <option value="servicio de redes eléctricas">servicio de redes eléctricas</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="infraestructura_necesaria">
              <option value="">INFRAESTRUCTURA NECESARIA</option>
              <option value="Infraestructura para el servicio de alcantarillado">Infraestructura para el servicio de alcantarillado</option>
              <option value="Infraestructura para el servicio de acueducto">Infraestructura para el servicio de acueducto</option>
              <option value="Infraestructura para el servicio de gas">Infraestructura para el servicio de gas</option>
              <option value="Infraestructura para el servicio de Tics">Infraestructura para el servicio de Tics</option>
              <option value="Infraestructura para el servicio de redes eléctricas">Infraestructura para el servicio de redes eléctricas</option>

            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="	recursos">
              <option value="">RECURSOS</option>
              <option value="Instituciones privadas">Instituciones privadas</option>
              <option value="Instituciones públicas">Instituciones públicas</option>
              <option value="Organizaciones no gubernamentales">Organizaciones no gubernamentales</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="limitantes">
              <option value="">LIMITANTES</option>
              <option value="Falta de Plan de Ordenamiento Territorial">Falta de Plan de Ordenamiento Territorial</option>
              <option value="Falta de gestión de recursos y fomento de inversión para la prestación del servicio">Falta de gestión de recursos y fomento de inversión para la prestación del servicio</option>
              <option value="Incremento de las zonas de riesgo">Incremento de las zonas de riesgo</option>
              <option value="Vías para la instalación de los servicios especialmente en la zona rural">Vías para la instalación de los servicios especialmente en la zona rural</option>
              <option value="Fallas en la administración municipal">Fallas en la administración municipal</option>
              <option value="Falta definición de áreas pobladas, reservas naturales y zonas de riesgo">Falta definición de áreas pobladas, reservas naturales y zonas de riesgo</option>
            </select>
          </div>
      </div>
      <div style="display:none;" id="Gremios">
          <div class="form-group">
            <div class="col-md-1 numbers">
              <h3 style="padding-bottom:38px;"></h3>
            </div>
            <div class="col-md-11">
              <h3>GREMIOS ECONOMICOS</h3>
            </div>
          </div>
          <div class="col-xs-12">
            <select class="form-control" name="gremio_pertenece">
              <option value="">¿A QUE GREMIO PERTENECE?</option>
              <option value="Arrocero">Arrocero</option>,
              <option value="Minero">Minero</option>
              <option value="Pesquero">Pesquero</option>
              <option value="Empresas privadas">Empresas privadas</option>
              <option value="Comerciantes">Comerciantes</option>
              <option value="Ganadero">Ganadero</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="vienen_sus_insumos">
              <option value="">DE DONDE VIENEN SUS INSUMOS</option>
              <option value="Nechí">Nechí</option><option value="Achí">Achí</option><option value="Magangué">Magangué</option><option value="San Jacinto del Cauca">San Jacinto del Cauca</option><option value="Ayapel">Ayapel</option><option value="Caimito">Caimito</option><option value="Guaranda">Guaranda</option><option value="Majagual">Majagual</option>
              <option value="San Benito Abad">San Benito Abad</option><option value="San Marcos">San Marcos</option><option value="Sucre">Sucre</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="procesos_realiza">
              <option value="">PROCESO QUE REALIZA</option>
              <option value="procesos">procesos</option>
            </select>
          </div>
          <div class="col-xs-12">
            <select class="form-control" name="comercializa_productos">
              <option value="">DONDE COMERCIALIZA SUS PRODUCTOS</option>
              <option value="Nechí">Nechí</option><option value="Achí">Achí</option><option value="Magangué">Magangué</option><option value="San Jacinto del Cauca">San Jacinto del Cauca</option><option value="Ayapel">Ayapel</option><option value="Caimito">Caimito</option><option value="Guaranda">Guaranda</option><option value="Majagual">Majagual</option>
              <option value="San Benito Abad">San Benito Abad</option><option value="San Marcos">San Marcos</option><option value="Sucre">Sucre</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="requerimientos_infraestructura">
              <option value="">REQUERIMIENTOS DE INFRAESTRUCTURA</option>
              <option value="Puertos o muelles para la comercialización">Puertos o muelles para la comercialización</option>,
              <option value="Ampliación y promoción de sitios turísticos">Ampliación y promoción de sitios turísticos</option>
              <option value="Ampliación de zona comercial y establecimientos comerciales">Ampliación de zona comercial y establecimientos comerciales</option>
              <option value="Reubicación de las zonas comerciales">Reubicación de las zonas comerciales</option>
              <option value="Generación de nuevos proyectos productivos (piscícola, ganadero, arrocero)">Generación de nuevos proyectos productivos (piscícola, ganadero, arrocero)</option>
              <option value="Mayor conectividad intermunicipal">Mayor conectividad intermunicipal</option>
              <option value="Generación de convenios productivos">Generación de convenios productivos</option>
              <option value="Formalización y legalización de la propiedad rural">Formalización y legalización de la propiedad rural</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="	requerimientos_tecnologia">
              <option value="">REQUERIMIENTOS DE TECNOLOGIA</option>
              <option value="Búsqueda de recursos para asistencia técnica para la producción">Búsqueda de recursos para asistencia técnica para la producción</option>
              <option value="Dotación para mejora de la maquinaria para la producción">Dotación para mejora de la maquinaria para la producción</option>
              <option value="Capacitación para la actualización de los procesos productivos">Capacitación para la actualización de los procesos productivos</option>
            </select>
          </div>
      </div>
      <div style="display:none;" id="Ambiente-desarrollo">
          <div class="form-group">
            <div class="col-md-1 numbers">
              <h3 style="padding-bottom:38px;"></h3>
            </div>
            <div class="col-md-11">
              <h3>MEDIO AMBIENTE Y DESARROLLO</h3>
            </div>
          </div>
          <div class="col-xs-12">
            <select class="form-control" name="bienes_servicios_municipio">
              <option value="">BIENES Y SERVICIOS QUE PROVEE LA NATURALEZA EN SU MUNICIPIO</option>
              <option value="Playones, ciénagas, caños, ríos, humedales">Playones, ciénagas, caños, ríos, humedales</option>
              <option value="Fauna (pesca, ganadería, caza) y flora (bosques húmedos y bosques secos)">Fauna (pesca, ganadería, caza) y flora (bosques húmedos y bosques secos)</option>
            </select>
          </div>
          <div class="col-xs-12">
            <select class="form-control" name="aprovechan_bienes_servicios_municipio">
              <option value="">¿COMO SE APROVECHAN LOS BIENES Y SEVICIOS EN SU MUNICIPIO?</option>
              <option value="Seguridad alimentaria">Seguridad alimentaria</option>
              <option value="Transporte fluvial">Transporte fluvial</option>
              <option value="Nacimientos de agua para consumo humano">Nacimientos de agua para consumo humano</option>
              <option value="Terrenos para cultivo ">Terrenos para cultivo </option>
              <option value="Terrenos para ganadería">Terrenos para ganadería</option>
              <option value="Producción de leña">Producción de leña</option>
              <option value="Actividad pesquera">Actividad pesquera</option>
            </select>
          </div>
          <div class="col-xs-12">
            <select class="form-control" name="problematicas_aprovechamiento_naturaleza">
              <option value="Contaminación de fuentes hídricas y ecosistemas por actividad minera">Contaminación de fuentes hídricas y ecosistemas por actividad minera</option>
              <option value="Contaminación de fuentes hídricas y ecosistemas por residuos sólidos y agroquímicos">Contaminación de fuentes hídricas y ecosistemas por residuos sólidos y agroquímicos</option>
              <option value="Recolección y disposición inadecuada de residuos sólidos y agroquímicos">Recolección y disposición inadecuada de residuos sólidos y agroquímicos</option>
              <option value="Contaminación atmosférica (por emisión de carbón vegetal o cascarilla de arroz)">Contaminación atmosférica (por emisión de carbón vegetal o cascarilla de arroz)</option>
              <option value="Deforestación por tala y quema">Deforestación por tala y quema</option>
              <option value="Falta de infraestructura para mitigación y control de inundaciones">Falta de infraestructura para mitigación y control de inundaciones</option>
              <option value="Creciente súbita generada por pérdida del cauce del río">Creciente súbita generada por pérdida del cauce del río</option>
              <option value="Falta de infraestructura para control de temporadas de sequía">Falta de infraestructura para control de temporadas de sequía</option>
              <option value="Afectación de los ecosistemas por introducción de especies foráneas">Afectación de los ecosistemas por introducción de especies foráneas</option>
              <option value="Desaparición de especies y ecosistemas nativos (ciénagas, animales, etc.)">Desaparición de especies y ecosistemas nativos (ciénagas, animales, etc.)</option>
              <option value="Contaminación ambiental por descomposición de animales">Contaminación ambiental por descomposición de animales</option>
              <option value="Falta de control de animales domésticos en zonas urbanas">Falta de control de animales domésticos en zonas urbanas</option>
              <option value="Impacto ambiental de la infraestructura de las telecomunicaciones">Impacto ambiental de la infraestructura de las telecomunicaciones</option>
              <option value="Acumulación de sedimentos">Acumulación de sedimentos</option>
              <option value="Desgaste del suelo por tala, extensión de ganadería y quema">Desgaste del suelo por tala, extensión de ganadería y quema</option>
              <option value="Asentamientos anormales y barrios en zonas de inundación">Asentamientos anormales y barrios en zonas de inundación</option>
            </select>
          </div>
          <div class="col-xs-12">
            <select class="form-control" name="	alternativas_aprovechamiento_naturaleza">
              <option value="">ALTERNATIVAS A IMPLEMENTAR PARA EL APROVECHAMIENTO SOSTENIBLE DE LA NATURALEZA</option>
              <option value="Regulación de la actividad minera">Regulación de la actividad minera</option>
              <option value="Protección de fuentes hídricas">Protección de fuentes hídricas</option>
              <option value="Recolección, regulación y disposición adecuada de residuos sólidos y agroquímicos">Recolección, regulación y disposición adecuada de residuos sólidos y agroquímicos</option>
              <option value="Regulación de la actividad productiva de carbón y arrocera">Regulación de la actividad productiva de carbón y arrocera</option>
              <option value="Reubicación de las arroceras y las queseras">Reubicación de las arroceras y las queseras</option>
              <option value="Reforestación y regulación de la quema de basuras">Reforestación y regulación de la quema de basuras</option>
              <option value="Construcción y adecuación de jarillones, diques, murallas y compuertas para el control de inundaciones">Construcción y adecuación de jarillones, diques, murallas y compuertas para el control de inundaciones</option>
              <option value="Reubicación de asentamientos humanos">Reubicación de asentamientos humanos</option>
              <option value="Dragado de ríos y ciénagas">Dragado de ríos y ciénagas</option>

              <option value="Control a la introducción de especies foráneas">Control a la introducción de especies foráneas</option>
              <option value="Restauración ecológica de las especies nativas y cuerpos de agua">Restauración ecológica de las especies nativas y cuerpos de agua</option>
              <option value="Regulación sanitaria">Regulación sanitaria</option>
              <option value="Control y reubicación de la infraestructura de las telecomunicaciones">Control y reubicación de la infraestructura de las telecomunicaciones</option>
              <option value="Reforestación y conservación de fuentes hídricas">Reforestación y conservación de fuentes hídricas</option>
            </select>
          </div>
          <div class="col-xs-12">
            <select class="form-control" name="armonia_naturaleza">
              <option value="">¿COMO SE PUEDEN COMPATIBLIZAR ACTIVIDADES PRODUCTIVAS TRADICIONALES CON ACTIVIDADES SECTORIALES, EN ARMONIA CON LA NATURALEZA?</option>
              <option value="Pesca recreativa">Pesca recreativa</option>
              <option value="Conservación de áreas declaradas como reserva natural">Conservación de áreas declaradas como reserva natural</option>
              <option value="Reubicación de plazas de mercado">Reubicación de plazas de mercado</option>
              <option value="Plantas de tratamiento de aguas residuales">Plantas de tratamiento de aguas residuales</option>
              <option value="Cumplimiento de la normativa ambiental por parte de los representantes de los sectores productivos">Cumplimiento de la normativa ambiental por parte de los representantes de los sectores productivos</option>
            </select>
          </div>
          <div class="col-xs-12">
            <select class="form-control" name="recuperacion_complejos_cenagosos">
              <option value="">¿QUE INICIATIVAS DE INVERSION SE DEBERIAN PRIORIZAR QUE PERMITAN LA RECUPERACION DE LOS COMPLEJOS CENAGOSOS?</option>
              <option value="Invertir en dragado de caños y ciénagas">Invertir en dragado de caños y ciénagas</option>
              <option value="Proyectos productivos alternativos para los pescadores">Proyectos productivos alternativos para los pescadores</option>
              <option value="Zoocriaderos">Zoocriaderos</option>
              <option value="Educación ambiental y participación ciudadana">Educación ambiental y participación ciudadana</option>
              <option value="Iniciativas de inversión, alianzas público - privadas para la preservación y conservación del medio ambiente.">Iniciativas de inversión, alianzas público - privadas para la preservación y conservación del medio ambiente.</option>
              <option value="Ecoturismo">Ecoturismo</option>
              <option value="Capacitación en agroecología para los productores">Capacitación en agroecología para los productores</option>
              <option value="Drenaje y dinamización de la sedimentación de caños y ciénagas">Drenaje y dinamización de la sedimentación de caños y ciénagas</option>
              <option value="Reforestación de cuencas de ríos y caños">Reforestación de cuencas de ríos y caños</option>
            </select>
          </div>
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
    <input type="text" class="form-control mleft-10" name="comuna_barrio_vereda" placeholder="COMUNA/BARRIO/VEREDA">
  </div>
</div>
<div class="row">
<div class="col-xs-6 grey-left p-5">
  <div class="col-xs-4">
    <label>SECTOR</label>
  </div>
  <div class="col-xs-8">
    <label class="checkbox-inline">
        <input type="radio" name="sector" id="checkbox-sector" value="1"> RURAL
      </label>
      <label class="checkbox-inline">
        <input type="radio" name="sector" id="checkbox-sector" value="2"> URBANO
      </label>
  </div>
</div>
<div class="col-xs-6">
  <input type="text" class="form-control grey-full" name="tiempo_residencia" placeholder="TIEMPO DE RESIDENCIA">
</div>
</div>
<div class="row">
<div class="col-xs-6 grey-left p-5">
<div class="col-xs-7">
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
<div class="row grey-full">
<h2>ESTADO DE LA INFRAESRUCTURA, EQUIPAMIENTO Y <br/> ELEMENTOS AMBIENTALES DE SU ZONA POR TEMAS</h2>
    <br>
    <div class="col-md-12">
    <table class="mleft-20 mbottom-10">
      <tr>

        <td></td>
        <td></td>
        <td><label class="checkbox-inline">E</td>
        <td><label class="checkbox-inline">B</td>
        <td><label class="checkbox-inline">M</td>
        <td><label class="checkbox-inline">NE</td>
      </tr>
    <tr>
      <th rowspan="2" class="ambiental text-center white">AMBIENTAL</th>
      <td>Ríos, quebradas y ciénagas del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_01" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_01" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_01" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_01" value="NE"></label></td>
    </tr>
    <tr>
      <td>Diques, jarillones, terraplanes</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_02"  value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_02"  value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_02"  value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_02"  value="NE"></label></td>
    </tr>
    <tr>
      <th rowspan="16" class="social text-center white">SOCIAL</th>
      <td>Espacios públicos del municipio en general</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_03" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_03" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_03" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_03" value="NE"></label></td>
    </tr>
    <tr>
      <td>Parques del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_04" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_04" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_04" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_04" value="NE"></label></td>
    </tr>
    <tr>
      <td>Los puestos de salud del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_05" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_05" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_05" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_05" value="NE"></label></td>
    </tr>
    <tr>
      <td>Los puestos de salud del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_06" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_06" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_06" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_06" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros culturales y artísticos en el municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_07" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_07" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_07" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_07" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros culturales y artísticos del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_08" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_08" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_08" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_08" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros educativos del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_09" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_09" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_09" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_09" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros educativos del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_10" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_10" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_10" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_10" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros deportivos y de recreación del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_11" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_11" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_11" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_11" value="NE"></label></td>
    </tr>
    <tr>
      <td>Centros deportivos y de recreación del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_12" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_12" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_12" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_12" value="NE"></label></td>
    </tr>
    <tr>
      <td>Bibliotecas públicas del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_13" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_13" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_13" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_13" value="NE"></label></td>
    </tr>
    <tr>
      <td>Bibliotecas públicas del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_14" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_14" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_14" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_14" value="NE"></label></td>
    </tr>
    <tr>
      <td>Ciclo vías o cliclorutas del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_15" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_15" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_15" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_15" value="NE"></label></td>
    </tr>
    <tr>
      <td>Ciclo vías o ciclorutas del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_16" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_16" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_16" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_16" value="NE"></label></td>
    </tr>
    <tr>
      <td>Las obras patrimoniales de su municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_17" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_17" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_17" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_17" value="NE"></label></td>
    </tr>
    <tr>
      <td>Las obras patrimoniales de su comunidad</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_18" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_18" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_18" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_18" value="NE"></label></td>
    </tr>
    <tr>
      <th rowspan="3" class="economico text-center white">ECONÓMICO</th>
      <td>Las vías principales del departamento</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_19" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_19" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_19" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_19" value="NE"></label></td>
    </tr>
    <tr>
      <td>Las vías principales del municipio</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_20" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_20" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_20" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_20" value="NE"></label></td>
    </tr>
    <tr>
      <td>Las vías del barrio o vereda</td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_21" value="E"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_21" value="B"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_21" value="M"></label></td>
      <td><label class="checkbox-inline"><input type="radio" name="Q_21" value="NE"></label></td>
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
            <input type="radio" value="material" name="condiciones_fisicas">
            MATERIAL
          </label>
          </div>
          <div class="checkbox">
          <label>
            <input type="radio" value="bahareque" name="condiciones_fisicas">
            BAHAREQUE
          </label>
          </div>
          <div class="checkbox">
          <label>
            <input type="radio" value="palafitica" name="condiciones_fisicas">
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
                <input type="radio" value="propia" name="vivienda_es">
                PROPIA
              </label>
              </div>
              <div class="checkbox">
              <label>
                <input type="radio" value="arrendada" name="vivienda_es">
                ARRENDADA
              </label>
              </div>
              <div class="checkbox">
              <label>
                <input type="radio" value="familiar" name="vivienda_es">
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
                          <input type="radio" name="vivienda_cuenta_agua_potable" id="agua-potable" value="si"> SI
                        </label>
                        <label class="checkbox-inline">
                          <input type="radio" name="vivienda_cuenta_agua_potable" id="agua-potable" value="no"> NO
                        </label>
                    </div>
                    <br>
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
                    <div class="col-xs-7 text-right" >
                      <label >ENERGÍA</label>
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
                <label class="pt-10">LE GUSTARÍA QUE PERMITIERAN <br>MÁS SUELO PARA</label>
                    <br>
                    <div class="col-xs-3">
                    </div>
                    <div class="col-xs-4" >
                      <label class="checkbox-inline">
                          <input type="checkbox" name="ms_vivienda" id="vivienda" value="1"> VIVIENDA
                      </label>
                    </div>
                    <div class="col-xs-5">
                      <label class="checkbox-inline">
                          <input type="checkbox" name="ms_ganaderia" id="ganaderia" value="1"> GANADERÍA
                       </label>
                    </div>
                    <br>
                    <div class="col-xs-3">
                    </div>
                    <div class="col-xs-4" >
                      <label class="checkbox-inline">
                          <input type="checkbox" name="ms_comercio" id="comercio" value="1"> COMERCIO
                      </label>
                    </div>
                    <div class="col-xs-5">
                      <label class="checkbox-inline">
                          <input type="checkbox" name="ms_mineria" id="mineria" value="1"> MINERÍA
                       </label>
                    </div>
                    <br>
                    <div class="col-xs-3">
                    </div>
                    <div class="col-xs-4" >
                      <label class="checkbox-inline">
                          <input type="checkbox" name="ms_conservacion" id="conservacion" value="1"> CONSERVACIÓN
                      </label>
                    </div>
                    <div class="col-xs-5">
                      <label class="checkbox-inline">
                          <input type="checkbox" name="ms_industria" id="industria" value="1"> INDUSTRIA
                       </label>
                    </div>
                    <br>
                    <div class="col-xs-3">
                    </div>
                    <div class="col-xs-4" >
                      <label class="checkbox-inline">
                          <input type="checkbox" name="ms_proteccion" id="proteccion" value="1"> PROTECCIÓN
                      </label>
                    </div>
                    <div class="col-xs-5">
                      <label class="checkbox-inline">
                          <input type="checkbox" name="ms_vias" id="vias" value="1"> VÍAS
                       </label>
                    </div>
                    <br>
                    <div class="col-xs-3">
                    </div>
                    <div class="col-xs-4" >
                      <label class="checkbox-inline">
                          <input type="checkbox" name="ms_agricultura" id="agricultura" value="1"> AGRICULTURA
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
            <br>
            <br>
            <br>
            <br>
  <div class="row ambiental">
  <div class="col-xs-6">
    <h4>AMBIENTAL</h4>
    <select class="form-control my-10 mtop-25" name="tema_problematica_ambiental" id="tema_problematica_ambiental" onchange="loadProblematica(this,'ambiental')"></select>
    <select class="form-control my-10" name="problematica_ambiental" id="problematica_ambiental" onchange="loadSolucion(this,'ambiental')"></select>
    <select class="form-control my-10" name="solucion_ambiental" id="solucion_ambiental"></select>
  </div>
  <div class="col-xs-5 mleft-50">
    <select class="form-control my-10" name="ubicacion_solucion_ambiental" onchange="loadPositionAmbiental(this)">
      <option value="otro">UBICACIÓN DE LA SOLUCIÓN</option>
      <option value="nechi">Nechí</option>
      <option value="achi">Achí</option>
      <option value="magangue">Magangué</option>
      <option value="san-jacinto-cauca">San Jacinto del Cauca</option>
      <option value="ayapel">Ayapel</option>
      <option value="caimito">Caimito</option>
      <option value="guaranda">Guaranda</option>
      <option value="majagual">Majagual</option>
      <option value="san-benito-abad">San Benito Abad</option>
      <option value="san-marcos">San Marcos</option>
      <option value="sucre ">Sucre</option>
    </select>
      <div id="map_ambiental"></div>
      <input type="hidden" name="ubicacion_latitud_ambiental" id="ubicacion_latitud_ambiental" />
      <input type="hidden" name="ubicacion_longitud_ambiental" id="ubicacion_longitud_ambiental" />

  </div>
  </div>
  <!-- social -->

  <div class="row social mtop-10">
  <div class="col-xs-6">
    <h4>SOCIAL</h4>
    <select class="form-control my-10 mtop-25" name="tema_problematica_social" id="tema_problematica_social" onchange="loadProblematica(this,'social')"></select>
    <select class="form-control my-10" name="problematica_social" id="problematica_social" onchange="loadSolucion(this,'social')"></select>
    <select class="form-control my-10" name="solucion_social" id="solucion_social"></select>
  </div>
  <div class="col-xs-5 mleft-50">
    <select class="form-control my-10" name="ubicacion_solucion_social" onchange="loadPositionSocial(this)">
      <option value="otro">UBICACIÓN DE LA SOLUCIÓN</option>
      <option value="nechi">Nechí</option>
      <option value="achi">Achí</option>
      <option value="magangue">Magangué</option>
      <option value="san-jacinto-cauca">San Jacinto del Cauca</option>
      <option value="ayapel">Ayapel</option>
      <option value="caimito">Caimito</option>
      <option value="guaranda">Guaranda</option>
      <option value="majagual">Majagual</option>
      <option value="san-benito-abad">San Benito Abad</option>
      <option value="san-marcos">San Marcos</option>
      <option value="sucre ">Sucre</option>
    </select>
      <div id="map_social"></div>
      <input type="hidden" name="ubicacion_latitud_social" id="ubicacion_latitud_social" />
      <input type="hidden" name="ubicacion_longitud_social" id="ubicacion_longitud_social" />
  </div>
  </div>
  <!-- economico -->

  <div class="row economico mtop-10 mbottom-10">
  <div class="col-xs-6">
    <h4>ECONÓMICO</h4>
    <select class="form-control my-10 mtop-25" name="tema_problematica_economico" id="tema_problematica_economico" onchange="loadProblematica(this,'economico')"></select>
    <select class="form-control my-10" name="problematica_economico" id="problematica_economico" onchange="loadSolucion(this,'economico')"></select>
    <select class="form-control my-10" name="solucion_economico" id="solucion_economico"></select>
  </div>
  <div class="col-xs-5 mleft-50">
    <select class="form-control my-10" name="ubicacion_solucion_economico" onchange="loadPositionEconomico(this)">
      <option value="otro">UBICACIÓN DE LA SOLUCIÓN</option>
      <option value="nechi">Nechí</option>
      <option value="achi">Achí</option>
      <option value="magangue">Magangué</option>
      <option value="san-jacinto-cauca">San Jacinto del Cauca</option>
      <option value="ayapel">Ayapel</option>
      <option value="caimito">Caimito</option>
      <option value="guaranda">Guaranda</option>
      <option value="majagual">Majagual</option>
      <option value="san-benito-abad">San Benito Abad</option>
      <option value="san-marcos">San Marcos</option>
      <option value="sucre ">Sucre</option>
    </select>
      <div id="map_economico"></div>
      <input type="hidden" name="ubicacion_latitud_economico" id="ubicacion_latitud_economico" />
      <input type="hidden" name="ubicacion_longitud_economico" id="ubicacion_longitud_economico" />
  </div>
  </div>
  <button type="submit" class="btn btn-default"><img src="icon.png" alt="#" class="icono"></img>Enviar</button>
{!! Form::close() !!}
</div>
@stop


@section('script')
<script>

function changeOptions(data){
  var option = data.value;
  if (option == 'Ninguno') {
    $('#Transporte').fadeOut()
    $('#Infraestructura').fadeOut();
    $('#Gremios').fadeOut();
    $('#Ambiente-desarrollo').fadeOut();
  }else if(option == 'Transporte y vías'){
    $('#Transporte').fadeIn()
    $('#Infraestructura').fadeOut();
    $('#Gremios').fadeOut();
    $('#Ambiente-desarrollo').fadeOut();
  }else if(option == 'Infraestructura y servicios públicos'){
    $('#Infraestructura').fadeIn();
    $('#Transporte').fadeOut()
    $('#Gremios').fadeOut();
    $('#Ambiente-desarrollo').fadeOut();
  }else if(option == 'Gremios'){
    $('#Infraestructura').fadeOut();
    $('#Transporte').fadeOut()
    $('#Gremios').fadeIn();
    $('#Ambiente-desarrollo').fadeOut();
  }else if(option == 'Medio ambiente y desarrollo'){
    $('#Infraestructura').fadeOut();
    $('#Transporte').fadeOut()
    $('#Gremios').fadeOut();
    $('#Ambiente-desarrollo').fadeIn();
  }

}

$(document).ready(function() {

    loadTematica('ambiental');
    loadTematica('social');
    loadTematica('economico');

});


function loadTematica(clasificacion){

  var jqxhr = $.ajax( "/participacion/tematicas/clasificacion/"+clasificacion )
  .done(function(data) {
    var option = "<option>Seleccione el tema de la problematica</option>";
    $.each(data,function(index, value){
      console.log('My array has at position ' + index + ', this value: ' + value.nombre);
      option += "<option value="+value.id+">"+value.nombre+"</option>";
    });
    if(clasificacion == "ambiental"){
        $('#tema_problematica_ambiental').html("");
        $('#tema_problematica_ambiental').append(option);
    }else if(clasificacion == "social"){
      $('#tema_problematica_social').html("");
      $('#tema_problematica_social').append(option);
    }else{
      $('#tema_problematica_economico').html("");
      $('#tema_problematica_economico').append(option);
    }


  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {

  });

}

function loadProblematica(select,clasificacion){
  var id = select.value;
  var jqxhr = $.ajax( "/participacion/tematicas/"+id )
  .done(function(data) {
    var option = "<option>Seleccione la problematica </option>";
    $.each(data,function(index, value){
      console.log('My array has at position ' + index + ', this value: ' + value.nombre);
      option += "<option value="+value.id+">"+value.nombre+"</option>";
    });
    if(clasificacion == "ambiental"){
        $('#problematica_ambiental').html("");
        $('#problematica_ambiental').append(option);
    }else if(clasificacion == "social"){
      $('#problematica_social').html("");
      $('#problematica_social').append(option);
    }else{
      $('#problematica_economico').html("");
      $('#problematica_economico').append(option);
    }


  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {

  });
}

function loadSolucion(select,clasificacion){
  var id = select.value;
  var jqxhr = $.ajax( "/participacion/problemas/"+id )
  .done(function(data) {
    var option = "<option>Seleccione la solución</option>";
    $.each(data,function(index, value){
      console.log('My array has at position ' + index + ', this value: ' + value.nombre);
      option += "<option value="+value.id+">"+value.nombre+"</option>";
    });

    if(clasificacion == "ambiental"){
        $('#solucion_ambiental').html("");
        $('#solucion_ambiental').append(option);
    }else if(clasificacion == "social"){
      $('#solucion_social').html("");
      $('#solucion_social').append(option);
    }else{
      $('#solucion_economico').html("");
      $('#solucion_economico').append(option);
    }

  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {

  });
}


function loadPositionAmbiental(select){

  var ambiental = 'images/marker-ambiental.png';

  if(select.value == "nechi"){
    var myLatlng = new google.maps.LatLng(8.0884616,-74.7938797);
  }else if(select.value == "achi"){
    var myLatlng = new google.maps.LatLng(8.5676956,-74.5603219);
  }else if(select.value == "magangue"){
    var myLatlng = new google.maps.LatLng(9.2398158,-74.7766691);
  }else if(select.value == "san-jacinto-cauca"){
    var myLatlng = new google.maps.LatLng(8.2508194,-74.7242101);
  }else if(select.value == "ayapel"){
    var myLatlng = new google.maps.LatLng(8.3093061,-75.1583524);
  }else if(select.value == "caimito"){
    var myLatlng = new google.maps.LatLng(8.7696259,-75.254793);
  }else if(select.value == "guaranda"){
    var myLatlng = new google.maps.LatLng(8.4683211,-74.5414131);
  }else if(select.value == "majagual"){
    var myLatlng = new google.maps.LatLng(8.5412716,-74.6368757);
  }else if(select.value == "san-benito-abad"){
    var myLatlng = new google.maps.LatLng(8.7849314,-75.2813005);
  }else if(select.value == "san-marcos"){
    var myLatlng = new google.maps.LatLng(8.5653242,-75.3041466);
  }else if(select.value == "sucre"){
    var myLatlng = new google.maps.LatLng(9.2126761,-76.3291093);
  }else{
    var myLatlng = new google.maps.LatLng(8.0884616,-74.7938797);
  }

  var mapOptions = { zoom: 7, center: myLatlng }
  var map = new google.maps.Map(document.getElementById("map_ambiental"), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      draggable: true,
      animation: google.maps.Animation.DROP,
      icon: ambiental
  });
  //Marker Ambiental
  marker.addListener('click',toggleAmbiental);
  marker.addListener('dragend', function (event){
   document.getElementById("ubicacion_longitud_ambiental").value = this.getPosition().lng();
   document.getElementById("ubicacion_latitud_ambiental").value = this.getPosition().lat();
  });

  // To add the marker to the map, call setMap();
  marker.setMap(map);

  var longitude = map.getCenter().lng();
  var latitude = map.getCenter().lat();
  document.getElementById("ubicacion_longitud_ambiental").value = longitude;
  document.getElementById("ubicacion_latitud_ambiental").value = latitude;
}

function loadPositionSocial(select){

  var ambiental = 'images/marker-social.png';

  if(select.value == "nechi"){
    var myLatlng = new google.maps.LatLng(8.0884616,-74.7938797);
  }else if(select.value == "achi"){
    var myLatlng = new google.maps.LatLng(8.5676956,-74.5603219);
  }else if(select.value == "magangue"){
    var myLatlng = new google.maps.LatLng(9.2398158,-74.7766691);
  }else if(select.value == "san-jacinto-cauca"){
    var myLatlng = new google.maps.LatLng(8.2508194,-74.7242101);
  }else if(select.value == "ayapel"){
    var myLatlng = new google.maps.LatLng(8.3093061,-75.1583524);
  }else if(select.value == "caimito"){
    var myLatlng = new google.maps.LatLng(8.7696259,-75.254793);
  }else if(select.value == "guaranda"){
    var myLatlng = new google.maps.LatLng(8.4683211,-74.5414131);
  }else if(select.value == "majagual"){
    var myLatlng = new google.maps.LatLng(8.5412716,-74.6368757);
  }else if(select.value == "san-benito-abad"){
    var myLatlng = new google.maps.LatLng(8.7849314,-75.2813005);
  }else if(select.value == "san-marcos"){
    var myLatlng = new google.maps.LatLng(8.5653242,-75.3041466);
  }else if(select.value == "sucre"){
    var myLatlng = new google.maps.LatLng(9.2126761,-76.3291093);
  }else{
    var myLatlng = new google.maps.LatLng(8.0884616,-74.7938797);
  }

  var mapOptions = { zoom: 7, center: myLatlng }
  var map = new google.maps.Map(document.getElementById("map_social"), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      draggable: true,
      animation: google.maps.Animation.DROP,
      icon: ambiental
  });
  //Marker Ambiental
  marker.addListener('click',toggleAmbiental);
  marker.addListener('dragend', function (event){
   document.getElementById("ubicacion_longitud_social").value = this.getPosition().lng();
   document.getElementById("ubicacion_latitud_social").value = this.getPosition().lat();
  });

  // To add the marker to the map, call setMap();
  marker.setMap(map);

  var longitude = map.getCenter().lng();
  var latitude = map.getCenter().lat();
  document.getElementById("ubicacion_longitud_social").value = longitude;
  document.getElementById("ubicacion_latitud_social").value = latitude;
}

function loadPositionEconomico(select){

  var ambiental = 'images/marker-economico.png';

  if(select.value == "nechi"){
    var myLatlng = new google.maps.LatLng(8.0884616,-74.7938797);
  }else if(select.value == "achi"){
    var myLatlng = new google.maps.LatLng(8.5676956,-74.5603219);
  }else if(select.value == "magangue"){
    var myLatlng = new google.maps.LatLng(9.2398158,-74.7766691);
  }else if(select.value == "san-jacinto-cauca"){
    var myLatlng = new google.maps.LatLng(8.2508194,-74.7242101);
  }else if(select.value == "ayapel"){
    var myLatlng = new google.maps.LatLng(8.3093061,-75.1583524);
  }else if(select.value == "caimito"){
    var myLatlng = new google.maps.LatLng(8.7696259,-75.254793);
  }else if(select.value == "guaranda"){
    var myLatlng = new google.maps.LatLng(8.4683211,-74.5414131);
  }else if(select.value == "majagual"){
    var myLatlng = new google.maps.LatLng(8.5412716,-74.6368757);
  }else if(select.value == "san-benito-abad"){
    var myLatlng = new google.maps.LatLng(8.7849314,-75.2813005);
  }else if(select.value == "san-marcos"){
    var myLatlng = new google.maps.LatLng(8.5653242,-75.3041466);
  }else if(select.value == "sucre"){
    var myLatlng = new google.maps.LatLng(9.2126761,-76.3291093);
  }else{
    var myLatlng = new google.maps.LatLng(8.0884616,-74.7938797);
  }

  var mapOptions = { zoom: 7, center: myLatlng }
  var map = new google.maps.Map(document.getElementById("map_economico"), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      draggable: true,
      animation: google.maps.Animation.DROP,
      icon: ambiental
  });
  //Marker Ambiental
  marker.addListener('click',toggleAmbiental);
  marker.addListener('dragend', function (event){
   document.getElementById("ubicacion_longitud_economico").value = this.getPosition().lng();
   document.getElementById("ubicacion_latitud_economico").value = this.getPosition().lat();
  });

  // To add the marker to the map, call setMap();
  marker.setMap(map);

  var longitude = map.getCenter().lng();
  var latitude = map.getCenter().lat();
  document.getElementById("ubicacion_longitud_economico").value = longitude;
  document.getElementById("ubicacion_latitud_economico").value = latitude;
}
</script>
@endsection
