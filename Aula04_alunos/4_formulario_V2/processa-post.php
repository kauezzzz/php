<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Processamento de dados usando POST</h1>
    <hr>
    <!-- Método mais seguro (Não mostra as informações na URL) -->
    <?php
        if(empty($_POST['nome']) || empty($_POST['email']) ){
    ?>
    <p style="color:red">Você deve preencher nome e e-mail!</p>

    <?php

    } else {

        $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
        $idade = filter_input(INPUT_POST, 'idade',FILTER_SANITIZE_NUMBER_INT);
        $mensagem = filter_input(INPUT_POST, 'mensagem',FILTER_SANITIZE_SPECIAL_CHARS);
        $informativos = filter_input(INPUT_POST, 'informativos',FILTER_SANITIZE_SPECIAL_CHARS);


        $interesses = filter_var_array($_POST ['interesses'] ?? [],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $escolha = filter_input(INPUT_POST, 'escolha',FILTER_SANITIZE_SPECIAL_CHARS);
    ?>
    <h2>Dados</h2>

    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Idade: <?=$idade?></li>
        <li>Informativos: <?=$informativos?></li>


        <?php if( !empty($interesses) ) { ?>
        
            <li>Interesses: <?=implode(",", $interesses)?></li>
        
        <li>Interesses:
            <ul>
                <?php foreach($interesses as $interesse){ ?>
                <li> <?=$interesse?> </li>
            <?php } ?>
            </ul>
        </li>
    <?php } ?>

        <li>Escolha: <?=$escolha?></li>
        <li>Mensagem: <?=$mensagem?></li>

    </ul> 

    <?php
    }
    ?>




    
</body>
</html>