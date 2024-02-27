<html>
 <head>
  <title>PHP</title>
 </head>
 <body>
  <?php
    function verificaPalindromo($palavra) {
        $reverso = strrev($palavra);
        if ($palavra == $reverso) {
            echo "$palavra é um palíndromo.";
        } else {
            echo "$palavra não é um palíndromo.";
        }
    }

    verificaPalindromo("radar");

  ?>
 </body>
</html>