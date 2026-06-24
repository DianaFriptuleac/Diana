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

    echo "<hr>";

    //---------------------------------------------------------------------------------

    function somma_2(int $nr_1, int $nr_2): int
    {
        $total = $nr_1 + $nr_2;

        return $total;
    }
    echo somma_2(553, 83);
    echo "<hr>";

    //---------------------------------------------------------------------------------

    function somma_3(?int $nr_1, ?int $nr_2): int
    {
        if ($nr_1 === null || $nr_2 === null) {
            return 0;
        }

        return $nr_1 + $nr_2;
    }
    echo somma_3(553, null);
    echo "<hr>";

    //---------------------------------------------------------------------------------
    function somma_4(int $num1, int $num2): int
    {
        if ($num1 > 0 && $num2 > 0) {
            return $num1 + $num2;
        } elseif ($num1 == 0 && $num2 == 0) {
            return 0;
        } else {
            return -1;
        }
    }
    echo somma_4(10, 20);    // 30
    echo "<hr>";
    echo somma_4(0, 0);  // 0
    echo "<hr>";
    echo somma_4(-5, 20);    // -1
    echo "<hr>";
    ?>
</body>

</html>