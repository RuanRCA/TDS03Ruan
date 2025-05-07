<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX04</title>
</head>
<body>

<?php
$numero = $_GET["numero"];
$multiplicacao;

for ($i=0; $i <= 10 ; $i++){
    $multiplicacao = $numero * $i;
    echo "$numero x $i = $multiplicacao <br>";
}
?>
    
</body>
</html>