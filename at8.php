<html>
 <head>
  <title>PHP</title>
 </head>
 <body>
  <?php
   function calcularAreaCirculo($raio){
    return pi() * $raio * $raio;
   }
   $raio = 5;
   echo"A área do circulo é: " . calcularAreaCirculo($raio);
  ?>
 </body>
</html>