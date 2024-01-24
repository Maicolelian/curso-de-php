<?php

namespace App\Controllers;

use Database\PDO\Connection;

class IncomesController
{

    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->get_database_instance();
    }

    // muestra una lista de este recurso
    public function index() {

        $stmt = $this->connection->prepare("SELECT * FROM incomes");
        $stmt->execute();

        $results = $stmt->fetacAll();

        require("../resources/views/incomes/index.php");

    }

    // muestra un formulario para crear un nuevo recurso
    public function create() {
        require("../resources/views/incomes/create.php");
    }

    // guarda un nuevo recurso en la base de datos
    public function store($data) {

        $stmt = $this->connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");

        $stmt->bindvalue(":payment_method", $data['payment_method']);
        $stmt->bindvalue(":type", $data['type']);
        $stmt->bindvalue(":date", $data['date']);
        $stmt->bindvalue(":amount", $data['amount']);
        $stmt->bindvalue(":description", $data['description']);

        $stmt->execute();

       header("location: incomes");

    }

    // muestra un unico recurso especifico
    public function show($id) {

        $stmt = $this->connection->prepare("SELECT * FROM incomes WHERE id=:id");
        $stmt->execute([
            ":id" => $id
        ]);

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        echo "El registro con id $id informa que te gastaste {$result['amount']} USD en {$result['description']}";

    }

    // muestra el formulario para editar un unico recurso
    public function edit() {}

    // actualiza un recurso especifico en la base de datos
    public function update() {

        $stmt = $this->connection->prepare("UPDATE incomes SET 
        payment_method = :payment_method,
        type = :type,
        date = :date,
        amount = :amount,
        description = :description
        WHERW id=:id;");

    $stmt->execute([
        ":id" => $id,
        ":payment_method" => $data["payment_method"],
        ":type" => $data["type"],
        ":date" => $data["date"],
        ":amount" => $data["amount"],
        ":description" => $data["description"],
    ]);

    }

    // elimina un recurso especifico en l abase de datos
    public function destroy($id) {

        $this->connection->beginTransaction();

        $stmt = $this->connection->prepare("DELETE FROM incomes WHERE id = :id");
        $stmt->execute([
            ":id" => $id
        ]);

        $sure = readline("¿De verdad quieres eliminar este registro? ");

        if ($sure == "no") 
            $this->connection->rollBack();
        else
            $this->connection->commit();

    }
}
