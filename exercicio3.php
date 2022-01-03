<?

define("TAM_X", 3);
define("TAM_Y", 2);

function read_matrix()
{
  $matriz = array();

  for ($i = 0; $i < TAM_X; $i++) {
    $matriz[$i] = array();

    for ($j = 0; $j < TAM_Y; $j++) {
      echo "Digite o número da posição $i,$j: ";

      $matriz[$i][$j] = intval(fgets(STDIN));
    }
  }

  return $matriz;
}

function calc_matrizes($matriz_a, $matriz_b)
{
  $soma_matriz =  array();
  
  for ($i = 0; $i < count($matriz_a); $i++) {
    $soma_matriz[$i] =  array();

    for ($j = 0; $j < count($matriz_a[$i]); $j++) {
      $soma_matriz[$i][$j] = $matriz_a[$i][$j] + $matriz_b[$i][$j];
    }
  }

  return $soma_matriz;
}

function imprime_matriz($matriz, $titul_matriz) {
  echo "$titul_matriz\n";
  
  for ($i = 0; $i < count($matriz); $i++) {
    echo implode(", ", $matriz[$i])."\n";
  }

  echo "\n";
}

$matriz_a = read_matrix();
$matriz_b = read_matrix();
$matriz_c = calc_matrizes($matriz_a, $matriz_b);

imprime_matriz($matriz_a, "Matriz A");
imprime_matriz($matriz_b, "Matriz B");
imprime_matriz($matriz_c, "Matriz C");
