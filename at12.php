<html>
 <head>
  <title>PHP</title>
 </head>
 <body>
  <?php
    $lista = array(5, 2, 9, 10, 3);
    rsort($lista);
    echo "O segundo maior elemento é: " . $lista[1];

  ?>
 </body>
</html>