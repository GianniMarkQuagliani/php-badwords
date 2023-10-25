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

        // Ottenere il paragrafo da censurare dal modulo
        $paragrafo = $_POST['paragrafo'];

        // Calcolare la lunghezza del paragrafo
        $lunghezza_paragrafo = strlen($paragrafo);
        
    } 
    ?>
</body>
</html>
