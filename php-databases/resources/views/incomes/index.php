<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de ingresos</title>
</head>
<body>

    <h1>Lista de ingresos</h1>

    <ul>
        <?php foreach($results as $result): ?>

            <li>Ganaste <?= $result["amount"] ?> USD en <?= $result["description"] ?></li>

        <?php endforeach; ?>
    </ul>

</body>
</html>