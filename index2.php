<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>Estructura de control iterativa(While)</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <h3>Estructura de control iterativa(While)</h3>
      <h4>2. Algoritmo que muestre los numeros del 100 al 1</h4>
    <?php
      $a=100;
      while ($a >= 1) {
        echo "$a &nbsp";
        $a--;
      }
     ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
