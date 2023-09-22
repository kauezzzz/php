<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="../style.css">
    <title>Funções no PHP</title>
</head>
    <body>
        <h1 class="destaqueP">Criando e usando funções</h1>
        <hr>

        <h2 class="destaque">Funções como sub-rotina ou procedimento.</h2>

        <!-- Função Dados do autor -->
        <?php

            // 1ª Digitação (Aqui)

        ?>

        <section>
            <h3>Chamada de sub-rotina</h3>
            <?=dadosAutor()?>
            <article>
                <h4>Outra chamada</h4>
                <?=dadosAutor()?>
            </article>

        </section>
        <hr>
        
        <h2 class="destaque">Função com retorno de dados</h2>

        <!-- Função Dados do curso -->
        <?php
            function dadosCurso() {
                return  "Técnico em Desenvolvimento de Sistemas";
            }

        ?>
    
            <!-- 2ª Digitação (Aqui) -->

        <hr>
        
        <h2 class="destaque">Função com parâmetros (ou argumentos)</h2>
    
        <!-- Função Soma -->
        <?php

            // 3ª Digitação (Aqui)

        ?>
    
        <!-- Obs: Se não fosse o uso da função a soma abaixo teria que ser feita 3x via código, portanto a função reaproveita o código (isso é uma vantagem) -->

        <p><?=soma(10, 20, 30)?></p>
        <p><?=soma(100, 200, 300)?></p>
        <p><?=soma(1, 2)?></p>

        <!-- Variável abaixo é de escopo global -->
        <?php $total = soma(1500, 2000, 125);?>
        <p><?=$total?></p>
        <!-- _________________________________________________________________________________ -->
        
        <?php
            // Passando uma função como condição do IF
            if(soma(500, 200, 700) > 1000) {
                echo "Resultado da função é maior/igual a 1000";

            }
            
        // ____________________________________________________________________________   

            function verificaNegativo($valor) {
                // Versão 1: If/ else tradicional
                // if($valor < 0) {
                //     return "negativo";
                // }else{
                //     return "Não é negativo";

                // }

                // Versão 2: If/else usando operador ternário
                return $valor < 0 ? "negativo" : "não é negativo";
                
            }

        ?>

        <p> <?=verificaNegativo(10)?> </p>
        <p> <?=verificaNegativo(-150)?> </p>
        <p> <?=verificaNegativo(258.99)?> </p>

        <hr>
        <!-- _________________________________________________________________ -->

        <h2 class="destaque">Função anônima (closure, lambda)</h2>

        <?php

            // 4ª Digitação (Aqui)

        ?>

        <p> <?=$formataPreco(1000)?> </p>
        <p> <?=$formataPreco(1500)?> </p>
        <p> <?=$formataPreco(1500.75)?> </p>

        <hr>
    
        <!-- _________________________________________________________________ -->
        <h2 class="destaque">Indução de tipos</h2>

        <?php
            // Declaração tipo de dados

            // float: valores numéricos com casa decimal
            // int: valor numérico inteiro
            // string: caracteres


            // 5ª Digitação (Aqui)
            

        ?>

        <p> <?=calculaMedia(10, 7)?> </p>


        
    </body>
</html>