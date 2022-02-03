<?php include_once __DIR__ . '/data.php';
header('Content-Type: application/json');

$discsFiltered = $discs;
// creo la variabile get per vedere tutte le carte
// faccio un check
if (isset($_GET['genre']) !== false) {
  $genre = $_GET['genre'];
  // se è uguale ad all restituisco tutto altrimenti niente
  foreach ($discs as $key => $disc) {
    # code...
    if ($disc['genre' === $genre]) {
      $discsFiltered[] = $disc;
    }
  }

}

echo json_encode([
  'results' => $discsFiltered,
  'length' => count($discs)
]); 

?>