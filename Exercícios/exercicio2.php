<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Síntaxe Geral</title>

    <style>
        .destaque {color: red;}
        .destaque2 {color: brown}
        .kingo {color: pink}
    </style>
</head>
<body>

    <!-- Programador: Kauê -->
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p class="kingo">Programador: Kauê</p>
    <hr>

    <?php
    // Geração do texto (string)
    echo "Chama Sesi-Senai !";

    /* Geração de texto estruturado (com tags, atributos) */
    echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP.</h2>";
    echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP.</h2>";

    ?>

    <h1 class="destaque2">HTML e PHP mescaldos</h1>
    <p>Parágrafo HTML</p>

    <?php
        $linguagem = "Linguagem PHP.";
    ?>
    <p>Parágrafo mesclando HTML com <?=$linguagem?> </p>
    
</body>
</html>