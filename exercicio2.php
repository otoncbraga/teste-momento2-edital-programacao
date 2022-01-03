<?

define("TAM", 3);

$matriz= array();

for ($l = 0; $l < TAM; $l++) {
  $matriz[$l] = array();

  for ($c = 0; $c < TAM; $c++) {
    $matriz[$l][$c] = $l  + $c;
  }

  echo implode(', ', $matriz[$l]) . "\n";
}
