$( document ).ready(function() {
    console.log( "ready!" );
    cargarRegimenSalud();

    cargarHanSalido();
    cargarHanSalidoM();
    //cargarActores();
    cargarCondiciones();
    //cargarViviendas();
    cargarMunicipios();

    //add Juanpita
    cargarQuestions();
    cargarEdades();
    cargarSector();
    cargarEstrato();
    cargarDesplazamiento();
    cargarTiempoResidencia();

});
function submitForm(){
  $('#FormSearch').submit();
}
//add Juanpita
function cargarQuestions(){
  var option_url = $('#municipio').val();
  $.get( "/datos/q/estado-general/"+option_url, function() {

  }).done(function(data) {
    var i = 0;
    var background,background_b,background_m,background_ne;



    var ctx = $("#chartEstadoInfraestructura");
    var myPieChart = new Chart(ctx,{
      type: 'bar',
      data: {
           labels: ["Excelente", "Bueno", "Malo", "No Existe"],
           datasets: [{
               data: [data.data.e, data.data.b,data.data.m,data.data.ne,100],
               backgroundColor: [
                   '#3b92ad',
                   '#63dbf7',
                   '#0c455b',
                   '#002131'
               ]
           }]
      },
      options: {
          legend: {
            display: false
          },
          tooltips: {
            callbacks: {
               label: function(tooltipItem, data) {
                  var dataset = data.datasets[tooltipItem.datasetIndex];
                  var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                    return previousValue + currentValue;
                  });
                  var currentValue = dataset.data[tooltipItem.index];
                  var precentage = Math.floor(((currentValue/total) * 100)*2);
                  return precentage + "%";
                }
            }
          },
          responsive: true,
          scales: {
              xAxes: [{ stacked: true }],
              yAxes: [{ stacked: true }]
          },
          title: { display: false }
      }
    });

    $.each(data,function(index, value){
          if(value.e < 25){
            background = "#5ecdfd";
          }else if(value.e >= 25 && value.e < 50){
            background = "#24a4dc";
          }else if(value.e >= 50 && value.e <= 75){
            background = "#0472a2";
          }else if(value.e > 75 && value.e <= 100 ){
            background = "#01415d";
          }

          if(value.b < 25){
            background_b = "#5ecdfd";
          }else if(value.b >= 25 && value.b < 50){
            background_b = "#24a4dc";
          }else if(value.b >= 50 && value.b <= 75){
            background_b = "#0472a2";
          }else if(value.b > 75 && value.b <= 100 ){
            background_b = "#01415d";
          }

          if(value.m < 25){
            background_m = "#5ecdfd";
          }else if(value.m >= 25 && value.m < 50){
            background_m = "#24a4dc";
          }else if(value.m >= 50 && value.m <= 75){
            background_m = "#0472a2";
          }else if(value.m > 75 && value.m <= 100 ){
            background_m = "#01415d";
          }

          if(value.ne < 25){
            background_ne = "#5ecdfd";
          }else if(value.ne >= 25 && value.ne < 50){
            background_ne = "#24a4dc";
          }else if(value.ne >= 50 && value.ne <= 75){
            background_ne = "#0472a2";
          }else if(value.ne > 75 && value.ne <= 100 ){
            background_ne = "#01415d";
          }
          table = "<td><div class='q__e' style='background-color:"+background+";'>"+value.e+"%</div></td><td><div class='q__e' style='background-color:"+background_b+";'>"+value.b+"%</div></td><td><div class='q__e' style='background-color:"+background_m+";'>"+value.m+"%</div></td><td><div class='q__e' style='background-color:"+background_ne+";'>"+value.ne+"%</div></td>";
          $(table).insertAfter(".inner_table"+i);
          i++;
    });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarSector(){
  $.get( "/datos/q/sector-pertenece", function() {

  }).done(function(value) {

      var data = {
        labels: ["Ninguno", "Transporte y vias", "Gremios", "Medio ambiente y desarrollo","Infraestructura y servicios públicos"],
        datasets: [
          {
            data: [value.ninguno, value.transporte_vias,value.gremios,value.medio_ambiente,value.infraestructura],
            backgroundColor: [ "#3764B5", "#5A6CBA", "#394F7A", "#72C4F2","#1eaeff"],
            hoverBackgroundColor: [ "#3764B5", "#5A6CBA", "#394F7A","#72C4F2","#1eaeff"]
          }]
      };

      var promisedDeliveryChart = new Chart(document.getElementById('chartSector'), {
        type: 'doughnut',
        data: data,
        options: {
        	responsive: true,
          legend: {
            display: false
          }
        }
       });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarEstrato(){
  $.get( "/datos/q/estrato", function() {

  }).done(function(value) {

      var data = {
        labels: ["1", "2", "3", "4","5","6"],
        datasets: [
          {
            data: [value.estrato1, value.estrato2,value.estrato3,value.estrato4,value.estrato5,value.estrato6],
            backgroundColor: [ "#3764B5", "#5A6CBA", "#394F7A", "#72C4F2","#1eaeff"],
            hoverBackgroundColor: [ "#3764B5", "#5A6CBA", "#394F7A","#72C4F2","#1eaeff"]
          }]
      };

      var promisedDeliveryChart = new Chart(document.getElementById('chartEstrato'), {
        type: 'doughnut',
        data: data,
        options: {
        	responsive: true,
          legend: {
            display: false
          }
        }
       });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarRegimenSalud(){
  var option_url = $('#municipio').val();
  $.get( "/datos/q/regimen-salud/"+option_url, function() {

  }).done(function(data) {

      var ctx = $("#chartRegimenSalud");
      var myPieChart = new Chart(ctx,{
        type: 'bar',
        data: {
             labels: ["Subsidiado", "Contributivo"],
             datasets: [{
                 data: [data.subsidiado, data.contributivo,100],
                 backgroundColor: [
                     '#F9B233',
                     '#E94E1B'
                 ]
             }]
        },
        options: {
            legend: {
              display: false
            },
            tooltips: {
              callbacks: {
                 label: function(tooltipItem, data) {
                  	var dataset = data.datasets[tooltipItem.datasetIndex];
                    var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                      return previousValue + currentValue;
                    });
                    var currentValue = dataset.data[tooltipItem.index];
                    var precentage = Math.floor(((currentValue/total) * 100)*2);
                    return precentage + "%";
                  }
              }
            },
            responsive: true,
            scales: {
                xAxes: [{ stacked: true }],
                yAxes: [{ stacked: true }]
            },
            title: { display: false }
        }
      });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarHanSalido(){
  var option_url = $('#municipio').val();
  $.get( "/datos/q/han-salido/"+option_url, function() {

  }).done(function(data) {

      var hs = $("#chartHanSalido");
      var myPieChart = new Chart(hs,{
        type: 'bar',
        data: {
             labels: ["Si han Salido", "No han Salido"],
             datasets: [{
                 data: [data.sisalido, data.nosalido,100],
                 backgroundColor: [

                     '#36a9e1','#00a19a'
                 ]
             }]
        },
        options: {
            legend: {
              display: false
            },
            tooltips: {
              callbacks: {
                 label: function(tooltipItem, data) {
                  	var dataset = data.datasets[tooltipItem.datasetIndex];
                    var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                      return previousValue + currentValue;
                    });
                    var currentValue = dataset.data[tooltipItem.index];
                    var precentage = Math.floor(((currentValue/total) * 100)*2);
                    return precentage + "%";
                  }
              }
            },
            responsive: true,
            scales: {
                xAxes: [{ stacked: true }],
                yAxes: [{ stacked: true }]
            },
            title: { display: false }
        }
      });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarHanSalidoM(){
  var option_url = $('#municipio').val();
  $.get( "/datos/q/han-salido-m/"+option_url, function() {

  }).done(function(data) {

      var hsm = $("#chartHanSalidoM");
      var myPieChart = new Chart(hsm,{
        type: 'bar',
        data: {
             labels: ["Si han Salido", "No han Salido"],
             datasets: [{
                 data: [data.sisalidom, data.nosalidom,100],
                 backgroundColor: [
                     '#95c11f','#3aaa35'

                 ]
             }]
        },
        options: {
            legend: {
              display: false
            },
            tooltips: {
              callbacks: {
                 label: function(tooltipItem, data) {
                  	var dataset = data.datasets[tooltipItem.datasetIndex];
                    var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                      return previousValue + currentValue;
                    });
                    var currentValue = dataset.data[tooltipItem.index];
                    var precentage = Math.floor(((currentValue/total) * 100)*2);
                    return precentage + "%";
                  }
              }
            },
            responsive: true,
            scales: {
                xAxes: [{ stacked: true }],
                yAxes: [{ stacked: true }]
            },
            title: { display: false }
        }
      });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarActores(){
  $.get( "/datos/q/actores", function() {

  }).done(function(data) {

      var Ac = $("#chartActores");
      var myPieChart = new Chart(Ac,{
        type: 'bar',
        data: {
             labels: ["Personas", "Transporte", "Infraestructura","Gremios","Ambiente"],
             datasets: [{
                 data: [data.ninguno, data.transporte,data.infraestructura,data.gremios,data.ambiente],
                 backgroundColor: [
                     '#001923',
                     '#001923',
                     '#001923',
                     '#001923',
                     '#001923'
                 ]
             }]
        },
        options: {
            legend: {
              display: false
            },
            tooltips: {
              callbacks: {
                 label: function(tooltipItem) {
                        return tooltipItem.yLabel;
                 }
              }
            },
            responsive: true,
            scales: {
                xAxes: [{ stacked: true }],
                yAxes: [{ stacked: true }]
            },
            title: { display: false }
        }
      });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarCondiciones(){
  var option_url = $('#municipio').val();
  $.get( "/datos/q/condiciones-fisicas/"+option_url, function() {

  }).done(function(data) {

      var Cf = $("#chartCondiciones");
      var myPieChart = new Chart(Cf,{
        type: 'bar',
        data: {
             labels: ["Material", "Palafitica", "Bareque"],
             datasets: [{
                 data: [data.material, data.palafitica,data.bareque,100],
                 backgroundColor: [
                     '#cbae78',
                     '#94794f',
                     '#878787'
                 ]
             }]
        },
        options: {
            legend: {
              display: false
            },
            tooltips: {
              callbacks: {
                 label: function(tooltipItem, data) {
                  	var dataset = data.datasets[tooltipItem.datasetIndex];
                    var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                      return previousValue + currentValue;
                    });
                    var currentValue = dataset.data[tooltipItem.index];
                    var precentage = Math.floor(((currentValue/total) * 100)*2);
                    return precentage + "%";
                  }
              }
            },
            responsive: true,
            scales: {
                xAxes: [{ stacked: true }],
                yAxes: [{ stacked: true }]
            },
            title: { display: false }
        }
      });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarViviendas(){
  $.get( "/datos/q/vivienda-es", function() {

  }).done(function(data) {

      var Ve = $("#chartViviendaEs");
      var myPieChart = new Chart(Ve,{
        type: 'bar',
        data: {
             labels: ["Familiar", "Arrendada", "Propia"],
             datasets: [{
                 data: [data.familiar, data.arrendada,data.propia,100],
                 backgroundColor: [
                     '#9fadb5',
                     '#ebeff2',
                     '#b7b6b6'
                 ]
             }]
        },
        options: {
            legend: {
              display: false
            },
            tooltips: {
              callbacks: {
                 label: function(tooltipItem) {
                        return tooltipItem.yLabel;
                 }
              }
            },
            responsive: true,
            scales: {
                xAxes: [{ stacked: true }],
                yAxes: [{ stacked: true }]
            },
            title: { display: false }
        }
      });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarMunicipios(){
  var option_url = $('#municipio').val();
  $.get( "/datos/q/municipios/"+option_url, function() {

  }).done(function(data) {
    console.log(data)
    var Ac = $("#chartMunicipios");
    var myPieChart = new Chart(Ac,{
      type: 'bar',
      data: {
           labels: ["Nechi", "Achi", "Magangue","S.J.Cauca","Ayapel","Caimito","Guaranda","Majagual","S.B.Abad","San Marcos","Sucre"],
           datasets: [{
               data: [data.nechi, data.achi,data.magangue, data.san_jacinto_cauca, data.ayapel, data.caimito, data.guaranda,data.majagual,data.san_benito_abad,data.san_marcos,data.sucre,100],
               backgroundColor: [
                   '#417cb7',
                   '#5fd9ff',
                   '#102c6b',
                   '#006eb2',
                   '#009fe3',
                   '#1d71b8',
                   '#008cb2',
                   '#83b3c6',
                   '#83b3c6',
                   '#00b5b5',
                   '#00e0cf'
               ]
           }]
      },
      options: {
          legend: {
            display: false
          },
          tooltips: {
            callbacks: {
               label: function(tooltipItem, data) {
                  var dataset = data.datasets[tooltipItem.datasetIndex];
                  var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
                    return previousValue + currentValue;
                  });
                  var currentValue = dataset.data[tooltipItem.index];
                  var precentage = Math.floor(((currentValue/total) * 100)*2);
                  return precentage + "%";
                }
            }
          },
          responsive: true,
          scales: {
              xAxes: [{ stacked: true }],
              yAxes: [{ stacked: true }]
          },
          title: { display: false }
      }
    });
  });



}

function mapaAmbiental(){
  $.get( "/datos/q/mapa-ambiental", function() {

  }).done(function(markers) {

    var locations = [];
    for (i = 0; i < markers.length; i++) {
        locations.push([markers[i].municipio, markers[i].latitud, markers[i].longitud]);
    }

   var map = new google.maps.Map(document.getElementById('map_ambiental'), {
     zoom: 8,
     center: new google.maps.LatLng(9.2398158, -74.77666909999999),
     mapTypeId: google.maps.MapTypeId.ROADMAP
   });

   var infowindow = new google.maps.InfoWindow();

   var marker, i;

   for (i = 0; i < locations.length; i++) {
     marker = new google.maps.Marker({
       position: new google.maps.LatLng(locations[i][1], locations[i][2]),
       map: map,
       icon: '/participacion/images/marker-ambiental-icon.png'
     });

     google.maps.event.addListener(marker, 'click', (function(marker, i) {
       return function() {
         infowindow.setContent(locations[i][0]);
         infowindow.open(map, marker);
       }
     })(marker, i));
   }



  }).fail(function() {
      console.log( "error" );
    });
}

function mapaEconomico(){
  $.get( "/datos/q/mapa-economico", function() {

  }).done(function(markers) {

    var locations = [];
    for (i = 0; i < markers.length; i++) {
        locations.push([markers[i].municipio, markers[i].latitud, markers[i].longitud]);
    }

   var map = new google.maps.Map(document.getElementById('map_economico'), {
     zoom: 8,
     center: new google.maps.LatLng(9.2398158, -74.77666909999999),
     mapTypeId: google.maps.MapTypeId.ROADMAP
   });

   var infowindow = new google.maps.InfoWindow();

   var marker, i;

   for (i = 0; i < locations.length; i++) {
     marker = new google.maps.Marker({
       position: new google.maps.LatLng(locations[i][1], locations[i][2]),
       map: map,
       icon: '/participacion/images/marker-economico-icon.png'
     });

     google.maps.event.addListener(marker, 'click', (function(marker, i) {
       return function() {
         infowindow.setContent(locations[i][0]);
         infowindow.open(map, marker);
       }
     })(marker, i));
   }

  }).fail(function() {
      console.log( "error" );
    });
}

function mapaSocial(){
  $.get( "/datos/q/mapa-social", function() {

  }).done(function(markers) {

    var locations = [];
    for (i = 0; i < markers.length; i++) {
        locations.push([markers[i].municipio, markers[i].latitud, markers[i].longitud]);
    }

   var map = new google.maps.Map(document.getElementById('map_social'), {
     zoom: 8,
     center: new google.maps.LatLng(9.2398158, -74.77666909999999),
     mapTypeId: google.maps.MapTypeId.ROADMAP
   });

   var infowindow = new google.maps.InfoWindow();

   var marker, i;

   for (i = 0; i < locations.length; i++) {
     marker = new google.maps.Marker({
       position: new google.maps.LatLng(locations[i][1], locations[i][2]),
       map: map,
       icon: '/participacion/images/marker-social-icon.png'
     });

     google.maps.event.addListener(marker, 'click', (function(marker, i) {
       return function() {
         infowindow.setContent(locations[i][0]);
         infowindow.open(map, marker);
       }
     })(marker, i));
   }

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarMapaPrincipal(){
  $.get( "/datos/q/mapa-general", function() {

  }).done(function(markers) {

    var locations = [];
    for (i = 0; i < markers.length; i++) {
        locations.push([markers[i].municipio, markers[i].latitud, markers[i].longitud]);
    }

   var map = new google.maps.Map(document.getElementById('map_general'), {
     zoom: 8,
     center: new google.maps.LatLng(9.2398158, -74.77666909999999),
     mapTypeId: google.maps.MapTypeId.ROADMAP
   });

   var infowindow = new google.maps.InfoWindow();

   var marker, i;

   for (i = 0; i < locations.length; i++) {
     marker = new google.maps.Marker({
       position: new google.maps.LatLng(locations[i][1], locations[i][2]),
       map: map
     });

     google.maps.event.addListener(marker, 'click', (function(marker, i) {
       return function() {
         infowindow.setContent(locations[i][0]);
         infowindow.open(map, marker);
       }
     })(marker, i));
   }

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarEdades(){


    var option_url = $('#municipio').val();
    $.get( "/datos/q/edades/"+option_url, function() {

  }).done(function(value) {

      var data = {
        labels: ["18 - 25 Años", "25 - 35 Años", "35 - 45 Años", "45 - 55 Años","55 - 68 Años","68 - 80 Años"],
        datasets: [
          {
            data: [value.opt01, value.opt02,value.opt03,value.opt04,value.opt05,value.opt06],
            backgroundColor: [ "#006633", "#2fac66", "#00a19a", "#00e0cf","#2bca6d","#1eaeff"],
            hoverBackgroundColor: [ "#006633", "#2fac66", "#00a19a","#00e0cf","#2bca6d","#1eaeff"]
          }]
      };

      var promisedDeliveryChart = new Chart(document.getElementById('chartEdades'), {
        type: 'pie',
        data: data,
        options: {
        	responsive: true,
          legend: {
            display: false
          },pieceLabel: {
          mode: 'percentage',
          fontSize: 15,
          precision: 2
          }
        }
       });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarTiempoResidencia(){
  var option_url = $('#municipio').val();
  $.get( "/resultados/q/tiempo-residencia/"+option_url, function() {

  }).done(function(value) {
      $('.t_r_01').html(value.opt01+'%');
      $('.t_r_02').html(value.opt02+'%');
      $('.t_r_03').html(value.opt03+'%');
      $('.t_r_04').html(value.opt04+'%');
      var data = {
        labels: ["1 - 10 Años", "11 - 20 Años", "21 - 30 Años", "30 o mas Años"],
        datasets: [{
            data: [value.opt01, value.opt02,value.opt03,value.opt04],
            backgroundColor: [ "#575756", "#B2B2B2", "#9D9D9C", "#EDEDED"],
            hoverBackgroundColor: [ "#575756", "#B2B2B2", "#9D9D9C","#EDEDED"]
          }]
      };

      var promisedDeliveryChart = new Chart(document.getElementById('chartTiempoResidencia'), {
        type: 'pie',
        data: data,
        options: {
        	responsive: true,
          legend: {
            display: false
          },pieceLabel: {
          mode: 'percentage',
          fontSize: 15,
          precision: 2
          }
        }
       });

  }).fail(function() {
      console.log( "error" );
    });
}

function cargarDesplazamiento(){


    var option_url = $('#municipio').val();
    $.get( "/datos/q/situacion-desplazamiento/"+option_url, function() {
  }).done(function(value) {

      var data = {
        labels: ["Desplazado", "No Desplazado"],
        datasets: [
          {
            data: [value.desplazado, value.no_desplazado],
            backgroundColor: [ "#484847", "#878787"],
            hoverBackgroundColor: [ "#484847", "#878787"]
          }]
      };

      var promisedDeliveryChart = new Chart(document.getElementById('chartSituacionDesplazamiento'), {
        type: 'pie',
        data: data,
        options: {
        	responsive: true,
          legend: {
            display: false
          },pieceLabel: {
          mode: 'percentage',
          fontSize: 15,
          precision: 2
          }
        }
       });

  }).fail(function() {
      console.log( "error" );
    });
}
