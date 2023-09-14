<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de repetição PHP</title>

    <!-- Link para (Bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
    
    <!-- Título da página -->
    <div class="container-fluid alert alert-primary" role="alert">
        <h1 id="topo">Estruturas de Controle e Repetição</h1>
    </div>

   
    <hr>
        
    <!-- ___________________________________________________________________ -->
    <!-- Selecionar o 1º Elemento + Crtl + D (Altera vários itens ao mesmo tempo) -->
    <div class="alert alert-light" role="alert" >
        <h2><a href="#topo">While (enquanto)</a></h2>
    </div>
    
    <h4>&ensp;Declarar uma variável numérica inicial</h4> 
    <h4>&ensp;enquanto não chegar ao valor final {</h4>  
    <h3>&emsp;execute o(s) comando(s);</h3>
    <h3>&emsp;incremente a variável de controle do loop;</h3>
    <h4>&ensp;}</h4>

    <br>
    <h4>&nbsp;$var = 1;</h4>
    <h4>&nbsp;while ( comparação ) {</h4>
    <h4>&emsp;comando para comparação verdadeira</h4>
    <h4>&emsp;Incrementar $var</h4>
    <h4>&nbsp;}</h4>


    
    <!-- Criando uma linha com duas colunas -->
    <div class="row">
        <div class="col border border-dark">
            <p>&nbsp;Criar um programa PHP que exiba números de 1 a 5.</p>
        
            <!-- Acompanhar explicação do programa PHP -->
            <!-- Iniciar loop -->
            <?php
                $i = 1;
                while ($i <= 5){
            ?>
                    <!-- Tag p identada exibindo valor atual da variável do PHP -->
                    <p class="text-center"><?=$i?></p>
            
            <!-- Incrementar variável do PHP -->
            <?php
                    // $i = $i + 1;
                    $i ++; // Mesmo da linha de cima

                }

            ?>
        </div>

        <div class="col border border-dark">
            <p>&nbsp;Criar um programa PHP que exiba números de 10 a 6.</p>
            <!-- Criar aqui seu programa PHP -->
            <!-- Iniciar loop -->
            <?php
                $i = 10;
                while ($i >= 6){
            ?>
                    <!-- Tag p identada exibindo valor atual da variável do PHP -->
                    <p class="text-center"><?=$i?></p>
            
            <!-- Incrementar variável do PHP -->
            <?php
                    // $i = $i - 1;
                    $i --; // Mesmo da linha de cima

                }

            ?>
        </div>
    </div>
    
    <!-- _______________________________________________________________________________ -->
    
    <div class="alert alert-light" role="alert" id="façaEnquanto">
        <h2><a href="#topo">Do While (Faça enquanto)</a></h2>
    </div>
    
    <h4>&ensp;Declarar uma variável numérica inicial</h4> 
    <h4>&ensp;Faça (execute) {</h4>  
    <h3>&emsp;execute o(s) comando(s);</h3>
    <h3>&emsp;incremente a variável de controle do loop;</h3>
    <h4>&ensp;} enquanto a variável não atingir o limite final</h4>

    <br>
    <h4>&nbsp;$var = 1;</h4>
    <h4>&nbsp;do {</h4>
    <h4>&emsp;comando(s);</h4>
    <h4>&emsp;Incrementar $var;</h4>
    <h4>&nbsp;} while ($var não chegar ao fim)</h4>


    
    <!-- Criando uma linha com duas colunas -->
    <div class="row">
        <div class="col border border-dark">
            <p>&nbsp;Criar um programa PHP que exiba a palavra Olá! 3 vezes.</p>
        
            <!-- Acompanhar explicação do programa PHP -->
            <!-- Iniciar loop -->
            <?php
                $j = 1;
                do {
            ?>
                <div><h3>Olá!</h3></div>
            <?php
                $j++;        


                } while ($j <=3);

            ?>
        </div>

        <div class="col border border-dark">
        <p>&nbsp;Criar um programa PHP que exiba a palavra Sesi-Senai 1DE! 3 vezes.</p>
        
        <!-- Acompanhar explicação do programa PHP -->
        <!-- Iniciar loop -->
        <?php
            $j = 1;
            do {
        ?>
            <div><h3>Sesi-Senai 1DE</h3></div>
        <?php
            $j++;        


            } while ($j <=4);

        ?>
        </div>
    </div>
    
    <hr>
    <!-- _______________________________________________________________________________ -->
    <h2></h2>
    <div class="alert alert-light" role="alert" id="contador">
        <h2><a href="#topo">For</a></h2>
    </div>

    <h4>&ensp;Para (variável recebe início); até (condição limite ou fim) ( incremento ) faça</h4> 
    <h4>&ensp;for ($i = 1; $i < 4; $i++) {</h4>  
    <h3>&emsp;execute o(s) comando(s);</h3>
    <h4>&ensp;} enquanto a variável não atingir o limite final</h4>

    <br>
     <!-- Criando uma linha com duas colunas -->
     <div class="row">
        <div class="col border border-dark">
            <p>&nbsp;Criar um programa PHP que exiba números de 1 a 5 separados por uma barra.</p>
        
            <!-- Acompanhar explicação do programa PHP -->
            <!-- Iniciar loop -->
            <?php
                // Laço For
                // para i de 1 até 5 faça

                //Controle; Condição; Atualização
                for( $i = 1; $i <=5; $i++){
                    // O ponto concatena
                    echo $i." | ";

                }
            ?>

        </div>

        <div class="col border border-dark">
        <p>&nbsp;Criar um programa PHP que exiba números de 10 a 1 separados por uma virgula.</p>
        
        <!-- Acompanhar explicação do programa PHP -->
        <!-- Iniciar loop -->
            <?php
                // Laço For
                // para i de 1 até 5 faça

                //Controle; Condição; Atualização
                for( $i = 10; $i >=1; $i--){
                    if ($i>1) {
                        // O ponto concatena
                        echo $i.", ";

                    } else {
                        echo $i;
                    }
                    
                }
            ?>
        </div>
    </div>
    
    <hr>

    <!-- _______________________________________________________________________________ -->
    <h2></h2>
    <div class="alert alert-light" role="alert" id="listas">
        <h2><a href="#topo">Loop em Array</a></h2>
    </div>

    <h4>&ensp;Para percorrer listas (arrays), podemos usar o laço For</h4> 
    <h4>&ensp;e também podemos usar o laço foreatch (para cada)</h4>  
    <h4>&ensp;Acompanhe os dois exemplos em uma lista com od dias da semana.</h4>  
    
    <br>
     <!-- Criando uma linha com duas colunas -->
     <div class="row">
        <div class="col border border-dark">
            <p>&nbsp;Criar um programa PHP que exiba os dias da semana em uma lista ordenada com laço for</p>
        
            <!-- Acompanhar explicação do programa PHP -->
            <!-- Iniciar loop -->
            <h2>Lista com laço for</h2>

            <?php

                $dias = array("Domingo", "Segunda", "Terça", "Quarta","Quinta", "Sexta", "Sábado");
            ?>
            <ol>
                <?php
                    // Linha abaixo permite melhorar a performace para grandes tabelas
                    $quantidade = count($dias);

                    for($k = 0; $k < $quantidade; $k++) {
                    // for($k = 0; $k <= 11; $k++) {
                ?>
            
                        <li><?=$dias[$k]?></li>
            

                <?php
                    }
                ?>
            </ol>

        </div>

        <div class="col border border-dark">
        <p>&nbsp;Criar um programa PHP que exiba os dias da semana em uma lista ordenada com laço foreach.</p>
        
        <!-- Acompanhar explicação do programa PHP -->
        <!-- Iniciar loop -->
        <h2>Lista com laço foreach (para cada)</h2>
        
            <ol>
                <?php
                        foreach($dias as $dia) {
                ?>
                            <li><?=$dia?></li>
                <?php           
                        }
                        
                ?>

            </ol>
            <h4>As variável $dias já estava declarada e carregada.</h4>

        </div>
    </div>
    
    <hr>
    <!-- _______________________________________________________________________________ -->

    
    <div class="alert alert-light" role="alert" >
        <h2><a href="">Exercícios</a></h2>
    </div>
    <h3>1) Crie um array com os meses do ano</h3>
    <h3>2) Usando um loop for, acesse e mostre os nomes dos meses dentro de uma lista ordenada</h3>
 
    <hr>
    <h2>Exercício meses</h2>

    <?php

        $meses = array("Janeiro", "Fevereiro", "Março", "Abril","Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro");
    ?>
    <ol>
        <?php
            // Linha abaixo permite melhorar a performace para grandes tabelas
            $quantidade = count($meses);

            for($k = 0; $k < $quantidade; $k++) {
            // for($k = 0; $k <= 11; $k++) {
        ?>
     
                <li><?=$meses[$k]?></li>
    

        <?php
            }
        ?>
    </ol>

    <!-- _______________________________________________________________________________ -->
    <hr>
    <h2>Agora utilizando o loop foreach (para cada)</h2>

    <ol>
        <?php
                foreach($meses as $mes) {
        ?>
                    <li><?=$mes?></li>
        <?php           
                }
                
        ?>

    </ol>
    <!-- _______________________________________________________________________________ -->
    <hr>
    <div class="alert alert-light" role="alert" id="ArrayAssociativo">
        <h2><a href="#topo">Array associativo</a></h2>
    </div>
    
    <h3>Para cada novo item da lista, "Uma chave" =>(recebe) "Um valor"</h3>
    <?php
        $clubes = [
            "Corinthians" => "Timão",
            "Palmeiras" => "Porco",
            "São Paulo" => "Tricolor",
            "Santos" => "Peixe",

        ];

        // foreach($clubes as $clube) {
            foreach($clubes as $clube => $apelido) {
            ?>
            <p>
                O <?=$clube?> é conhecido como: <?=$apelido?>
            </p>
    <?php
        }

    ?>

    <!-- _______________________________________________________________________________ -->
    <hr>
    <div class="alert alert-light" role="alert" id="MatrizAssociativa">
        <h2><a href="#topo">Matriz (Associativa) - Enxergue como uma planilha.</a></h2>
    </div>
    
    <h3>Quando adicionamos mais elementos no mesmo item, o Array passa a se chamar Matriz.</h3>
    <h3>Para exibir os dados da matriz, você informa a chave e o PHP recupera o valor.</h3>
    <?php
        // Construindo a matriz
        $alunos = [

                    [
                        "nome" => "Chaves",
                        "idade" => 8

                    ],
                    [
                        "nome" => "Chapolin",
                        "idade" => 20

                    ],
                    [
                        "nome" => "Chiquinha",
                        "idade" => 10

                    ]
                ];

        // Iniciando a leitura da matriz para exivir os valores de cada chave.
        foreach($alunos as $aluno){
    ?>
    <p> Nome: <?=$aluno['nome']?> </p>
    <p> Idade: <?=$aluno['idade']?> </p>
    <hr>

    <?php
        }
    ?>

    
    <!-- Rodapé -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2023 Sesi-Senai 1DE, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>

            
        </footer>
    </div>
</body>
</html>