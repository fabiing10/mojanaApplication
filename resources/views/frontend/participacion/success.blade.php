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
<div class="row row-gral">
  <div class="col-xs-4" style="">
    <center>
      <img src="http://regionmojana.com/wp-content/uploads/2017/06/check.png" />
    </center>
  </div>
  <div class="col-xs-8" style="">
    <h3 class="info-text">A continuación encontrará los indicadores relacionados a las problemáticas selecionadas por usted y el lugar donde las localizó </h3>
  </div>
</div>

<input id="municipio_ambiental" class="municipio_ambiental" type="hidden" value="nechi" />
<input id="municipio_economico" class="municipio_economico" type="hidden" value="achi" />
<input id="municipio_social" class="municipio_social" type="hidden" value="magangue" />

<style type="text/css"> table th {color: #444;border: none;} </style>
<table id="indicadores" style="width: 100%; border: none;">

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
</table>

<div id="indicadores-dashboard" class="row indicadores-dashboard">
<div class="col-sm-3 title">Nombre Indicadores</div>
<div class="col-sm-3 title">Categoria</div>
<div class="col-sm-2 title">Valor</div>
<div class="col-sm-4 title">Opciones</div>
</div>

<div class="row indicadores-dashboard-result">.</div>


<div id="grafico-content" style="display: none;"><center>Graficos</center></div>
<div id="mapa-content" style="display: none;"><center>Mapa</center><img id="img_map" class="" style="width: 400px;" /></div>
<div id="documento-content" style="display: none;"><center>Documento</center><iframe src="http://regionmojana.com/wp-content/uploads/2017/02/pdf.pdf" width="600" height="400"></iframe></div>



</div>
@stop

@section('script')
<script>
$( document ).ready(function() {

$('.button-query').click(function(){
  var code = jQuery(this).attr("data-query");
  var municipio_regional = jQuery("#municipio_ambiental").val();
  var url = "http://app.regionmojana.com/consulta/"+code;
  $.getJSON(url).done(function( data ) {
    $('.indicadores-dashboard-result').html("");
     console.log(data)
     if(data == ""){

       var data="<div class='vc_row'>";
       data += "<div class='col-sm-12' style='text-align:center;color: #070f25;font-size: 16px;'>No hay Datos para mostrar</div>";
       data +="</div>";
       $('.indicadores-dashboard-result').append(data);
     }
    $.each(data, function(index, element) {


        var data="<div class='row'>";
        data += "<div class='col-sm-3'>"+element.nombre+"</div>";
        if(element.categoria == null){  data += "<div class='col-sm-3'> Sin Asignar</div>";  }else{  data += "<div class='col-sm-3'>"+element.categoria+"</div>";  }

        if(municipio_regional == "magangue"){
          if(element.magangue == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.magangue+"</div>"; }
        }else if(municipio_regional == "nechi"){
          if(element.nechi == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.nechi+"</div>"; }
        }else if(municipio_regional == "achi"){
           if(element.achi == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.achi+"</div>"; }
        }else if(municipio_regional == "san_jacinto"){
          if(element.san_jacinto == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.san_jacinto+"</div>"; }
        }else if(municipio_regional == "ayapel"){
          if(element.ayapel == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.ayapel+"</div>"; }
        }else if(municipio_regional == "caimito"){
           if(element.caimito == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.caimito+"</div>"; }
        }else if(municipio_regional == "guaranda"){
          if(element.guaranda == null){  data += "<div class='vcol-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.guaranda+"</div>"; }
        }else if(municipio_regional == "majagual"){
          if(element.majagual == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.majagual+"</div>"; }
        }else if(municipio_regional == "san_benito_abad"){
          if(element.san_benito_abad == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.san_benito_abad+"</div>"; }
        }else if(municipio_regional == "san_marcos"){
          if(element.san_marcos == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.san_marcos+"</div>"; }
        }else if(municipio_regional == "sucre"){
          if(element.sucre == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.sucre+"</div>"; }

        }else if(municipio_regional == "regionales"){
           if(element.regional == null){  data += "<div class='col-sm-2'>0</div>";  }else{  data +="<div class='col-sm-2'>"+element.regional+"</div>"; }

        }

        data +="<div class='col-sm-4'>";
        data +="<a data-fancybox data-src='#grafico-content' class='btn-indicadores' href='javascript:;'onclick='loadGrafico("+element.id+")'>Grafico</a>";
        if(element.mapa == 1){
          data +="<a data-fancybox data-src='#mapa-content' class='btn-indicadores' href='javascript:;'onclick='loadMapa("+element.id+")'>Mapa</a>";
        }
        if(element.documento == 1){
          data +="<a data-fancybox data-src='#documento-content' class='btn-indicadores' href='javascript:;'onclick='loadDocumento("+element.id+")'>Ficha</a>";
        }
        data +="</div></div>";

    $('.indicadores-dashboard-result').append(data);

    });

  }).fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    console.log( "Request Failed: " + err );
  });
});

});

function loadMapa(id){

  var url = "http://app.regionmojana.com/consulta/indicadores/mapa/"+id;
  jQuery.getJSON(url).done(function( element ) {


    jQuery("#img_map").attr('src',"http://app.regionmojana.com/img/uploads/"+element[0].mapa_url)


  }).fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    console.log( "Request Failed: " + err );
  });
}

function loadDocumento(id){

  var url = "http://app.regionmojana.com/consulta/indicadores/documento/"+id;

    jQuery("#documento-content").html("");
    jQuery.getJSON(url).done(function( element ) {

      var iframe = document.createElement('iframe');
      iframe.frameBorder=0;
      iframe.width="600px";
      iframe.height="400px";
      iframe.id="documento";
      iframe.setAttribute("src", "http://app.regionmojana.com/img/documents/"+element[0].documento_url);
      document.getElementById("documento-content").appendChild(iframe);


    }).fail(function( jqxhr, textStatus, error ) {
      var err = textStatus + ", " + error;
      console.log( "Request Failed: " + err );
    });
}

function loadGrafico(id){

  jQuery('#grafico-content').html("");

  var url = "http://app.regionmojana.com/consulta/indicadores/graficos/"+id;
  jQuery.getJSON(url).done(function( element ) {
  //  var ctx = document.getElementById("myChart");
  jQuery('#grafico-content').append("<div class='title-indicador'>"+element[0].nombre+"</p>");
    var ctx = document.createElement('canvas');

    ctx.id = "myChart";
    ctx.width = 400;
    ctx.height = 400;

    jQuery('#grafico-content').append(ctx);



        var dataGrafico = {
            labels: ["Achi", "Ayapel", "Caimito", "Guaranda", "Magangue", "Majagual", "Nechi", "San benito abad", "San Jacinto", "San marcos", "Sucre", "Regional"],
            datasets: [
                {
                    label: "",
                    backgroundColor: [
                        'rgb(230,74,25)',
                        'rgb(245,124,0)',
                        'rgb(255,160,0)',
                        'rgb(251,192,45)',
                        'rgb(175,180,43)',
                        'rgb(104,159,56)',
                        'rgb(0,121,107)',
                        'rgb(2,136,209)',
                        'rgb(48,63,159)',
                        'rgb(81,45,168)',
                        'rgb(194,24,91)',
                        'rgb(211,47,47)'
                    ],
                    borderWidth: 1,
                    data: [element[0].achi, element[0].ayapel, element[0].caimito, element[0].guaranda, element[0].magangue, element[0].majagual, element[0].nechi,element[0].san_benito_abad,element[0].san_jacinto,element[0].san_marcos,element[0].sucre,element[0].regional],
                }
            ]
        };
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: dataGrafico,
            options: {
                responsive: true
            }
        });






  }).fail(function( jqxhr, textStatus, error ) {
    var err = textStatus + ", " + error;
    console.log( "Request Failed: " + err );
  });

}


function loadAmbiental(){
  jQuery(".slick-next").trigger( "click" );
}
function loadSocial(){
  jQuery(".slick-next").trigger( "click" );
}
function loadEconomico(){
  jQuery(".slick-next").trigger( "click" );
}
</script>
@endsection
