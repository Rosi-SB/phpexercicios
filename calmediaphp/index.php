<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular média</title>
</head>
<body>
    <h1>Calcular Média</h1>
    <form action="calcular-media.php" method="POST">
        <div>
            <label for="primeiraNota">Primeira Nota:</label>
            <input type="number" id="primeiraNota" name="primeiraNota" step="any">
        </div>
        <div>
            <label for="segundaNota">Segunda Nota:</label>
            <input type="number" id="segundaNota" name="segundaNota" step="any">
        </div>
        <div>
            <label for="terceiraNota">Segunda Nota:</label>
            <input type="number" id="terceiraNota" name="terceiraNota" step="any">
        </div>
        <div>
            <label for="quartaNota">Segunda Nota:</label>
            <input type="number" id="quartaNota" name="quartaNota" step="any">
        </div>
        
       
        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>