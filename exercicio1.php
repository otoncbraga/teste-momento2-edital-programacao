<?

define("TAM", 6);

$numbers = array();
$index_max;
$index_min;

for ($i = 0; $i < TAM; $i++) {
  echo "Digite o número da posição $i: ";

  $numbers[$i] = intval(fgets(STDIN));

  if ($i == 0) {
    $index_max = $i;
    $index_min = $i;
  } else if ($numbers[$i] > $numbers[$index_max]) {
    $index_max = $i;
  } else if ($numbers[$i] < $numbers[$index_min]) {
    $index_min = $i;
  }
}

echo "Este é o maior valor: ".$numbers[$index_max]." Ele encontra-se na posição: ".$index_max."\n";
echo "Este é o menor valor: ".$numbers[$index_min]." Ele encontra-se na posição: ".$index_min."\n";

rsort($numbers);

echo implode("\n", $numbers);
