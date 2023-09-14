<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Modelo de operadores</title>

    <!-- Link para (Bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

    <!-- __________________________________________________________________________________ -->
    <!-- Tabela com exemplos de operadore matemáticos -->
    <h1>Modelo de operadores</h1>
    <div class="alert alert-primary" role="alert">
        <h3>Operadores aritméticos</h3>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
        <p><strong><u>EXEMPLO:<br>O programa PHP explica passo a passo a formula: $a + 3 * 4 + 5 * $b</u></strong></p>
            
                <?php
                    $a = 2;
                    $b  = 4;
                
                    echo 'Vamos calcular: $a + 3 * 4 + 5 * $b<br>';
                    echo "Resultado: ";
                    echo $a + 3 * 4 + 5 * $b;
                    echo "<br>Porque" . ' $a' . " vale $a <br>";
                    echo 'e $b vale 4 <br>'; 
                    echo "Primeira multiplicação: 3 x 4 == 12<br>";
                    echo 'Segunda multiplicação: 5 x 4 (que é o valor do $b) == 20<br>';
                    echo "Agora as somas: 2 + 12 + 20 é 34<br>";

                ?>
                
            
        </div>
        <div class="col">
            <p>
                <strong>
                    <u>EXERCÍCIO:<br>Criar aqui a mesma formula usando parêntesis assim: ($a + 3) * 4 + (5 * $b)</u>
                </strong>   

                    
                
            </p>
            
                
        </div>
    </div>

    <!-- __________________________________________________________________ -->
    <!-- Barra cinza vazia (separação) -->
    <div class="alert alert-light" role="alert"></div>

    <!-- __________________________________________________________________ -->
    <!-- Tabela com operadores lógicos -->

    <div class="alert alert-primary" role="alert">
        <h3>Operadores lógicos</h3>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
            <p><strong><u>EXEMPLO:<br>Tabela de operadores de atribuição</u></strong></p>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Operador</th>
                    <th scope="col">Exemplo</th>
                    <th scope="col">Equivalente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Adição</td>
                        <td>$a += $b</td>
                        <td>$a = $a + $b</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Subtração</td>
                        <td>$a -= $b</td>
                        <td>$a = $a - $b</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Multiplicação</td>
                        <td>$a *= $b</td>
                        <td>$a = $a * $b</td>
                    </tr>
                    
                    <tr>
                        <th scope="row">4</th>
                        <td>Divisão</td>
                        <td>$a /= $b</td>
                        <td>$a = $a / $b</td>
                    </tr>
    
                    <tr>
                        <th scope="row">5</th>
                        <td>Exponencição</td>
                        <td>$a ** $b</td>
                        <td>$a = $a ** $b ($a elevado a $b)</td>
                    </tr>
                </tbody>
            </table> 
        </div>

        <!-- Nesta div, dentro da tabela, o aluno irá fazer os códigos PHP conforme explicação -->
        <div class="col">
            <p><strong><u>EXERCÍCIO<br>Gerar em PHP a saída com o <strong>Novo valor</strong> após atribuição para cada operador</u></strong></p>
            
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Operador</th>
                        <th>Saída PHP</th>
                        <th>Valores das variáveis</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>+=</td>
                        <td>
                            <!-- Criar aqui o programa PHP #ue vai gerar a saída -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>
    
                    <tr>
                        <td>-=</td>
                        <td>
                            <!-- Criar aqui o programa PHP #ue vai gerar a saída -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>
    
                    <tr>
                        <td>*=</td>
                        <td>
                            <!-- Criar aqui o programa PHP #ue vai gerar a saída -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>
    
                    <tr>
                        <td>/=</td>
                        <td>
                            <!-- Criar aqui o programa PHP #ue vai gerar a saída -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>
    
                    <tr>
                    <tr>
                        <td>**=</td>
                        <td>
                            <!-- Criar aqui o programa PHP #ue vai gerar a saída -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>
                </tbody>                    
            </table>               
        </div>
    </div>

    <!-- __________________________________________________________________ -->
    <!-- Barra cinza vazia (separação) -->
    <div class="alert alert-light" role="alert"></div>

    <!-- __________________________________________________________________ -->
    <!-- Tabela com operadores de comparação -->

    <div class="alert alert-primary" role="alert">
        <h3>Operadores de comparação</h3>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
            <p><strong><u>EXEMPLO:<br>Tabela de operadores de comparação</u></strong></p>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Exemplo</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>$a == $b</td>
                        <td>Igual</td>
                        <td><strong>true</strong> se $a é igual a $b </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>$a === $b</td>
                        <td>Idêntico</td>
                        <td><strong>true</strong> se $a é igual a $b e eles são do mesmo tipo </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>$a != $b</td>
                        <td>Diferente</td>
                        <td><strong>true</strong> se $a é diferente de $b </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>$a <> $b</td>
                        <td>Diferente</td>
                        <td><strong>true</strong> se $a é diferente de $b </td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>$a !== $b</td>
                        <td>Não Idêntico</td>
                        <td><strong>true</strong> se $a não é igual a $b ou eles não são do mesmo tipo </td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>$a < $b</td>
                        <td>Menor que</td>
                        <td><strong>true</strong> se $a é menor que $b </td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>$a > $b</td>
                        <td>Maior que</td>
                        <td><strong>true</strong> se $a é maior que $b </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>$a <= $b</td>
                        <td>Menor ou igual</td>
                        <td><strong>true</strong> se $a é menor ou igual a $b </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>$a >= $b</td>
                        <td>Maior ou igual</td>
                        <td><strong>true</strong> se $a é maior ou igual a $b </td>
                    </tr>
                    
                </tbody>
            </table> 
        </div>

        <!-- Nesta div, dentro da tabela, o aluno irá fazer os códigos PHP conforme explicação -->
        <div class="col">
            <p><strong><u>EXERCÍCIO:<br>Gerar em PHP uma saída True (verdadeiro) ou False (falso) para cada operador</u></strong></p>
            
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Comparação</th>
                        <th>Saída PHP</th>
                        <th>Valores das variáveis</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Linha 1 -->
                    <tr>
                        <td>$a == $b</td>
                        <td>
                            <!-- Gerar aqui o programa PHP -->

                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>

                    <!-- Linha 2 -->
                    <tr>
                        <td>$a === $b</td>
                        <td>
                            <!-- Gerar aqui o programa PHP -->
                            
                        </td>
                        <td>$a recebe 10 e <br> $b recebe 5</td>
                    </tr>

                    <!-- Linha 3 -->
                    <tr>
                        <td>$a != $b</td>
                        <td>
                           <!-- Gerar aqui o programa PHP -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>

                    <!-- Linha 4 -->
                    <tr>
                        <td>$a <> $b</td>
                        <td>
                            <!-- Gerar aqui o programa PHP -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>

                    <!-- Linha 5 -->
                    <tr>
                        <td>$a !== $b</td>
                        <td>
                            <!-- Gerar aqui o programa PHP -->
                            
                        </td>
                        <td>$a recebe 10 e <br> $b recebe 5</td>
                    </tr>

                    <!-- Linha 6 -->
                    <tr>
                        <td>$a < $b</td>
                        <td>
                            <!-- Gerar aqui o programa PHP -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>

                    <!-- Linha 7 -->
                    <tr>
                        <td>$a > $b</td>
                        <td>
                            <!-- Gerar aqui o programa PHP -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>

                    <!-- Linha 8 -->
                    <tr>
                        <td>$a <= $b</td>
                        <td>
                            <!-- Gerar aqui o programa PHP -->
                            
                        </td>
                        <td>$a recebe 10 e <br> $b recebe 5</td>
                    </tr>

                    <!-- Linha 9 -->
                    <tr>
                        <td>$a >= $b</td>
                        <td>
                            <!-- Gerar aqui o programa PHP -->
                            
                        </td>
                        <td>$a recebe 10 e $b recebe 5</td>
                    </tr>
                </tbody>                    
            </table>               
        </div>
    </div>
</body>   
 