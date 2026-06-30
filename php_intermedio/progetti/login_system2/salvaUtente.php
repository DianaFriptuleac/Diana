<?php
require_once "functions.php";

// Verifica se la richiesta NON è di tipo POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Accesso non consentito.");
}

// Percorso della cartella e del file JSON
$cartella = "data";
$file = $cartella . "/utenti.json";

// Se la cartella non esiste, la crea
if (!is_dir($cartella)) {
    mkdir($cartella, 0777, true);
}

// Se il file JSON non esiste, lo crea con un array vuoto
if (!file_exists($file)) {
    file_put_contents($file, "[]");
}

// Legge gli utenti già presenti nel file
$utenti = leggiUtenti($file);
if (emailEsistente($utenti, $_POST["email"])) {
    die("Email già registrata.");    // die-> interrompere immediatamente l'esecuzione dello script
}

// generare id
$id = generaNuovoId($utenti);
$nuovoUtente = createUtenti($_POST, $id);
$utenti[] = $nuovoUtente;
salvaUtente($file, $utenti);
echo "Registrazione completata.";
?>