<?php

namespace App\Controllers;

use Database\MySQLi\Connection;

class IncomesController
{
    // muestra una lista de este recurso
    public function index() {}

    // muestra un formulario para crear un nuevo recurso
    public function create() {}

    // guarda un nuevo recurso en la base de datos
    public function store($data) {

        $connection = Connection::getInstance()->get_database_instance();
        
        $stmt = $connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES(?,?,?,?,?);");

        $stmt->bind_param("iisds", $payment_method, $type, $date, $amount, $description);

        $payment_method = $data['payment_method'];
        $type = $data['type'];
        $date = $data['date'];
        $amount = $data['amount'];
        $description = $data['description'];

        $stmt->execute();

        echo "Se han insertado {$stmt->affected_rows} filas en la base de datos ";

    }

    // muestra un unico recurso especifico
    public function show() {}

    // muestra el formulario para editadr un unico recurso
    public function edit() {}

    // actualiza un recurso especifico en la base de datos
    public function update() {}

    // elimina un recurso especifico en l abase de datos
    public function destroy() {}
}
