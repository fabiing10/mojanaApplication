$( document ).ready(function() {
    console.log( "ready!" );
    cargarRegimenSalud();

    cargarHanSalido();
    cargarHanSalidoM();
    cargarActores();
    cargarCondiciones();
    cargarViviendas();
    cargarMunicipios();
    mapaAmbiental();
    mapaSocial();
    mapaEconomico();
});



function cargarRegimenSalud(){
  $.get( "/resultados/q/regimen-salud", function() {

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

function cargarHanSalido(){
  $.get( "/resultados/q/han-salido", function() {

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

function cargarHanSalidoM(){
  $.get( "/resultados/q/han-salido-m", function() {

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

function cargarActores(){
  $.get( "/resultados/q/actores", function() {

  }).done(function(data) {

      var Ac = $("#chartActores");
      var myPieChart = new Chart(Ac,{
        type: 'bar',
        data: {
             labels: ["Ninguno", "Transporte", "Infraestructura","Gremios","Ambiente"],
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
  $.get( "/resultados/q/condiciones-fisicas", function() {

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

function cargarViviendas(){
  $.get( "/resultados/q/vivienda-es", function() {

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
  $.get( "/resultados/q/municipios", function() {

  }).done(function(data) {

      var Ac = $("#chartMunicipios");
      var myPieChart = new Chart(Ac,{
        type: 'bar',
        data: {
             labels: ["Nechi", "Achi", "Magangue","S.J.Cauca","Ayapel","Caimito","Guaranda","Majagual","S.B.Abad","San Marcos","Sucre"],
             datasets: [{
                 data: [data.nechi, data.achi, data.magangue, data.san_jacinto_cauca, data.ayapel, data.caimito, data.guaranda, data.majagual, data.san_benito_abad, data.san_marcos, data.sucre],
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

function mapaAmbiental(){
  $.get( "/resultados/q/mapa-ambiental", function() {

  }).done(function(markers) {

    var locations = [
     ['Magangue', 9.2398158, -74.77666909999999, 4],
     ['Guaranda', 8.4683211, -74.5414131, 5],
     ['San Benito', 8.7849314, -75.28130049999999, 3],
     ['Caimito', 8.7696259, -75.254793, 2],
     ['Majagual', 8.5412716, -74.63687570000002, 1]
   ];

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
function mapaEconomico(){
  $.get( "/resultados/q/mapa-economico", function() {

  }).done(function(data) {

    var locations = [
     ['Magangue', 9.2398158, -74.77666909999999, 4],
     ['Guaranda', 8.4683211, -74.5414131, 5],
     ['San Benito', 8.7849314, -75.28130049999999, 3],
     ['Caimito', 8.7696259, -75.254793, 2],
     ['Majagual', 8.5412716, -74.63687570000002, 1]
   ];

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
function mapaSocial(){
  $.get( "/resultados/q/mapa-social", function() {

  }).done(function(data) {

    var locations = [
     ['Magangue', 9.2398158, -74.77666909999999, 4],
     ['Guaranda', 8.4683211, -74.5414131, 5],
     ['San Benito', 8.7849314, -75.28130049999999, 3],
     ['Caimito', 8.7696259, -75.254793, 2],
     ['Majagual', 8.5412716, -74.63687570000002, 1]
   ];

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

/*
function cargarSituacionDesplazamiento(){
  $.get( "/resultados/q/regimen-salud", function() {

  }).done(function(value) {

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    var dataTable = new google.visualization.DataTable(json);

  }).fail(function() {
      console.log( "error" );
    });
}


function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
           legend: 'none',
        };

        var chart = new google.visualization.PieChart(document.getElementById('chartSituacionDesplazamiento'));

        chart.draw(data, options);
      }
*/
