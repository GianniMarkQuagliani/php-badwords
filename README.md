Title
===
Abstract:xxx
## Papar Information
- Title:  `PHP Badwords`
- Authors:  `Gianni`

## Install & Dependence
- PHP
- MAMP

## Directory Hierarchy
```
|—— index.php
```

# Ragionamento:
A) Ho creato un file chiamato form.php:
- Questo è il file del form in cui gli utenti inseriscono i dati. È una pagina HTML con un semplice modulo.
- Il modulo contiene due campi: uno per il "paragrafo" e un altro per la "parola da censurare".
Utilizzo il tag <form> con un metodo "POST" per inviare i dati a "process.php".

----------------------------------------------------------------------------------------------------

B) Ho creato un file chiamato process.php:
- L'utente inserisce un paragrafo e specifica una parola da censurare.
- Quando l'utente fa clic su "Censura", i dati vengono inviati a "process.php" per l'elaborazione.
- Ho usato if (isset($_POST['paragrafo']) && isset($_POST['badword'])) { per controllare se i dati sono stati inviati al server tramite un modulo HTML con nomi di campo corrispondenti.
- Ho usato strlen($paragrafo) per calcolare la lunghezza del paragrafo originale.
- Ho usato str_ireplace() per sostituire tutte le occorrenze della parola da censurare (contenuta in $badword) con '***', creando così una versione censurata del paragrafo che è assegnata a $paragrafo_censurato.
- Poi li stampo tutti per vedere il risultato
- Se i dati non sono stati inviati correttamente, viene eseguito il blocco else che stampa il messaggio "I dati non sono stati inviati correttamente."