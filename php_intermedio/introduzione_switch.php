<?php
// Switch-> struttura di controllo condizionale

/* Sintassi base:
dichiatazione della variabile = 85;
   switch(richiamo la variabile)
   {
      case valore1:
        codice ---- es: echo(---) -> stampa o chiamata funzione
        break;   -> esce dalla condizione
      case valore2:
        codice ---- es: echo(---) -> stampa o chiamata un'altra funzione
        break;   -> esce dalla condizione
      case valore3:
        codice ---- es: echo(---) -> stampa o chiamata una terza funzione
        break;   -> esce dalla condizione

        default:  -> valore di default
   }
*/

/*
Funzionamento:
PHP fa questo processo:
1. prende la variabile
2. la contronta
3. quando trova una corrisponndenza -> esegue il blocco di codice
4. break -> ferma il ciclo
5. default -> se nessuna condizione corrisponde -> restituisce il valore di default
 */

function lunedi()
{
    echo "Oggi è lunedi.";
}

$giorno_settimana = "lunedi";
switch ($giorno_settimana) {
    case 'lunedi':
        lunedi();
        break;

    case 'martedi':
        //  if(){}   -> si puo metter anche un if/else
        echo "Oggi è martedi.";
        break;

    case 'mercoledi':
        echo "Oggi è mercoledi.";
        break;

    case 'giovedi':
        echo "Oggi è giovedi.";
        break;

    case 'venerdi':
        echo "Oggi è venerdi.";
        break;

    case 'sabato':
        echo "Oggi è sabato.";
        break;

    default:
        'Oggi è domenica.';
}
echo "<hr>";
//---------------------EX2 valutazione studenti--------------
$voto = "E";
switch ($voto) {
    case "A":
        echo "Eccellente. Studente promosso.";
        break;
    case "B":
        echo "Ottimo. Studente promosso";
        break;
    case "C":
        echo "Buono. Puoi migliorare.";
        break;
    case "D":
        echo "Sufficiente. Studia piu duramente";
        break;
    case "E":
    case "F":
        echo "Insufficiente. Non hai studiato abbastanza.";
        break;
    default:
        echo "Voto non valido";
}
echo "<hr>";
