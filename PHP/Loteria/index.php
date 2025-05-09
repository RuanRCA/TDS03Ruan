<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//    $numeros=[];
//     $numeroAleatorio = rand(1,60);
//      for ($numeros=0; $numeros < 6 ; $numeros++){
//         $numeros=[] = $numeroAleatorio;
//         echo $numeros;
//      }
$numeros=[];

        //0
while (count($numeros) <= 5){
   
    $num = rand(1,60);//33
    
    if(in_array($num, $numeros)== '' ){
    
    $numeros[]= $num;
    }
}
foreach ($numeros as $valor) {
    
    echo "$valor,\n";
}

    ?>
</body>
</html>