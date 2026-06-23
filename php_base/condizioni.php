<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condizioni php</title>
</head>

<body>


    <?php
    // =======================================================================================================
    // CONDIZIONI IF / ELSE
    // =======================================================================================================

    // Le condizioni servono per eseguire codice solo se qualcosa è vero
    /*$eta = 32;

if ($eta >= 18) {
    echo "Sei maggiorenne <br>";
} else {
    echo "Sei minorenne <br>";
}
*/

    //=========================================================================================================
    // $eta_db = 45;
    // $eta_utente = 45;

    // if($eta_utente == $eta_db){
    //     echo "<h1>Persona selezionata 🎊</h1>";
    //     echo "<p>Lorem ipsum dolor sit amet consectetur
    //      adipisicing elit. Quos ipsa vel id placeat obcaecati officia aliquam 
    //      illum eius ut distinctio. Expedita soluta quam exercitationem et distinctio 
    //      facilis iusto alias possimus?</p>";
    // } else {
    //     echo "<i>Hai sbagliato ⚠️⚠️⚠️⚠️</i>";
    // }
    /*

// =========================================================================================================
// IF / ELSEIF / ELSE
// =========================================================================================================

$voto = 8;

if ($voto >= 9) {
    echo "Voto ottimo <br>";
} elseif ($voto >= 6) {
    echo "Voto sufficiente <br>";
} else {
    echo "Voto insufficiente <br>";
}
*/
    $eta_utente = 15;
    $eta_min = 18;

    if ($eta_utente >= $eta_min) {
        echo "<h2>Aquisto autorizzato. Procedi al pagamento 💰</h2>";
    } else {
        $anni_mancanti = $eta_min - $eta_utente;
        echo "<h2>Non hai il permesso di aquistare. Ti mancano " . $anni_mancanti . " anni</h2>";
    }

    $totale_spesa = 120;  //euro
    $tipo_cliente = "Gold";


    if ($tipo_cliente == "Gold") {
        $totale_spesa_scontata = $totale_spesa - ($totale_spesa * 0.2);   //20% sconto
        echo "<h2> I clienti Gold hanno il diritto al 20% di scondo. 
    Il totale della spesa sarà: " . $totale_spesa_scontata . " euro </h2>";
    } else {
        echo "<h2> Cliente base. Totale spesa " . $totale_spesa . " euro </h2>";
    }

    // =========================================================================================================
    // CONDIZIONE CON STRINGHE
    // =========================================================================================================
    $nome = "Diana";

if ($nome == "Diana") {
    echo "Benvenuta Diana <br>";
}


// ===============================
// OPERATORI LOGICI
// ===============================

// && significa AND: entrambe le condizioni devono essere vere
$haPatente = true;

if ($eta >= 18 && $haPatente == true) {
    echo "Puoi guidare <br>";
}

// || significa OR: basta che una condizione sia vera
$admin = false;
$vip = true;

if ($admin || $vip) {
    echo "Accesso speciale consentito <br>";
}

// ! significa NOT: inverte true/false
$utenteAttivo = false;

if (!$utenteAttivo) {
    echo "Utente non attivo <br>";
}

/*
// ===============================
// SWITCH
// ===============================

// switch si usa quando abbiamo più casi possibili

$giorno = 2;

switch ($giorno) {
    case 1:
        echo "Lunedì <br>";
        break;

    case 2:
        echo "Martedì <br>";
        break;

    case 3:
        echo "Mercoledì <br>";
        break;

    default:
        echo "Giorno non valido <br>";
        break;
}


// ===============================
// ESEMPIO FINALE
// ===============================

$nomeCorso = "Full-Stack Developer con PHP e Laravel";
$cognome = "Friptuleac";

echo "<br>";

echo "Salve, mi chiamo " . $nome . " " . $cognome . 
     ", sono di Reggio Emilia e ho " . $eta . " anni. <br>";

echo "Conosco già linguaggi come Java, JavaScript ecc. e ho deciso di frequentare il " . 
     $nomeCorso . " per ampliare le mie conoscenze e competenze.";

     */
    ?>
</body>

</html>