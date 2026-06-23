<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esercizi php</title>
</head>

<body>
    <?php

    //----------------------------------------------if/else ---------------------------------------------
    //Var. inserite dall utente
    $nome_utente = "Martina";
    $cognome_utente = "Neri";
    $email = "nerimartina@gmail.com";
    $password = "mn123456";

    //Var. DB
    $nome_utente_db = "Martina";
    $cognome_utente_db = "Neri";
    $email_db = "nerimartina@gmail.com";
    $password_db = "mn123456";

    if ($email == $email_db && $password == $password_db) {
        echo "<h2>Accesso utente: " . $email_db . " autorizzato</h2>";
    } elseif ($email == $email_db) {
        echo "<h2>Email: " . $email_db . " trovata, password errata.</h2>";
    } else {
        echo "<h2>Email non registrata.</h2>";
    }
    echo "<hr>";

      //----------------------------------------------if/elseif/else ---------------------------------------------
    $totale_spesa = 120;  //euro
    $tipo_cliente = "Platinum";

    if ($tipo_cliente == "Platinum") {
        $totale_spesa_scontata = $totale_spesa - ($totale_spesa * 0.3);   //30% sconto
        echo "<h2> I clienti Gold hanno il diritto al 30% di scondo. 
    Il totale della spesa sarà: " . $totale_spesa_scontata . " 💶 </h2>";
    } elseif ($tipo_cliente == "Gold") {
        $totale_spesa_scontata = $totale_spesa - ($totale_spesa * 0.2);
        echo "<h2> I clienti Gold hanno il diritto al 20% di scondo. 
    Il totale della spesa sarà: " . $totale_spesa_scontata . " 💶 </h2>";
    } elseif ($tipo_cliente == "Silver") {
        $totale_spesa_scontata = $totale_spesa - ($totale_spesa * 0.1);
        echo "<h2> I clienti Gold hanno il diritto al 10% di scondo. 
    Il totale della spesa sarà: " . $totale_spesa_scontata . " 💶 </h2>";
    } else {
        echo "<h2> Cliente base. Totale spesa " . $totale_spesa . " 💶 </h2>";
    }
    echo "<hr>";

    //----------------------------------------------Ciclo_for ---------------------------------------------

     $lista_spesa = [
        "Uova",
        "Latte",
        "Burro",
        "Yogurt",
        "Carne",
        "Pesce",
        "Cipolle",
        "Aglio",
        "Zucchine",
        "Pomodori",
        "Olio",
        "Sale",
        "Biscotti",
        "Caffe",
        "Zucchero"
    ];
    $lista_spesa_completa = count($lista_spesa);

    for($i = 0; $i < $lista_spesa_completa; $i++){
        echo "<li> Lista spesa: " .$i . ": " .$lista_spesa[$i] . "</li>"; 
    }
    echo "<hr>";
    
    ?>
</body>

</html>