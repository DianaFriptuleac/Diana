<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni</title>
    <style>
        body{
            background-color: #0f0337ab;
        }
    </style>

</head>

<body>
    <?php
    //Funzione che restituisce la lista studenti di tipo array
    function lista_studenti(): array
    {
        return [
            [
                "nome" => "Paolo",
                "cognome" => "Basile",
                "eta" => 26,
                "email" => "paolobasile@gmail.com",
                "telefono" => 325654585,
                "voti" => [28, 30, 27]
            ],
            [
                "nome" => "Diana",
                "cognome" => "Friptuleac",
                "eta" => 32,
                "email" => "dianaf@gmail.com",
                "telefono" => 325654585,
                "voti" => [27, 30, 26]

            ],
            [
                "nome" => "Giovanni",
                "cognome" => "Lombardi",
                "eta" => 21,
                "email" => "giovannilombardi005@gmail.com",
                "telefono" => 34343434343,
                "voti" => [25, 28, 30]

            ],
            [
                "nome" => "Ilaria",
                "cognome" => "Celentano",
                "eta" => 32,
                "email" => "ilaria.celentano1@gmail.com",
                "telefono" => 123456789,
                "voti" => [20, 30, 24]

            ],
            [
                "nome" => "Pamela",
                "cognome" => "Liberati",
                "eta" => 38,
                "email" => "pamelaliberati@gmail.com",
                "telefono" => 3212345433,
                "voti" => [28, 25, 26]

            ],
            [
                "nome" => "Anna",
                "cognome" => "Rossi",
                "eta" => 25,
                "email" => "annarossi@gmail.com",
                "telefono" => 3478546577,
                "voti" => [23, 25, 18,]
            ],
            [
                "nome" => "Marco",
                "cognome" => "Gulino",
                "eta" => 27,
                "email" => "marcogulino@gmail.com",
                "telefono" => 3214569870,
                "voti" => [27, 29, 30]
            ],
            [
                "nome" => "Paolo",
                "cognome" => "Mari",
                "eta" => 53,
                "email" => "paolo.mari@gmail.com",
                "telefono" => 3393339999,
                "voti" => [5, 4, 3,]
            ],
            [
                "nome" => "Alessia",
                "cognome" => "Pietrini",
                "eta" => 18,
                "email" => "pietrinialessia@gmail.com",
                "telefono" => 3214231421,
                "voti" => [28, 30, 12]
            ],
            [
                "nome" => "Alessio",
                "cognome" => "Nascari",
                "eta" => 24,
                "email" => "nascarialessio@gmail.com",
                "telefono" => 34214213,
                "voti" => [38, 7, 8]
            ],
            [
                "nome" => "Francesco",
                "cognome" => "Carmi",
                "eta" => 21,
                "email" => "carmifrancesco@libero.it",
                "telefono" => 3521321421,
                "voti" => [20, 3, 12]
            ],
            [
                "nome" => "Ludovica",
                "cognome" => "Cannabis",
                "eta" => 21,
                "email" => "cannabisludovicasparita@gmail.com",
                "telefono" => 6312421,
                "voti" => [60, 40, 80]
            ],
            [
                "nome" => "Fabio",
                "cognome" => "Cassarà",
                "eta" => 57,
                "email" => "fcassara2@gmail.com",
                "telefono" => 3331234567,
                "voti" => [9, 7, 10]
            ]
        ];
    };
        /* Funzione media voti -> calcola la media di uno studente
        parametri: 
        $voto -> array per tutti i voti


        :float -> fc. restituisce un decimale

    */
        function mediaVoti(array $voto): float
        {
            // array_sum() -> funzione integrata di PHP che serve a sommare tutti i valori numerici di un array
            $somma = array_sum($voto);

            // count() -> conta elementi
            // select count(voti) from studenti -> SQL
            $numeroVoti = count($voto);

            //restituisce la media
            return $somma / $numeroVoti;
        }
    


    /*------------------------------------ end php -------------------------------------------------->

    <!------------------------------------- FE ------------------------------------------------------*/

    /*
    Funzione generale card studenti
    Riceve un singolo studente e genera una card in html
    Parametro: $studente[] -> tipo: array associativo -> che contiene i dati dello $studente

    Restitisce una stringa html
  */
    function generaCardStudente(array $studente): string
    {
        //calcolo della media
        $media = mediaVoti($studente["voti"]);

        //Trasforma array voti in stringa
        // [8, 9, 10] => "8, 9, 10"

        $votiString = implode(", ", $studente["voti"]);  //implode -> serve a trasformare un array in una stringa.

        return "
      <div style =' padding: 15px;
                    border-radius: 8px;
                    font-family: Arial, Helvetica, sans-serif;
                    background-color: #0d011a;
                    border: 1px solid blue;
                    box-shadow: -2px 10px 25px rgba(239, 230, 248, 0.98);
                    text-align: center;
                    color: white'>
                    
                    <h2 style= 'color:white; border-bottom:1px solid blue'>{$studente['nome']} {$studente['cognome']}</h2>
                    <p>
                    <strong> Età: </strong>
                    {$studente['eta']}
                    </p>
                    <p>
                    <strong> Email: </strong>
                    {$studente['email']}
                    </p>
                    <p>
                    <strong> Telefono: </strong>
                    {$studente['telefono']}
                    </p>
                    <p>
                    <strong> Voti: </strong>
                    {$votiString}
                    </p>
                    <p>
                    <strong> Media voti: </strong>
                    " . number_format($media) . "
                    </p>
                    

                    </div>
        
        ";
    }

    // Funzione principale-------------------------------------
    //Richiama la funzione dichiarata prima
    $studenti = lista_studenti();

 // Css Grid
echo "<div style='display:grid; grid-template-columns:repeat(3, 1fr); gap:20px; max-width:1200px; margin:auto;'>";

/*
|--------------------------------------------------------------------------
| foreach
|--------------------------------------------------------------------------
| Scorre tutti gli elementi dell'array.
|
| Ad ogni ciclo:
| - prende uno studente
| - genera la card HTML
| - la stampa a schermo
|--------------------------------------------------------------------------
*/
foreach ($studenti as $studente) {

    echo generaCardStudente($studente);
}

// Chiusura del contenitore
echo "</div>";
   

    ?>

</body>

</html>