<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$nome = $_GET["nome"];
$peso = $_GET["peso"];
$altura = $_GET["altura"];
$casas_decimais=2;
$Resultado = sprintf("%.{$casas_decimais}f",$peso /($altura*$altura) );

if ( $Resultado<=18.5){
    echo "Olá {$nome}" ;
    echo "Você está  abaixo do peso: {$Resultado}";
}



else if ( $Resultado>=18.5 && $Resultado <=24.99){
    echo "Olá {$nome}<br>";
    echo "Você está no peso Normal: {$Resultado}";
}

else if ($Resultado>=25.0 && $Resultado <=29.99){
    echo "Olá {$nome}<br>";
    echo "Você está acima do peso: {$Resultado}";
}

else if ($Resultado>=30.0 && $Resultado <=34.99){
    echo "Olá {$nome}<br>";
    echo "Obesidade1: {$Resultado}";
}

else if ($Resultado>=35.0 && $peso <=39.99){
    echo "Olá {$nome}<br>";
    echo "Obesidade2 Severa: {$Resultado}";
}
else {
    echo "Olá {$nome}<br>";
    echo "Obesidade3 Mórbida: {$Resultado}";
}

?>

</body>
</html>