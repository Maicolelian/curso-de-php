<?php

$se_hablo_del_morty = false;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h1>esto no se debe hacer</h1>
    <?php if ($se_hablo_del_morty) {
        echo "<b>👻</b>";
    }
    else {
        echo "<b>👽</b>";
    }
    ?>

    <h1>esto es aceptable</h1>
    <?php if($se_hablo_del_morty) { ?>
        <b>👻</b>
    <?php } else { ?>
        <b>👽</b>
    <?php } ?>

    <h1>esto si se debe hacer</h1>
    <?php if($se_hablo_del_morty): ?>
        <b>👽</b>
    <?php else: ?>
        <b>👻</b>
    <?php endif; ?>

</body>
</html>