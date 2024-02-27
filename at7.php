<html>
 <head>
  <title>PHP</title>
 </head>
 <body>
 <?php
    $matriz = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9),
    );
    $transporta = array();

    for ($i = 0; $i < 3; $i++) {
        for($j = 0; $j < 3; $j++){
            $transporta[$i][$j] = $matriz[$i][$j];
        }
    }

    foreach ($transporta as $linha){
        echo implode(" ", $linha) . "<br>";
    }
 ?>
 </body>
</html>