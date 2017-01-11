<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
  </head>
  <body>

    <div class="container">
          <?php
            $numero1 = 29;
            $numero2 = 199;

            if($numero1 > $numero2 ){
              echo "el número 1 es mayor";
            } else if ($numero1 == $numero2) {
              echo "son iguales";
            } else {
              echo "el número 2 es mayor";
            }

            echo "<hr>";

            if ($numero1 != 20) {
              echo "No, no son iguales";
            } else {
              echo "Si son iguales";
            }
          ?>
          </div>
    </div>

  </body>
</html>
