<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Respuestas</title>
    <link rel="stylesheet" href="/participacion/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/participacion/css/index.css">
    <link rel="stylesheet" href="/participacion/css/map.css">
    <link rel="stylesheet" href="/participacion/css/responsive.css">

  </head>
  <body>
<!-- header -->
  @yield('container')

  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbacMzUDelfCnpoBbKS4hSZOSH-vMAJDk"
  async defer></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="/respuestas/js/Chart.bundle.min.js"></script>
  <script src="/respuestas/js/Chart.min.js"></script>
  <script src="/respuestas/js/main.js"></script>
  @yield('script')

</html>
