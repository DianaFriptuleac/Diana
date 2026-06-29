<?php
// =========================
// COMMENTI IN PHP
// =========================

// Commento su una riga

/*
   Commento
   su più righe
*/

// =========================
// STAMPA A VIDEO con echo
// =========================

echo "Benvenuti nel corso Full-Stack Developer con PHP e Laravel <br>";

echo "Il mio primo codice in PHP <br><br>";


// =========================
// VARIABILI
// =========================

// Stringa (testo)
$nome = "Diana";

// Intero (numero senza decimali)
$eta = 32;

// Float / Double (numero con decimali)
$altezza = 1.68;

// Boolean (vero o falso)
$studente = true;

// Array
$linguaggi = ["Java", "JavaScript", "PHP", "Laravel"];

// Null (nessun valore)
$citta = null;


// =========================
// STAMPA DELLE VARIABILI
// =========================

echo "Nome: " . $nome . "<br>";

echo "Età: " . $eta . "<br>";

echo "Altezza: " . $altezza . "<br>";

echo "Studente: " . $studente . "<br>";

echo "Primo linguaggio: " . $linguaggi[0] . "<br>";

echo "Città: ";
var_dump($citta);

echo "<br><br>";


// =========================
// CONCATENAZIONE
// =========================

$cognome = "Friptuleac";

echo "Mi chiamo " . $nome . " " . $cognome . "<br>";


// =========================
// VAR_DUMP una funzione di PHP che serve per mostrare il contenuto di una variabile e il suo tipo di dato.
// =========================

echo "<h3>Controllo tipo variabili</h3>";

var_dump($nome);
echo "<br>";

var_dump($eta);
echo "<br>";

var_dump($altezza);
echo "<br>";

var_dump($studente);
echo "<br>";

var_dump($linguaggi);
echo "<br>";
