<?php
include "header.php";
require_once "db.php";
require_once "functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    $key = createKey($email, $password);
    $user = searchUser($key, getUsers());

    echo "<h2>Risultato Login</h2>";
    if ($user) {
        echo
        // Inizio del codice JavaScript
        " <script>
           // Mostra un popup con SweetAlert2
            Swal.fire({
                icon: 'success',

                //titolo popup
                title: 'Acesso effettuato',
                text: 'Benvenuto {$user['email']}',

                //testo sul btn del popup
                confirmButtonText: 'Continua'

             // Quando l'utente clicca sul pulsante 'Continua'
            }).then(() => {

            // Controlla il ruolo dell'utente
    switch ('{$user['ruolo']}') {

    //  // Se il ruolo è admin
        case 'admin':

            // Vai alla pagina admin.php
           window.location.href = 'admin.php';
            break;

        case 'user':
           window.location.href = 'user.php';
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
