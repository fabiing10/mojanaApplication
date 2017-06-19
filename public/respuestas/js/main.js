$( document ).ready(function() {
    console.log( "ready!" );
    cargarRegimenSalud();
    cargarSituacionDesplazamiento();
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
