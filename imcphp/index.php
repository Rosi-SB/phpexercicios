<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Imc</title>
</head>
<body>
    <h1>Cálculo IMC</h1>
    <form action="imc.php" method="POST">
        <label for="peso">Informe seu Peso:</label>
        <input type="number" step="any" id="peso" name="peso">
        <label for="altura">Informe sua Altura:</label>
        <input type="number" step="any" id="altura" name="altura">
        <button type="submit">Calcular IMC</button>
    </form>
</body>
</html>