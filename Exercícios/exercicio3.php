<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <!-- Programador: Kauê -->
    <h1>Primeiro exemplo:</h1>
    <h2><span>(Tipo de dado)</span> Números</h2>

     <?php
     echo 8*6;
     echo " | Exemplo de multiplicação"
    
    ?>

    <h2><span>(Verificação) </span>Função "is_int/variável"</h2>

     <?php

     $exemplo = 15; //verdadeiro
     $exemplo2 = 15.1; //falso

     if(is_int($exemplo)) {
        echo "É um inteiro <br>";
    }
     if(is_int($exemplo2)) {
        echo "É um inteiro <br>";
    }
    
    ?>

    <br><hr>

    <h1>Segundo exemplo:</h1>
     <h2><span>(Tipo de dado) </span>Números tipo Float</h2>

    <?php

    $abc = 1.25;
    echo $abc;
    echo "<br>";
    
    ?>

     <h2><span>(Verificação) </span>Verificação de float</h2>

    <?php

    $def = "exemplo"; //falso
    $cba = 1.25; //verdadeiro

    if(is_float($def)) {
        echo "É float! <br>";
    }

    if(is_float($cba)) {
        echo "É float! <br>";
    }
    
    ?>

    <br><hr>

    <h1>Terceiro exemplo:</h1>
     <h2><span>(Tipo de dado) </span>Sring</h2>

    <?php

    $laura = 15;
    echo "- Quantos pães você come por dia? <br> - $laura - Disse a Laura.";
    
    ?>

     <h2><span>(Verificação) </span>Verificação de string</h2>

    <?php

    $teste = "Exemplo";

    if(is_string($teste)) {
        echo "$teste é uma string <br>";
    }
    
    ?>

    <br><hr>

    <h1>Quarto exemplo:</h1>
     <h2><span>(Tipo de dado) </span>Booleano</h2>

    <?php

    $teste = true;
    echo $teste;

    if($teste) {
        echo "É verdadeiro! <br>";
    }
    
    ?>

    <h2><span>(Verificação) </span>Verificação de booleano</h2>

    <?php

    $teste = "Exemplo";

    $k = true;

        if(is_bool($k)) {
            echo "É um booleano! <br>";
        }

    ?>

    <br><hr>

    <h1>Quinto exemplo:</h1>
     <h2><span>(Tipo de dado) </span>Array</h2>

    <?php

    $zzz = array (1, 2, 3, 4);

    echo "<p>O primeiro valor da lista é: $zzz[0]</p>";

    ?>

    <br><hr>

    <h1>Esses são os tipos de dados e verificações apresentados na aula 2!</h1>

</body>
</html>