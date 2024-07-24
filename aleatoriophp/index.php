<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Aleatório</title>
</head>
<body>
    <h1>Sorteador de Números</h1>
    <form action="gerar-numero.php" method="POST">
        <label for="limiteMinimo">Limite Mínimo:</label>
        <input type="number" id="limiteMinimo" name="limiteMinimo">
        <label for="limiteMaximo">Limite Máximo:</label>
        <input type="number" id="limiteMaximo" name="limiteMaximo">
        <button type="submit">Sortear Número</button>
    </form>
</body>
</html>