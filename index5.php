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
      <h4>5. Algoritmo que muestre los numeros primos que haya del 1 al 100</h4>
    <?php
      $a=1;
      while ($a <= 100) {
      if ($a==2 or $a==3 or $a==5 or $a==7 or $a==11 or $a==13 or $a==17 or $a==19 or $a==23 or $a==29 or $a==31 or $a==37 or $a==41
          or $a==43 or $a==47 or $a==53 or $a==59 or $a==61 or $a==67 or $a==71 or $a==73 or $a==79 or $a==83 or $a==98 or $a==97) {
        echo "$a &nbsp";
      }
      $a++;
      }
     ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
