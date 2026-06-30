<?php
//Crea chiave accesso (login)
function createLoginKey(string $email, string $password): string
{
    return $email . " " . $password;
    //es: retituir email@..|123..

}


// Cerca utente
//Scorre tutti gli utenti e verifica se  esiste o uguale

function trovaUtente(string $loginKey, array $utenti): ?array    // ?array -> restituisce un array ma se esiste o =
// string $loginKey = chiave di login da cercare
// array $utenti = lista di tutti gli utenti
{
    foreach ($utenti as $utente) {

        // Crea la chiave di login dell'utente corrente usando email e password
        $key = createLoginKey($utente["email"], $utente["password"]);

        // Controlla se la chiave ricevuta è uguale alla chiave appena creata  -> se ok -> restituisce tutto l'array dell'utente
        if ($loginKey === $key) {
            return $utente;
        }
    }
    return null;   // nessun utente trovato
}


// Gestire i ruoli con lo switch
function mostraRuolo(string $tipoUtente): void
{
    switch ($tipoUtente) {
        case "admin":
            echo "Login amministratore.";
            break;

        case "docente":
            echo "Login docente, gestione corso.";
            break;

        case "studente":
            echo "Login studente, area personale";
            break;

        default:
            echo "Ruolo non valido";
    }
}

//------------- function leggiUtenti dal file json-------------------
function leggiUtenti(string $file): array
{
    // Controlla se il file NON esiste
    if (!file_exists($file)) {
        return [];
    }
    // Legge tutto il contenuto del file JSON
    $contenuto = file_get_contents($file);

    // Converte il JSON in un array PHP
    // true = restituisce un array associativo invece di un oggetto
    $utenti = json_decode($contenuto, true);

    // Versione equivalente scritta in modo più lungo
    /*$valore = is_array($utenti);
    if(!$valore) []*/

    // Operatore ternario
    // Se $utenti è un array lo restituisce,
    // altrimenti restituisce un array vuoto
    return is_array($utenti) ? $utenti : [];
}


// --------------------- Crea cartella con file.json ----------------------
function creaFileJSON(string $cartella = "data", string $file = "utenti.json"): string
{
    // Controlla se la cartella NON esiste
    if (!is_dir($cartella)) {
        // Crea la cartella
        // 0777 = permessi
        // true = crea anche eventuali cartelle mancanti
        mkdir($cartella, 0777, true);
    }
    //percorso file
    // ex: data/utenti.json
    $path = $cartella . "/" . $file;

    // Controlla se il file NON esiste
    if (!file_exists($path)) {
        // Lo crea inserendo un array JSON vuoto
        file_put_contents($path, "[]");
    }
    // Restituisce il percorso del file
    return $path;
}

//----------------------salva utenti nel file --------------------

function salvaUtente(string $file, array $utenti): void
{
    // Converte l'array PHP in formato JSON
    $json = json_encode(
        // Array da convertire
        $utenti,
        // JSON leggibile e senza caratteri Unicode
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );
    // Scrive il JSON nel file
    file_put_contents($file, $json);
}
//----------------------controlla se l'email e gia presente --------------------
function emailEsistente(array $utenti, string $email): bool
{
    // Scorre tutti gli utenti
    foreach ($utenti as $utente) {
        // Confronta l'email dell'utente con quella inserita
        if ($utente["email"] === $email) {
            return true;
        }
    }
    return false;
}

// -------------------- Genera un nuovo ID incrementando l'ultimo ID presente --------------
function generaNuovoId(array $utenti): int
{
    // Se non ci sono utenti, il primo ID sarà 1
    if (empty($utenti)) {
        return 1;
    }

    // Prende l'ultimo utente dell'array
    $ultimoUtente = end($utenti);

    // Restituisce l'ultimo ID + 1
    return $ultimoUtente["utenteId"] + 1;
}

// -------------------creazione utenti ------------------------
function createUtenti(array $dati, int $id): array
{
    // Restituisce un array associativo
    return [
        "utenteId" => $id,
        // trim() elimina gli spazi all'inizio e alla fine
        "nome"     => trim($dati["nome"]),
        "cognome"  => trim($dati["cognome"]),
        "email"    => trim($dati["email"]),
        // Cifra la password
        // PASSWORD_DEFAULT usa l'algoritmo consigliato da PHP
        "password" => password_hash(
            $dati["password"],
            PASSWORD_DEFAULT
        ),
        "sesso"   => trim($dati["sesso"]),
        "dataNascita" => trim($dati["dataNascita"]),
        "citta" => trim($dati["citta"]),
        "nazionalita" => trim($dati["nazionalita"]),
        "ruolo" => $dati["ruolo"]
    ];
}
// ----------cerca utente per email-------------------
function trovaUtentePerEmail(array $utenti, string $email): ?array
{
    foreach ($utenti as $utente) {
        if (strtolower($utente["email"]) === strtolower($email)) {
            return $utente;
        }
    }

    return null;
}


// ----------cerca utente per email e password-------------------
function trovaUtentePerEmailEPass(string $email, string $password, array $utenti): ?array
{
    foreach ($utenti as $utente) {

        if (
            $utente["email"] === $email &&
            password_verify($password, $utente["password"])
        ) {
            return $utente;
        }
    }

    return null;
}
