<?php
//require_once -> serve a caricare il contenuto di un altro file PHP
//require_once "utenti.php";
require_once "functions.php";

// include -> file html
include "header.php";

// POST
// Il metodo della richiesta è esattamente la stringa POST?
// Esegui questo codice solo se la pagina è stata aperta inviando il form
if ($_SERVER["REQUEST_METHOD"] === "POST") {


    // dati form
    //name="email" → viene letto con $_POST["email"]
    //name="password" → viene letto con $_POST["password"]
    $email = $_POST["email"] ?? "";      //ternary operator
    $password = $_POST["password"] ?? "";

    // $nome = $valore ? true : false;     -> es. ternary

    // creazione chiave login
    $loginKey = createLoginKey($email, $password);
    // ricerca utente nel DB
    //$utente = trovaUtente($loginKey, getUtenti());
    $file = creaFileJSON();
    $utente = leggiUtenti($file);

    echo "<h2>Risultato Login</h2>";



    if ($utente) {
        echo
        // Inizio del codice JavaScript
        " <script>
           // Mostra un popup con SweetAlert2
            Swal.fire({
                icon: 'success',

                //titolo popup
                title: 'Acesso effettuato',
                text: 'Benvenuto {$utente['email']}',

                //testo sul btn del popup
                confirmButtonText: 'Continua'

             // Quando l'utente clicca sul pulsante 'Continua'
            }).then(() => {

            // Controlla il ruolo dell'utente
    switch ('{$utente['ruolo']}') {

    //  // Se il ruolo è admin
        case 'admin':

            // Vai alla pagina admin.php
           window.location.href = 'admin.php';
            break;

        case 'docente':
            window.location.href = 'docente.php';
            break;

        case 'studente':
           window.location.href = 'studente.php';
            break;

        default:
            window.location.href = 'index.php';
    }
});
    </script>";
    } else {
        echo  " <script> 
        Swal.fire({
                icon: 'error',
                title: 'Acesso negato',
                text: 'Verifica password',
                confirmButtonText: 'Riprova'
            }).then(() => {
            window.location.href = 'index.php';
            });
            </script>";
    }
}
