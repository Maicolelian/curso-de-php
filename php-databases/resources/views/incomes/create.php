<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/styles.css">
    <link rel="stylesheet" href="/CSS/create.css">
    <title>Agrega un nuevo ingreso</title>
</head>
<body>
    
    <h1>Agrega un nuevo ingreso</h1>

    <main>
        <form action="/incomes" method="post">

        <div class="input-group">
            <label for="payment_method">Metodo de pago</label>
            <select name="payment_method" id="payment_method">
                <option value="1" selected>Cuenta bancaria</option>
                <option value="2">Tarjeta de credito</option>
            </select>
        </div>
        

        <div class="input-group">
            <label for="type">Tipo de ingreso</label>
            <select name="type" id="type">
                <option value="1" selected>Pago de nomina</option>
                <option value="2">Reembolso</option>
            </select>
        </div>
        

        <div class="input-group">
            <label for="date">Fecha</label>
            <input type="text" name="date" id="date">
        </div>
        

        <div class="input-group">
            <label for="amount">Monto</label>
            <input type="text" name="amount" id="amount">
        </div>
        
        
        <div class="input-group">
            <label for="description">Descripcion</label>
            <textarea type="text" name="description" id="description"></textarea>
        </div>
        

        <input type="hidden" name="method" value="post">

        <div class="button-container">
            <button type="submit">Guardar</button>
        </div>
      </form>
    
    </main>

</body>
</html>