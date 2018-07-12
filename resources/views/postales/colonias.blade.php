<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
       <h1>Colonias del codigo</h1>

        <div class="panel panel-default">
           @foreach ($colonias as $colonia)
             <div class="panel-body">
                   {{$colonia}}
             </div>
           @endforeach
      </div>
    </div>
  </body>
</html>
