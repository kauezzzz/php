<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de decisão PHP</title>

    <!-- Link para (Bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <!-- CSS Interno para ser utilizado nas decisões -->
    <style>
        .ok {
            color:blue;
            font-weight: bold;
            font-size: 18px;
        }
        .repor {
            color:red;
            font-weight: bold;
            font-size: 18px;
        }

        .sem_marcador {
            list-style-type: none;
        }
    </style>
</head>
<body>
    
    <!-- Título da página -->
    <div class="container-fluid alert alert-primary" role="alert">
        <h1 id="topo">Estruturas de Decisão (Controle Condicional)</h1>
    </div>

    <!-- Barra de navegação com botões -->
    <nav class="navbar bg-body-tertiary">
        <form class="container-fluid justify-content-start">
            <a href="#topo">
                <button class="btn btn-outline-primary me-2" type="button">Simples</button></a>
            <a href="#composta">
                <button class="btn btn-outline-primary me-2" type="button">Composta</button></a>
            <a href="#encadeada">
                <button class="btn btn-outline-success me-2" type="button">Encadeada</button></a>
            <a href="#opção">
                <button class="btn btn-outline-success me-2" type="button">Switch/Case</button></a> 
        </form>
    </nav>
    <hr>
        
    <!-- ___________________________________________________________________ -->
    <div class="alert alert-light" role="alert" >
        <h2><a href="">Simples</a></h2>
    </div>
    
    <h4>&ensp;Modo 1 - Com chaves</h4> 
    <p>&emsp;if ( comparação condicional ) { comando caso a comparação seja verdadeira };</p>

    <h4>&ensp;Modo 2 - Sem chaves</h4>
    <p>&emsp;if ( comparação condicional ) comando caso a comparação seja verdadeira ;</p><br>

    <p>&nbsp;Usar o modo 2 somente quando realizar uma instrução simples</p><hr>
    <p>&nbsp;Criar um programa PHP que gere saídas nos dois modos simples explicados:</p>
    <ul>
        <li>Atribuir o valor 5 a uma variável</li>
        <li>Criar uma condicional <strong>if</strong> para verificar se a o valor da variável é maior que 1</li>
        <li>Exibir a resposta da condicional simples com o comando echo no modo 1</li>
        <li>Exibir a resposta da condicional simples com o comando echo no modo 2</li>
    </ul>

    <!-- Criar aqui seu programa PHP -->
    
    
    <hr>
    
    <!-- ___________________________________________________________________ -->
    
    <div class="alert alert-light" role="alert" id="composta">
        <h2><a href="#topo">Composta</a></h2>
    </div>
    
    <p>&nbsp;Também chamada de <strong>aninhada</strong>, ao usar if: </p>
    <ul>
        <li>Condição verdadeira, usar outro if</li>
        <li>Condição falsa, usar else</li>
    </ul>
    
    <br>
    <h4>&nbsp;if ( comparação ) {</h4>
    <h4>&emsp;comando para comparação verdadeira</h4>
    <h4>&emsp;Se necessário aninhar, usar if simples ou composto</h4>
    <h4>&nbsp;else {</h4>
    <h4>&emsp;comando para comparação falsa.</h4>
    <h4>&nbsp;}</h4>
    <hr>

    <p>&nbsp;Criar um programa PHP que gere saída no modo composto obedecendo a seguinte regra de negócio:</p>
    <ul>
        <li>Variáveis</li>
        <ol>
            <li>Produto: Ultrabook ASUS</li>
            <li>Estoque atual: 0</li>
            <li>Estoque mínimo: 14</li>
        </ol>
        <li>Exibir o produto em título tamanho h3</li>
        <li>Comparar estoque atual com estoque nínimo</li>
        <li>Para: estoque INSUFICIENTE</li>
        <ol>
            <li>exibir mensagem: É necessário comprar.</li>
            <li>Usar a classe "repor" do CSS interno</li>
            <li>exibir uma marca de URGENTE.</li>
        </ol>
        <li>Para: estoque SUFICIENTE </li>
        <ol>
            <li>Exibir mensagem: Estoque OK!</li>
            <li>Usar a classe "ok" do CSS Interno.</li>
        </ol>
    </ul>
    <hr>

    <!-- Criar aqui seu programa PHP -->

    
    <hr>

    <!-- ___________________________________________________________________ -->
    <div class="alert alert-light" role="alert" id="composta">
        <h2 id="encadeada"><a href="#topo">Encadeada</a></h2>
    </div>

    <p>&nbsp;Quando a regra tem mais que duas possibilidades como em uma lista de opções <strong>encadeamos</strong>, ao usar if: </p>
    <ul>
        <li>Primeira condição verdadeira, programar comando</li>
        <li>Segunda condição vendadeira, programar outro comando</li>
        <li>Terceira condição vendadeira, programar outro comando</li>
        <li>Condição falsa, Avisar usuário.</li>
    </ul>
    
    <br>
    <h4>&nbsp;if ( comparação ) {</h4>
    <h4>&emsp;comando para 1ª comparação verdadeira;</h4>
    <h4>&nbsp;elseif ( comparação ) {</h4>
    <h4>&emsp;comando para 2ª comparação verdadeira;</h4>
    <h4>&nbsp;elseif ( comparação ) {</h4>
    <h4>&emsp;comando para 3ª comparação verdadeira;</h4>
    <h4>&nbsp;else {</h4>
    <h4>&emsp;comando para comparação falsa.;</h4>
    <h4>&nbsp;}</h4>
    <hr>

    <p>&nbsp;Criar um programa PHP que gere saída no modo encadeado obedecendo a seguinte regra de negócio:</p>
    <ul>
        <li>Montar uma lista de opções em CÓDIGO COMENTADO com os seguintes itens:</li>
        <ol>
            <li>Esfiha</li>
            <li>Pastel</li>
            <li>Pizza</li>
        </ol>
        <ol type="a" start="24">
            <li>Opção inválida</li>
        </ol>
        <li>Criar uma variável para receber uma das opções da lista. Iniciar com uma delas.</li>
        <li>Montar uma estrutura encadeada que verifique qual a opção escolhida</li>
        <li>Exibir o nome do produto pedido conforme a opção escolhida na variável.</li>
    </ul>
    <hr>
    
    <!-- Criar aqui seu programa PHP -->
    
    <hr>

    <!-- ___________________________________________________________________ -->
    <div class="alert alert-light" role="alert" id="composta">
        <h2 id="opção"><a href="#topo">Switch/Case</a></h2>
    </div>

    <p>&nbsp;Outra forma de atender regras com mais que duas possibilidades é o <strong>Swith/Case</strong>. </p>
    <ul>
        <li>Comutar conforme o caso escolhido:</li>
        <ol>
            <li>Se escolheu 1: Atender primeira opção</li>
            <li>Se escolheu 2: Atender segunda opção</li>
            <li>Se escolheu 3: Atender terceira opção</li>
        </ol>
        <li class="sem_marcador">&emsp;Nenhuma das opções: Avisar usuário</li>
    </ul>
    
    <br>
    <h4>&nbsp;switch ( escolha dentro da variável ) {</h4>
    <h4>&emsp;case 1: comando para 1ª escolha; break;</h4>
    <h4>&emsp;case 2: comando para 2ª escolha; break;</h4>
    <h4>&emsp;case 3: comando para 3ª escolha; break;</h4>
    <h4>&emsp;default: avisar usuário; break;</h4>
    <h4>&nbsp;}</h4>
    <h4>&nbsp;exibir informação conforme opção escolhida.</h4>
    <hr>

    <p>&nbsp;Criar um programa PHP que gere saída usando Swith/Case adaptando a regra de negócio do modo encadeado:</p>

    <hr>

    <!-- Criar aqui seu programa PHP -->
    
    
    <!-- Rodapé -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2023 Sesi-Senai 1DE, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#topo" class="nav-link px-2 text-muted">Simples</a></li>
            <li class="nav-item"><a href="#composta" class="nav-link px-2 text-muted">Composta</a></li>
            <li class="nav-item"><a href="#encadeada" class="nav-link px-2 text-muted">Encadeada</a></li>
            <li class="nav-item"><a href="#opção" class="nav-link px-2 text-muted">Switch/Case</a></li>
            </ul>
        </footer>
    </div>
</body>
</html>