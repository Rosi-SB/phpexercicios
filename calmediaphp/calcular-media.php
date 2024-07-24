<!-- Primeira tentativa:
 <?php
    $primeiraNota = $_POST["primeiraNota"];
    $segundaNota = $_POST["segundaNota"];
    $terceiraNota = $_POST["terceiraNota"];
    $quartaNota = $_POST["quartaNota"];

    $calcularMedia = ($primeiraNota + $segundaNota + 
    $terceiraNota + $quartaNota)/4;
    echo "<h3>Nota: $calcularMedia </h3>";
?> -->

<?php
    // $primeiraNota = floatval($_POST["primeiraNota"]);
    // $segundaNota = floatval($_POST["segundaNota"]);
    // $terceiraNota = floatval($_POST["terceiraNota"]);
    // $quartaNota = floatval($_POST["quartaNota"]);

    // $calcularMedia = ($primeiraNota + $segundaNota + $terceiraNota + $quartaNota) / 4;
    // echo "<h3>Nota: $calcularMedia </h3>";

    // RESOLUÇÃO:

    $quantidadeNotas = 4;
    $somaNotas = 0;

    //Obtendo as notas das disciplinas 
    for($i = 1; $i <= $quantidadeNotas; $i++){
        $nota = floatval($_POST["nota$i"]);

        //Validando a nota
        if($nota < 0 || $nota > 10){
            echo "Erro: Nota da disciplina inválida. Digite um valor entre 0 e 10";
            exit;
        }
        
        $somaNotas += $nota;
    }

    $mediaFinal = $quantidadeNotas;
    $mediaFinal = number_format($mediaFinal,2);
     
    //Apresentando o resultado
    echo "<h3> Média Final: $mediaFinal</h3>";
?>

