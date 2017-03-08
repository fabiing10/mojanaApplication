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

         var marker;
         var image = 'images/hospital.png';

          function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 8,
              center: {lat: 9.3178265, lng: -74.6897524}
            });

            marker = new google.maps.Marker({
              map: map,
              draggable: true,
              animation: google.maps.Animation.DROP,
              position: {lat: 9.2409393, lng: -74.7543637 },
              icon: image
            });
            marker.addListener('click', toggleBounce);
          }

          function toggleBounce() {
            if (marker.getAnimation() !== null) {
              marker.setAnimation(null);
            } else {
              marker.setAnimation(google.maps.Animation.BOUNCE);
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
</html>
