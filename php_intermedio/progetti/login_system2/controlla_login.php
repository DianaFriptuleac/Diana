<?php
require_once "functions.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Accesso non consentito!");
}
$file = "data/utenti.json";
$utenti = leggiUtenti($file);

// quello che si riceve dal form
$email = trim($_POST["email"]) ?? "";
$password = trim($_POST["password"]) ?? "";

// cerca utente
$utente = trovaUtentePerEmail($utenti, $email);
if (!$utente) {
    die("Utente non trovato!");
}

// Verifica la password
if (!password_verify($password, $utente["password"])) {
    die("Password errata!");
}

// salvare utente nella sessione
$_SESSION["utente"] = $utente;

// reiderizare in base al ruolo
switch ($utente['ruolo']) {

    case 'admin':
        header('Location: admin.php');
        exit;   // usciamo

    case 'docente':
        header('Location: docente.php');
        exit;

    case 'studente':
        header('Location: studente.php');
        exit;

    default:
        header('Location: index.php');
        exit;
}
