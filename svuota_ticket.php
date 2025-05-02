<?php
// svuota ticket
$file = 'tickets.json';
file_put_contents($file, json_encode([], JSON_PRETTY_PRINT));
echo "Archivio svuotato.";
?>
