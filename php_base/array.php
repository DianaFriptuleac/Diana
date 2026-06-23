<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $studenti = [
        "Francesco",
        "Luana",
        "Annalisa",
        "Marco",
        "Paolo",
        "Davide",
        "Carlo",
        "Daniele"
    ];

    // ----------------------la funzione count() ci permette di contare gli elementi all'interno dell'array studenti
    $totale_studenti = count($studenti);
    echo "Nr. totale studenti: " . $totale_studenti .  "<br>";

    // stampare l'ultimo elemento del record
    echo "L'ultimo è " . $studenti[7] . "<br>";
    echo "Lo studente è " . $studenti[4] . "<br>";
    echo "<hr>";

    // -------------------- aggiungere un elemento in coda all'array
    array_push($studenti, "Diana");
    print_r($studenti);   // risultato:
    // Array ( [0] => Francesco [1] => Luana [2] => Annalisa [3] => Marco [4] => 
    //Paolo [5] => Davide [6] => Carlo [7] => Daniele [8] => Diana
    echo "<br>";
    $studenti[] = "Alina";
    echo "<b> Studente aggiunto <b> " . $studenti[8] . "<br>";

    $new_totale_studenti = count($studenti);
    echo "Nr. totale studenti: " . $new_totale_studenti .  "<br>";

    echo "<br>";

    //-------------modificare uno studente --------------
    $studenti[2] = "Maria";
    $studenti[4] = "Luca";

    echo "<b>[Update]<b> I dati sono stati aggiornati <br>";
    echo "Ora lo studente all'indice 2 è: <br> " . $studenti[2] . "<br>";
    echo "Ora lo studente all'indice 4 è: <br> " . $studenti[4] . "<br>";
    print_r($studenti);
    echo "<hr>";

    // ----------- eliminare un elemento dall'array - elimina Maria
    // array_splice - gli altri elementi scalano 
    echo "Lo studente da eliminare è " . $studenti[2] . "<br>";
    array_splice($studenti, 2, 1);   //$studenti  -> array, 2 -> nr. indice da eliminare, 1 -> nr elementi da eliminare
    echo "Nr. totale studenti: " . count($studenti) .  "<br>";
    echo "Il nuovo studente all'indice 2 è " . $studenti[2] . "<br>";

    echo "<hr>";

    ?>
</body>

</html>