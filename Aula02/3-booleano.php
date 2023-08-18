<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleano no PHP</title>
</head>
<body>
<h1>Tipos de dados booleano no PHP</h1>
    <p>O tipo bool tem apenas dois valores. True (Verdadeiro) ou False (falso).</p>
    <p>Tipicamente, o resultado de um valor bool, é passado para uma estrutura de controle.</p>
    <ul>
        <li>Se for verdadeiro ... </li>
        <li>Enquanto for verdadeiro ... </li>
        <li>Até deixar de ser verdadeiro ... </li>
    </ul>

    <!-- Código PHP para booleanos -->
    <?php

        echo true;
        echo "<br>";
        echo false;

        if(true) {
            echo "É verdadeiro! <br>";
        }

        if(5 > 2) {
            echo "É verdadeiro! <br>";
        }

        $podeEntrar = true;

        if($podeEntrar) {
            echo "O usuário pode entrar";
        }
    ?>
    
    <br><hr>
    <h2>Função de verificação</h2>
    <p>Para saber se é booleano usamos a função is_bool()</p>

    <!-- Código PHP para verificar booleanos -->
    <?php

        $a = true;

        if(is_bool($a)) {
            echo "É um booleano 1 <br>";
        }

        if(is_bool(0)) {
            echo "É um booleano 2 <br>";
        }

        if(is_bool(false)) {
            echo "É um booleano 3 <br>";
        }

        if(0.0 == false) {
            echo "0 é considerado falso! <br>";
        }
    ?>
    
</body>
</html>