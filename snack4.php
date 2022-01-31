<?php
// ## Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$numbArray = [];
while (count($numbArray) < 15) {
    $number =rand(1,100);

    // controllo se il numero non sia gia contenuto nell'array e pusho
    if (!in_array($number, $numbArray)) {
        $numbArray[] = $number;
    }
}

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
    <div>
        <!-- ciclo per 15 numeri -->
        <?php for ($i=0; $i < count($numbArray) ; $i++) { ?>
            <div><?php echo $numbArray[$i]; ?></div>
        <?php }?>
    </div>
</body>
</html>