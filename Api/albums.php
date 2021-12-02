<?php
require_once "../data/albums.php";
//spiegazione DIR lezione 02/12/2021 nella prima mezz'ora

header("Content-Type: application/json");

echo json_encode([
  "albumList" => $albums
]);
?>