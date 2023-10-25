<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elaborazione Form PHP</title>
</head>
<body>
    <?php
    // controllo se i dati sono stati inviati al server tramite un modulo HTML con nomi di campo corrispondenti.
    if (isset($_POST['paragrafo']) && isset($_POST['badword'])) {

        // Ottenere il paragrafo e la parola da censurare dal modulo
        $paragrafo = $_POST['paragrafo'];

        // Ottenere la parola da censurare dal modulo
        $badword = $_POST['badword'];
        
        // Calcolare la lunghezza del paragrafo
        $lunghezza_paragrafo = strlen($paragrafo);

        // Sostituire tutte le occorrenze della parola da censurare con ***
        $paragrafo_censurato = str_ireplace($badword, '***', $paragrafo);
        
        // Stampare il paragrafo originale e la sua lunghezza
        echo "<p>Paragrafo Originale:</p>";
        echo "<p>$paragrafo</p>";
        echo "<p>Lunghezza del Paragrafo: $lunghezza_paragrafo caratteri</p>";

        // Stampare il paragrafo originale e la sua lunghezza
        echo "<p>Paragrafo Originale:</p>";
        echo "<p>$paragrafo</p>";
        echo "<p>Lunghezza del Paragrafo: $lunghezza_paragrafo caratteri</p>";
    }
    ?>
</body>
</html>
