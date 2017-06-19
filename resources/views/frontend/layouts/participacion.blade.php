<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Participacion</title>
    <link rel="stylesheet" href="/participacion/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/participacion/css/index.css">
    <link rel="stylesheet" href="/participacion/css/map.css">
    <link rel="stylesheet" href="/participacion/css/responsive.css">

    <!-- script del mapa -->
        <script>
          /*
                function initMap() {
                  var myLatLng = {lat: 9.2409393, lng: -74.7543637};

                  // Create a map object and specify the DOM element for display.
                  var map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    scrollwheel: false,
                    zoom: 9
                  });

                  // Create a marker and set its position.
                  var marker = new google.maps.Marker({
                    map: map,
                    position: myLatLng,
                    title: 'Hello World!'
                  });
                }
          */

         var marker_ambiental;
         var marker_social;
         var marker_economico;
         var ambiental = 'images/marker-ambiental.png';
         var social = 'images/marker-social.png';
         var economico = 'images/marker-economico.png';

          function initMap() {

            var map_ambiental = new google.maps.Map(document.getElementById('map_ambiental'), {
              zoom: 8,
              center: {lat: 9.3178265, lng: -74.6897524}
            });

            marker_ambiental = new google.maps.Marker({
              map: map_ambiental,
              draggable: true,
              animation: google.maps.Animation.DROP,
              position: {lat: 9.2409393, lng: -74.7543637 },
              icon: ambiental
            });


            var map_social = new google.maps.Map(document.getElementById('map_social'), {
              zoom: 8,
              center: {lat: 9.3178265, lng: -74.6897524}
            });

            marker_social = new google.maps.Marker({
              map: map_social,
              draggable: true,
              animation: google.maps.Animation.DROP,
              position: {lat: 9.2409393, lng: -74.7543637 },
              icon: social
            });


            var map_economico = new google.maps.Map(document.getElementById('map_economico'), {
              zoom: 8,
              center: {lat: 9.3178265, lng: -74.6897524}
            });

            marker_economico = new google.maps.Marker({
              map: map_economico,
              draggable: true,
              animation: google.maps.Animation.DROP,
              position: {lat: 9.2409393, lng: -74.7543637 },
              icon: economico
            });


            //Marker Ambiental
            marker_ambiental.addListener('click',toggleAmbiental);
            marker_ambiental.addListener('dragend', function (event){
             document.getElementById("ubicacion_longitud_ambiental").value = this.getPosition().lng();
             document.getElementById("ubicacion_latitud_ambiental").value = this.getPosition().lat();
            });

            //Marker Social
            marker_social.addListener('click', toggleSocial);
            marker_social.addListener('dragend', function (event){
             document.getElementById("ubicacion_longitud_social").value = this.getPosition().lng();
             document.getElementById("ubicacion_latitud_social").value = this.getPosition().lat();
            });

            //Marker Economico
            marker_economico.addListener('click', toggleEconomico);
            marker_economico.addListener('dragend', function (event){
             document.getElementById("ubicacion_longitud_economico").value = this.getPosition().lng();
             document.getElementById("ubicacion_latitud_economico").value = this.getPosition().lat();
            });
          }

          function toggleAmbiental() {
            if (marker_ambiental.getAnimation() !== null) {
              marker_ambiental.setAnimation(null);
            } else {
              marker_ambientalR.setAnimation(google.maps.Animation.BOUNCE);
            }
          }

          function toggleSocial() {
            if (marker_social.getAnimation() !== null) {
              marker_social.setAnimation(null);
            } else {
              marker_social.setAnimation(google.maps.Animation.BOUNCE);
            }
          }

          function toggleEconomico() {
            if (marker_economico.getAnimation() !== null) {
              marker_economico.setAnimation(null);
            } else {
              marker_economico.setAnimation(google.maps.Animation.BOUNCE);
            }
          }



    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfQ1Qs0OflLOakyKFKIW9f4-URkcUDTYk&callback=initMap"
    async defer></script>
  </head>
  <body>
<!-- header -->
  @yield('container')

  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  @yield('script')

</html>
