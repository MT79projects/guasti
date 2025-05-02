<?php
// Carica i ticket esistenti
$file = 'tickets.json';
$ticketData = json_decode(file_get_contents($file), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents("php://input"), true);
  $index = $data['index'];

  if (isset($ticketData[$index])) {
    // Rimuove il ticket dall'array
    array_splice($ticketData, $index, 1);

    // Rende la nuova lista di ticket nel file JSON
    file_put_contents($file, json_encode($ticketData, JSON_PRETTY_PRINT));

    echo json_encode(["success" => true]);
  } else {
    echo json_encode(["success" => false, "message" => "Ticket non trovato"]);
  }
}
?>
