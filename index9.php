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
      <h4>7. Algoritmo que imprima la suma de todos los numeros pares que van de 1 a 100 y diga cuantos hay</h4>
    <?php
      $a=1;
      $b=0;
      $c=0;
      while ($a <= 100) {
      if ($a%2==0) {
      echo "$a &nbsp";
      $b=$b+$a;
      $c++;
      }
      $a++;
    }
    echo "<h4>La suma de los numeros péres es: $b</h4> ";
    echo "<h4>Los numeros pares que hay de 1  a 100 son: $c </h4>";
     ?>

    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
