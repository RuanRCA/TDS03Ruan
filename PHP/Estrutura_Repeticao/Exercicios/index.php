<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex01</title>
</head>
<body>

<?php



for ($numero=2;$numero<=100;$numero++)
{
   $primo=true;
    for ($i=2; $i<$numero ; $i++ ){
        if ($numero%$i == 0){
            $primo = false;
            break;
        }
    }
    if ($primo) {
        echo  " <h1> $numero </h1>";
    }

}






?>
    
</body>
</html>