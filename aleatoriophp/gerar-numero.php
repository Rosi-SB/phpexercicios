<?php
    //Variáveis recebidas pelo método POST
    $limiteMinimo = $_POST["limiteMinimo"];
    $limiteMaximo = $_POST["limiteMaximo"];

    //Validar valores dos limites
    if ($limiteMinimo > $limiteMaximo){
        echo"Erro: Limite mínimo é maior que limite máximo";
        exit;
    }
    // isset(definido) | null(nulo) | empty(vazio)
    if (!isset($limiteMinimo) || is_null($limiteMinimo) || empty($limiteMinimo)){
        $limiteMinimo = 0;
    }
    if (!isset($limiteMaximo) || is_null($limiteMaximo) || empty($limiteMaximo)){
        $limiteMaximo = 100;
    }

    $numeroSorteado = rand($limiteMinimo, $limiteMaximo);
    echo"<h3>Número Sorteado: $numeroSorteado </h3>"
?>