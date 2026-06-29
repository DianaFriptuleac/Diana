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
