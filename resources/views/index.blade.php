<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href= "{{ asset('css/estilos-index.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Marco Reinoso</title>
  </head>
  <body>

    <header>
    @include('menu')
    </header>
    <div class="container">
      <nav>
      @include('content')
      </nav>
      <section>
      @include('content')
    </section>
    </div>

    <footer>
      @include('footer')
    </footer>


    <script src="http://localhost:35729/livereload.js"></script>
  </body>


</html>
