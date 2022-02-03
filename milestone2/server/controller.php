<?php include __DIR__ . '/data.php';
header('Content-Type: application/json');

$discsFiltered = $discs;
// creo la variabile get per vedere tutte le carte
// faccio un check
if (isset($_GET['genre']) !== false) {
  $genre = $_GET['genre'];
  if ($genre === 'all') {
    $discsFiltered[] = $disc;
  } else {
    $discsFiltered = [];
    foreach ($discs as  $disc) {
      if ($disc['genre' === $genre]) {
        $discsFiltered[] = $disc;
      }
    }
  }
  echo json_encode([
    'results' => $discsFiltered,
    'length' => count($discs)
  ]); 
} else {
  echo json_encode([
    'error' => 'genere non selezionato',
  ]);
}


?>