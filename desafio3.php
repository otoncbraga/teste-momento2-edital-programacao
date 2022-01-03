<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
</head>

<body>
    <h1>Desafio 3</h1>
    <?php

    //Criando as "matrizes" A, B e C
    $matrizA = [];
    $matrizB = [];
    $matrizC = [];

    //Preenchendo as matrizes A e B com valores aleatórios de 1 a 100
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 2; $coluna++) {
            $matrizA[$linha][$coluna] = rand(1,100);
            $matrizB[$linha][$coluna] = rand(1,100);
        }
    }
    //Preenchendo a matriz C com os valores da matriz A e matriz B 
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 2; $coluna++) {
            $matrizC[$linha][$coluna] = $matrizA[$linha][$coluna] + $matrizB[$linha][$coluna]; 
        }
    }

    //Imprimindo a matriz A
    echo "Matriz A <br/><br/>";
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 2; $coluna++) {
            echo $matrizA[$linha][$coluna] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        echo "<br/> \n";
    }
    echo "<br/>";

    //Imprimindo a matriz B
    echo "Matriz B <br/><br/>";
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 2; $coluna++) {
            echo $matrizB[$linha][$coluna] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        echo "<br/>\n";
    }
    echo "<br/>";

    //Imprimindo a matriz C
    echo "Matriz C <br/><br/>";
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 2; $coluna++) {
            echo $matrizC[$linha][$coluna] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        echo "<br/> \n";
    }
    ?>
</body>

</html>