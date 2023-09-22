<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="../style.css">
    <title>Formulario e processamento</title>
</head>
<body>
    <h1 class="destaqueP">Ex_10 - Formulario e processamento</h1>
    <hr>

    <!-- ________________________________________________________________________________ -->
 

    <!-- 1ª Digitação (aqui) -->

    <section>
        <h2>Dados</h2>
        <p>Nome: <?= $nome?></p>
        <p>E-mail: <?= $email?></p>
    </section>
    
    <p><a href=""><link href="10-formulario-processamento.php">Voltar</a></p>
    

    <!-- 2ª Digitação (aqui) -->

    
    <!-- Entra aqui porque ao entrar na página ele entra no falso e cai aqui (Mostra formulário) -->

    <!-- Deixe o action vazio! -->
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email">
        </p>
        <button type="submit" name="enviar">Enviar</button>
        <button type="reset" name="limpar">Limpar</button>
    </form>

    <!-- 3ª Digitação (aqui) -->
    
</body>
</html>