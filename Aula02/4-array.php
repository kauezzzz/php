<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array no PHP</title>
</head>
<body>
    <h1>Tipos de dados array no PHP</h1>
    <p>Um array, da forma mais simples, é uma lista.</p>
    <hr>
    <p>Arrays são essenciais para armazenar, gerenciar, e operar sobre um conjunto de variáveis.</p>
    <hr>
    <p>Veja 2 exemplos:</p>
    
    <!-- Código PHP para arrays -->
    <?php
        echo "<p>Sintaxe NORMAL: Usa o nome e põe os valores entre parenteses.</p>";
        $a = array (1, 2, 3, 4);

        //Mostrar no navegador o Array inteiro
        print_r($a);
        echo "<br>";

        //Mostrar no navegador somente o valor da primeira posição na lista.
        echo "<p>O primeiro valor da lista é: $a[0]</p>";

        echo "<br><hr><p>Sintaxe CURTA: NÃO usa o nome e pões os valores entre colchetes.</p>";

        $arr = ["SENAI", 118, true];

        echo "<br>";
        print_r($arr);
        echo "<br>";
        print_r($arr[1]);
        echo "<br><p>O Segundo valor da lista é: $arr[1]</p>";
    ?>
       
</body>
</html>