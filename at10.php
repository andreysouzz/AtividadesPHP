<html>
 <head>
  <title>PHP</title>
 </head>
 <body>
  <?php
  $numero = 0;
  $numero = 1;
  echo "Sequencia de Fibonacci: ";
  echo $numero1 . " ";
  echo $numero2 . " ";
  for ($i = 2; $i < 10; $i++){
    $proximo = $numero + $numero2;
    echo $proximo . " ";
    $numero1 = $numero2;
    $numero2 = $proximo;
  }

  ?>
 </body>
</html>