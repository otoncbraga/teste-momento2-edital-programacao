<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
</head>

<body>
    <h1>Desafio 2</h1>
    <?php

    //Criando a "matriz" de dados
    $matriz = [];

    //Preenchendo a matriz com a soma das linhas e colunas
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            $matriz[$linha][$coluna] = $linha + $coluna;
        }
    }
    //Imprimindo a matriz com os valores definidos no laço anterior
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            echo $matriz[$linha][$coluna] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        echo "<br/> \n";
    }
    ?>
</body>

</html>