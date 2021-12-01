<?php
require_once "../data/albums.php";
//con il DIR non funziona

header("Content-Type: application/json");

echo json_encode([
  "albumList" => $albums
]);
?>