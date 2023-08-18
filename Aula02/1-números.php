<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números no PHP</title>
</head>
<body>
    <h1>Tipos de dados numéricos no PHP</h1>
    <p>O PHP é uma linguagem com tipagem dinâmica, o que significa que por padrão não existe a necessidade de especificar o tipo de uma variável, já que isso será determinado em tempo de execução.</p>

    <br><hr>
    <h2>Números Inteiros</h2>
    <p>Tipo: int</p>

    <!-- Código PHP para números inteiros. -->
    <?php
        echo 2;
        echo "<br>";
        echo 6;
        echo " | Valores inteiros. <br>";
        echo 9+4;
        echo " | Soma de inteiros. <br>";
        echo -12;
        echo " | Números negativos. <br>";
        echo 5-12;
        echo " | Soma com negativo. <br>";

        $n = 4;
        echo $n;
        echo " | Alimentar variável e recuperar valor. <br>";

        ?>

    <br><hr>
    <h2>Função de verificação</h2>
    <p>Para saber se um número ou variável é inteiro usamos a função is_int()</p>

    <!-- Código PHP para função is_int -->
    <?php

        if(is_int(5)) { // true
            echo "É um inteiro <br>";
        }

        if(is_int("Não é um inteiro")) { //false
            echo "É um inteiro 2 <br>";
        }

        $a = 10;

        if(is_int($a)) { //true
            echo "É um inteiro 3 <br>";
        }

    ?>
   
    <br><hr>
    <h2>Números de ponto flutuante</h2>
    <p>Tipo: float</p>

    <!-- Código PHP para números tipo float -->
    <?php
    // Alimentar variável
    $a = 1.12;
    echo $a;
    echo "<br>";

    // Mostrar o valor diretamente
    echo 1.163;
    echo "<br>";

    // Realizar operações matemáticas
    echo 12.5 + 1.3678;
    echo "<br>";

    // Inclusive somar int com float
    echo 12 + 1.3258;
    ?>
   
    <br><hr>
    <h2>Função de verificação</h2>
    <p>Para saber se um número ou variável é flutuante usamos a função is_float()</p>

    <!-- Código PHP para verificação de float -->
    <?php

    $a = "teste";
    $b = 12.8;

    if(is_float($a)) {
        echo "É float 1! <br>";
    }
    
    if(is_float($b)) {
        echo "É float ! <br>";
    }

    if(is_float(6565.63)) {
        echo "É float 3! <br>";
    }

    if(is_float("teste")) {
        echo "É float 4! <br>";
    }

    ?>
   
</body>
</html>