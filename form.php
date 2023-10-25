<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form per Censura Badwords</title>
</head>
<body>

    <h1>Censura Badwords</h1>

    <!-- Modulo per l'input dell'utente -->
    <form action="process.php" method="post">
        <!-- Campo per l'inserimento del paragrafo -->
        <label for="paragrafo">Inserisci il paragrafo:</label>
        <textarea name="paragrafo" id="paragrafo" rows="5" cols="40"></textarea><br>

        <!-- Campo per l'inserimento della parola da censurare -->
        <label for="badword">Parola da censurare:</label>
        <input type="text" name="badword" id="badword"><br>

        <!-- Pulsante di invio del modulo -->
        <input type="submit" value="Censura">

    </form>

</body>
</html>