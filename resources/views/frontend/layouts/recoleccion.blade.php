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

  <script src="/js/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbacMzUDelfCnpoBbKS4hSZOSH-vMAJDk"
  async defer></script>
  <script src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/loader.js"></script>
  <script src="/respuestas/js/Chart.bundle.min.js"></script>
  <script src="/respuestas/js/Chart.min.js"></script>
  <script src="/js/Chart.PieceLabel.js"></script>
  <script src="/recoleccion/js/main.js"></script>
  @yield('script')

</html>
