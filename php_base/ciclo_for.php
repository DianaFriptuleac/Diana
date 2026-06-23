<?php
    $studenti = [
        "Francesco",
        "Luana",
        "Annalisa",
        "Marco",
        "Paolo",
        "Davide",
        "Carlo",
        "Daniele",
        "Fabio",
        "Luca"
    ];

   // $i = $i + 1;
    $totale_studenti = count($studenti);

for ($i = 0; $i < $totale_studenti; $i++ ){
    echo "<li> Studente in posizione " . $i . ": " .$studenti[$i] . " </li> ";
   // echo $studenti[$i] . "<br>";
}
echo "<hr>";


?>