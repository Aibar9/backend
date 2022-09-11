<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tp_2</title>
  </head>
  <body>
    <h1>Trabajo práctico 2</h1>
    <h3>Crear una variable n y validar que sea un número positivo</h3>
    <?php
    $n = 5;
    if ($n > 0) {
      echo "$n es un numero positivo";
    }
    ?>
    <br>
    <h3>Crear una variable n y validar que sea un número mayor a 1 y menor que
    10</h3>
    <?php
    if (($n > 1) & ($n < 10)) {
      echo "$n es mayor a 1 y menor que 10";
    }
     ?>
     <br>
     <h3>Crear una variable n y validar que sea un número mayor a 10 o menor que
     2</h3>
     <?php
     $num = 11;
     if (($num>10) or ($num<2)) {
       echo " La variable ($num) es mayor a 10 o menor que 2";
     }
     ?>
     <br>
     <h3>Crear dos variables, una con nombre numero1 y otra con nombre numero2.
       Si numero1 es mayor que numero2, mostrar por pantalla la suma y la resta.
       Si numero2 es mayor que numero1, mostrar por pantalla la multiplicación,
       la división entera y el resto de la división. Si numero1 y numero2 son
       iguales, mostrar el mensaje: "Los números ingresados son iguales"</h3>
     <?php
     $numero1 = 7;
     $numero2 = 10;
     if ($numero1>$numero2) {
      echo "Suma:" . ($numero1 + $numero2) . "<br> Resta:" . ($numero1 - $numero2);
      }
      elseif ($numero2>$numero1) {
        echo "Multiplicación:" . ($numero2 * $numero1) . "<br> División entera:" .
        floor($numero2 / $numero1) . "<br> Resto:" . ($numero2 % $numero1);
      }
      else {
        echo "Los números ingresados son iguales";
      }
      ?>
  </body>
</html>
