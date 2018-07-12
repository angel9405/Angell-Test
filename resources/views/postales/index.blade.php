<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Documentacion -->
  <title>Seccion 5--Prueba/Codigos Postales</title>
  </head>
  <body>
    <div id="cp">
      <!-- invoca la Funcion cp en app.js -->
    <formulario-cp></formulario-cp>
    <!-- Invoca un componente Vue llamado formulario-cp -->
      </div>
  <script type="text/javascript" src="{{asset('js/app.js')}}" async></script>
  <!-- Indica que el Script llamado anteriormente es de tipo Javascript -->
  </body>
</html>
