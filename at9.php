<html>
 <head>
  <title>PHP</title>
 </head>
 <body>
  <?php
    $numero = -10;
    if ($numero > 0){
        echo "$numero é positivo.";
    } elseif ($numero < 0 ){
        echo "$numero é negativo.";
    } else{
        echo "$numero é zero.";
    }
  ?>
 </body>
</html>