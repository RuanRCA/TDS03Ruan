<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imposto de renda</title>
</head>
<body>

<?php

$salario = $_GET["salario"];


if($salario<=2428.81){
    echo "Isento R$:  ${salario}";
}

else if ($salario >= 2428.81 && $salario<=2826.65){
$calculo = (7.5 /100 ) * $salario ;
echo "Você pagará : R$ {$calculo}";

}

else if ($salario >= 2826.66 && $salario <= 3751.05){
    $calculo = (15 / 100 ) * $salario;
    echo "Você pagará : R${$calculo}";
}

else if ($salario >= 3751.06 && $salario <= 4664.68){
    $calculo = (22.5 / 100) *$salario ;
    echo"Você pagará : R$ {$calculo}";
}

else{
    $calculo = (27.5 / 100) * $salario ;
    echo "Você pagará : R$ {$calculo}";
}



?>
    
</body>
</html>