<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>

    <h1>Calculando IMC</h1> <br>
    
    <br><form action="dados.php" method="GET">
     
        <label for="nome"> Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome">

        <label for="Peso">Peso:</label>
        <input type="number" name="peso" placeholder="Digite seu peso" step="0.01">

        <label for="altura">Altura:</label>
        <input type="number" name="altura" placeholder="Digite sua altura" step="0.01">

        <button type="submit">Calcular</button>

    </form>
</body>
</html>