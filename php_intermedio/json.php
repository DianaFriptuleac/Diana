<?php
//File JSON serve per salvare e scambiare dati
// L'array rappresenta un utente con i suoi dati.
// Le chiavi ("nome", "cognome", ecc.) diventeranno le proprietà del JSON.
$utente = [
    "atletaId" => 30,
    "nome" => "Laura",
    "cognome" => "Caruso",
    "sesso" => 'F',
    "dataNascita" => "1987/02/23",
    "citta" =>  "Ferrara",
    "nazionalita" => "Italiana"
];

//Converte array in json
// json_encode() trasforma un array PHP in una stringa JSON.
// Esempio:
//
// {
//   "atletaId":30,
//   "nome":"Laura",
//   ...
// }
$jsonAPI = json_encode($utente);


// PERCORSO DEL FILE DA CREARE
$cartella = "data";          // Nome della cartella dove verrà salvato il file JSON.

// Costruzione del percorso completo del file.
// Il risultato sarà: data/utenti.json
$path = $cartella . "/utenti.json";


// CONTROLLO SE LA CARTELLA ESISTE
// is_dir() controlla se la cartella "data" esiste già.
// Se non esiste -> mkdir() crea la cartella.
// Il permesso 0777 indica permessi completi
// il parametro true permettono di creare anche le cartelle annidate/mancanti
if (!is_dir($cartella)) {
    mkdir($cartella, 0777, true);
}

// CONTROLLO SE IL FILE JSON ESISTE
//Se non esiste lo crea e scrive un array JSON vuoto
// file_exists() verifica se il file utenti.json esiste.
if (!file_exists($path)) {

// Se il file non esiste viene creato.

    // Viene scritto [] che rappresenta
    // un array JSON vuoto.

    file_put_contents($path, "[]");
}

//Salvataggio nel file di utenti.json
// file_put_contents() apre il file
// e scrive il contenuto della variabile $jsonAPI.

// Se il file esiste già, il contenuto precedente viene completamente sostituito.
file_put_contents($path, $jsonAPI);
echo "<h5>Il salvataggio è andata a buon fine</h5>";


// Mostra il JSON creato
 echo "<h3>JSON</h3>";
 echo ($jsonAPI);

// CONVERTE DA JSON IN ARRAY
// json_decode() fa l'operazione opposta
// true significa: "restituisci un array associativo" invece di un oggetto PHP.

 $arrayPhp = json_decode($jsonAPI, true);

 echo "<h3>ARRAY PHP</h3>";

 print_r($arrayPhp);
