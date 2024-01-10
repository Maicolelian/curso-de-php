<?php

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawalsController
{
    // muestra una lista de este recurso
    public function index() {}

    // muestra un formulario para crear un nuevo recurso
    public function create() {}

    // guarda un nuevo recurso en la base de datos
    public function store($data) {

        $connection = Connection::getInstance()->get_database_instance();

        $stmt = $connection->prepare("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");

        $stmt->bindParam(":payment_method", $data["payment_method"]);
        $stmt->bindParam(":type", $data["type"]);
        $stmt->bindParam(":date", $data["date"]);
        $stmt->bindParam(":amount", $data["amount"]);
        $stmt->bindParam(":description", $data["description"]);

        $stmt->execute();

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
