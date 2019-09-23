<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/estilos-index.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Marco Reinoso</title>
  </head>
  <body>
    @include('menu')
    @include('content')

    <script src="http://localhost:35729/livereload.js"></script>
  </body>
  @include('footer')

</html>
