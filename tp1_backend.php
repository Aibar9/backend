<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tp_1</title>
  </head>
  <body>
    <h1>Trabajo práctico N1</h1>
    <h3>Imprimir por pantalla:</h3>
    <?php
    echo "Hola mundo";
    ?>
    <br>
    <h3>Cargar en una variable la cadena de caracteres "Hola mundo"
        e imprimirla por pantalla:</h3>
    <?php
    $saludo = "Hola mundo";
    echo $saludo;
    ?>
    <br>
    <h3>Crear dos variables enteras y mostrar su suma, resta, multiplicación,
      división y resto:</h3>
      <P>
        Variables: personas (10) y sombreros (10) <br>
        <br>
        Suma:
        <?php
        $personas = 10;
        $sombreros = 10;
        echo $personas + $sombreros;
        ?>
        <br>
        Resta:
        <?php
        echo $personas - $sombreros;
        ?>
        <br>
        Multiplicación:
        <?php
        echo $personas * $sombreros;
        ?>
        <br>
        División:
        <?php
        echo $personas / $sombreros;
        ?>
        <br>
        Resto:
        <?php
        echo $personas % $sombreros;
        ?>
     </p>
     <h3>Transformar 20°C a Farenheit e imprimir en pantalla:</h3>
     <?php
     $celsius = 20;
     $farenheit = $celsius * 1.8 + 32;
     echo $farenheit;
      ?>
      <h3>Calcular el perímetro y el área de un rectángulo cuya base es de 20cm
      y su altura de 18cm</h3>
      Périmetro:
      <?php
      $base = 20;
      $altura = 18;
      $perimetro = 2*$base + 2*$altura;
      echo $perimetro;
       ?>
       <br>
       Área:
       <?php
       $area = $base * $altura;
       echo $area;
       ?>
       <h3>Calcular el perímetro y el área de un circulo con radio de 30cm</h3>
       Perímetro:
       <?php
       $radio = 30;
       $pi = 3.14;
       $pe = 2*$pi * $radio;
       echo $pe
        ?>
        <br>
       Área:
       <?php
       $a = $pi*$radio**2;
       echo $a;
       ?>
  </body>
</html>
