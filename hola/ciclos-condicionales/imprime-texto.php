<?php

$nombre = "Morty";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primera impresion</title>
</head>
<body>
    
<?php echo "<b>buenos dias estamos aprendiendo a integrar php con html</b>"; ?>
<br>
<?= "<i>esta es otra forma de imprimir texto y etiquetas con php</i>" ?>

<h1>!Hola <?= $nombre ?>¡</h1>

</body>
</html>