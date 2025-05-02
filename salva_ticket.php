<?php
// salvataggio ticket
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ticket = array(
        'ticket' => $_POST['ticket_number'],
        'impianto' => $_POST['title'],
        'tipologia' => $_POST['tipologia'],
        'cognome' => $_POST['cognome'],
        'nome' => $_POST['nome'],
        'azienda' => $_POST['azienda'],
        'telefono' => $_POST['telefono'],
        'citta' => $_POST['citta'],
        'provincia' => $_POST['provincia'],
        'cap' => $_POST['cap'],
        'via' => $_POST['via'],
        'civico' => $_POST['civico'],
        'email' => $_POST['email'],
        'descrizione' => $_POST['descrizione'],
        'timestamp' => $_POST['timestamp'],
    );
    
    $file = 'tickets.json';
    $tickets = json_decode(file_get_contents($file), true);
    $tickets[] = $ticket;
    file_put_contents($file, json_encode($tickets, JSON_PRETTY_PRINT));

    echo 'OK';
}
?>
