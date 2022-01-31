<?php
// ## Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

// chiedo i 3 dati all'utente
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// creo i due messaggi di accesso negato o riuscito
$granted = 'Accesso riuscito';
$denied = 'Accesso negato';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
        // controllo le condizioni richieste
        if (strlen($name)> 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)) {
            // se soddisfano tutte le condizioni contemporaneamente
            echo $granted;
        }else{
            // se non le soddisfano
            echo $denied;
        }
        ?>
    </p>
</body>
</html>