<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo foreach in php</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e9f1f6;
            color: #2d3748;
        }

        .main {
            margin: 20px;
        }
        h1{
            text-align: center;
        }

        .box_1,
        .box_2 {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px rgba(0, 0, 0, 0.5);
            max-width: 80%;
            margin: 20px auto;
        }

        .box_1 h3,
        .box_2 h3 {
            color: #061d44;
            border-bottom: 1px solid black;
            padding-bottom: 8px;
        }

        .studenti-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .box_studenti {
            background-color: #e9f1f6;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(1, 55, 19, 0.5);
            margin-bottom: 20px;
            max-width: 500px;
            border-left: 5px solid green;
        }
    </style>
</head>

<body>
    <div class="main">
        <h1>Ciclo <b><i>Foreach</i></b> in php</h1>
        <div class="box_1">
            <h3>Lettura chiave e valore ex:1 </h3>
            <ul>
                <?php
                $profile_studente = [
                    "Nome" => "Luana",         //dictionary: chiave e valore "Nome" => "Diana"
                    "Corso" => "Php Full-Stack",
                    "Stato" => "Iscritto",
                    "Voto Medio" => 9
                ];

                // Il foreach mappa la chiave in $proprietà e il contenuto in $stato
                foreach ($profile_studente as $proprieta => $stato) {
                    echo "<li>" . $proprieta . ": <strong>" . $stato . "</strong></li>";
                }
                /*foreach ($array as $chiave => $valore)
    La variabile prima di => riceve sempre la chiave
    La variabile dopo => riceve sempre il valore
    Quindi $proprieta => $stato si puo chiamare anche $pippo => $pluto -> funzionerà cmq.


    Se serve solo il valore:
    foreach ($profile_studente as $valore) {
    echo $valore . "<br>"; 

    Output:    Luana
               Php Full-Stack
               Iscritto
               9
}

*/
                ?>

            </ul>
        </div>

<!---------------------- Ex 2 ---------------------->

        <div class="box_2">
            <h3>Lettura chiave e valore ex:2 </h3>
            <div class="studenti-container">

                <?php
                $profile_studenti = [
                    [

                        "Nome" => "Luana",
                        "Corso" => "Php Full-Stack",
                        "Stato" => "Iscritto",
                        "Voto Medio" => 9
                    ],
                    [

                        "Nome" => "Marco",
                        "Corso" => "Php Full-Stack",
                        "Stato" => "Iscritto",
                        "Voto Medio" => 8
                    ],
                    [

                        "Nome" => "Alina",
                        "Corso" => "Php Full-Stack",
                        "Stato" => "Iscritto",
                        "Voto Medio" => 7
                    ],
                    [

                        "Nome" => "Mario",
                        "Corso" => "Php Full-Stack",
                        "Stato" => "Iscritto",
                        "Voto Medio" => 7
                    ],
                    [

                        "Nome" => "Alice",
                        "Corso" => "Php Full-Stack",
                        "Stato" => "Iscritto",
                        "Voto Medio" => 8
                    ],
                    [

                        "Nome" => "Diana",
                        "Corso" => "Php Full-Stack",
                        "Stato" => "Iscritto",
                        "Voto Medio" => 9
                    ],

                ];

                // Foreach annidato
                foreach ($profile_studenti as $studente) {
                    echo '<div class = "box_studenti">';
                    // se la proprieta e uguale al Nome
                    echo "<h3>Profilo di: " . $studente["Nome"] . " </h3>";
                    echo "<ul>";

                    foreach ($studente as $proprieta => $valore) {
                        if ($proprieta != "Nome") {
                            echo "<li>" . $proprieta . ": <strong>" . $valore . "</strong></li>";
                        }
                    }
                    echo "</ul>";
                    echo "</div>";
                }

                ?>
            </div>

        </div>

    </div>

</body>

</html>