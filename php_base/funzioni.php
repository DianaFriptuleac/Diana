<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni php</title>
</head>

<body>

    <?php

    /*
function nomeFunction() {
echo "testo";
}

nomeFunzione()  -> andra ad esseguire la funzione
 */

    // Definizione della funzione "saluta" che ha due parametri di tipo stringa e deve restituire una stringa con -> :string

    use BcMath\Number;

    function saluta(string $nome, string $lingua = "it"): string
    {
        // match controlla il valore contenuto in $lingua
        return match ($lingua) {
            // Se $lingua vale "en"
            "en" => "Hello $nome",

            // Se $lingua vale "fr"
            "fr" => "Bonjour $nome",

            // Se $lingua vale "fr"
            "es" => "Hola $nome",

            // Se nessun caso precedente corrisponde
            default => "Ciao $nome"
        };
    }

    // Chiamata della funzione con due parametri
    echo saluta("Diana");          // Ciao Diana
    echo "<br>";
    echo saluta("Diana", "en");    // Hello Diana
    echo "<br>";


    //funzione che fa la somma di qualcosa
    function somma(int $nr_1, int $nr_2): int
    {
        return $nr_1 + $nr_2;
    }
    echo somma(553, 83);
    ?>
</body>

</html>