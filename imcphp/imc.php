<?php
    if(isset($_POST["peso"]) && isset($_POST["altura"])){
        $peso = floatval($_POST["peso"]);
        $altura = floatval($_POST["altura"]);
        
        if($altura > 0){
            $calcIMC = $peso / ($altura * $altura);
            $calcIMC = number_format($calcIMC, 3, '.','.');
            echo "<h3>Seu IMC é de $calcIMC</h3>";
            if($calcIMC > 40) {
                echo "<h3>Obesidade Grau III ou Mórbida</h3>";
            } elseif($calcIMC > 35) {
                echo "<h3>Obesidade Grau II</h3>";
            } elseif($calcIMC > 30) {
                echo "<h3>Obesidade Grau I</h3>";
            } elseif($calcIMC > 25) {
                echo "<h3>Sobrepeso</h3>";
            } elseif($calcIMC > 18.5) {
                echo "<h3>Peso Normal</h3>";
            } else {
                echo "<h3>Abaixo do Peso</h3>";
            }
        }else{
            echo"<h3>Valores Inválidos. Verifique os dados informados</h3>";
        }

    }
?>

