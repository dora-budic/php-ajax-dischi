<?php
  include 'dati.php';
  $selectedArtist = $_GET['artist'];
  $filteredAlbums = [];

  for ($i=0; $i < count($albums); $i++) {
    if ($albums[$i]['author'] == $selectedArtist) {
      $filteredAlbums[] = $albums[$i];
    }
  }

  header('Content-Type: application/json');
  echo json_encode($filteredAlbums);
?>
