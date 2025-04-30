<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php
 
$valorA = $_GET["valorA"];
$valorB = $_GET["valorB"];
$valorC = $_GET["valorC"];
$valorD = $_GET["valorD"];
 
$soma = $valorA + $valorC ;
echo "A Soma de A + C é : {$soma} <br>";
 
$multiplicacao = $valorB * $valorD;
echo "A multiplicação de B x D é : {$multiplicacao} <br>"; 

$BD = $valorB + $valorD;
echo "A soma de B + D é : {$BD} <br>";
 
if ($soma > $multiplicacao){
echo "A Soma é maior que a multiplicação {$soma}<br>";
}
 
else if ($soma < $multiplicacao){
echo "A Soma é menor que a multiplicação {$multiplicacao}<br>";
}
 
else if ($soma == $multiplicacao){
echo " Os valores são iguais {$soma} , {$multiplicacao}<br>";
}

else {
    echo "nenhum valor encontrado";
}
 

if ($soma > $BD){
    echo "A + C é maior que B + D {$soma} <br>";
}

else if ($soma < $BD){
    echo "A + C é menor que B + D {$BD} <br> ";
}

else {
    echo "A + C é igual a B + D {$soma} , {$BD}";
}


 
 
 
?>
   
</body>
</html>