<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX02</title>
</head>
<body>
<?php

 $valor1 = $_GET["valor1"];
 $valor2 = $_GET["valor2"];

 $soma = $valor1 + $valor2;
 $soma8 = $soma + 8;
 $soma5 = $soma -5;

 if ($soma > 20){
  echo "Valor maior que 20 {$soma8}";
 }

 else if ($soma <= 20){
    echo "valor é menor que 20 {$soma5}";
 }

 else {
    echo "{$valor1} , {$valor2}";
 }

 ?>
</body>
</html>