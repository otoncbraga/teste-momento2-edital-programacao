<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
</head>

<body>
    <h1>Desafio 1</h1>
    <?php
		//Recebendo os dados do formulário
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

		//Verificando a existência da posição "SendProcessarDados" no vetor "$dados"
        if(!empty($dados['SendProcessarDados'])){
            unset($dados['SendProcessarDados']);
            $cont = 1;
			//Identificando quais elementos é o maior, o menor e salvando suas respectivas posições.
            foreach ($dados as $key => $val) {
                if ($cont == 1){
                    $maiorNumero = $val;
                    $posicaoMaiorValor = $key;
                    $menorNumero = $val;
                    $posicaoMenorValor = $key;
                }
                if($val > $maiorNumero){
                    $maiorNumero = $val;
                    $posicaoMaiorValor = $key;
                }
                if($val < $menorNumero){
                    $menorNumero = $val;
                    $posicaoMenorValor = $key;
                }
                $cont++;
            }

            echo "<br>O maior número é $maiorNumero, se encontra na posição $posicaoMaiorValor<br>";
            echo "O menor número é: $menorNumero, se encontra na posição $posicaoMenorValor<br><br>";

            echo "Ordenação crescente do vetor:<br>";
            sort($dados);
            foreach ($dados as $key => $val) {
                $ordenacao = $key + 1;
                echo "$ordenacao"."º: "." $val <br>";
            }

            echo "<br><br>";

        }
    
    ?>
    <form action="" method="POST">
        <div>
            <?php
                $valores = [];
                for ($i=0; $i <=5; $i++) {
                    $ordem = $i+1;
                    echo "<label for='valor'>Informe o valor $ordem:</label>";
                    echo "<input type='number' id='valor' name='$i' /><br>";
                }
            ?>
            <br>
            <input type="submit" value="Processar dados" name="SendProcessarDados" />
        </div>
    </form>

</body>

</html>