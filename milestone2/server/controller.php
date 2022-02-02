<?php include_once __DIR__ . '/data.php';

// creo la variabile get per vedere tutte le carte
// faccio un check
if (isset($_GET['showing']) !== false) {
  $showing = $_GET['showing'];
  // se è uguale ad all restituisco tutto altrimenti niente
  if ($showing === 'all') {
    // trasfromo i miei data in formato json
    header('Content-Type: application/json');
    echo json_encode($discs); 
  }
}

?>