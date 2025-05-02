<?php
header('Content-Type: application/json');

$filename = 'tickets.json';

if (file_exists($filename)) {
    // Leggi il file JSON
    $json = file_get_contents($filename);
    echo $json;
} else {
    echo json_encode([]);  // Restituisci array vuoto se il file non esiste
}
?>
