<?php

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawalsController
{

    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->get_database_instance();
    }

    // muestra una lista de este recurso
    public function index() {
        
        /* $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
        $stmt->execute();

        $results = $stmt->fetchAll();

        foreach($results as $results)
            echo "Gastaste " . $results["amount"] . " USD en: " . $results["description"] . "\n"; */

        // esto es usando fetch column

        $stmt = $this->connection->prepare("SELECT amount, description FROM withdrawals");
        $stmt->execute();
    
         $results = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);

         /* var_dump($results); */
         foreach($results as $result)
            echo "Gasataste $result USD \n";
    }

    // muestra un formulario para crear un nuevo recurso
    public function create() {}

    // guarda un nuevo recurso en la base de datos
    public function store($data) {

        $stmt = $this->connection->prepare("INSERT INTO withdrawals (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");

        $stmt->bindvalue(":payment_method", $data["payment_method"]);
        $stmt->bindvalue(":type", $data["type"]);
        $stmt->bindvalue(":date", $data["date"]);
        $stmt->bindvalue(":amount", $data["amount"]);
        $stmt->bindvalue(":description", $data["description"]);

        $data["description"] = "compramos una moto";

        $stmt->execute();

    }

    // muestra un unico recurso especifico
    public function show($id) {

        $stmt = $this->connection->prepare("SELECT * FROM withdrawals WHERE id=:id");
        $stmt->execute([
            ":id"=> $id
        ]);

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        echo "El registro con id $id dice que te gastaste {$result['amount']} USD en {$result['description']}";
    
    }

    // muestra el formulario para editadr un unico recurso
    public function edit($data, $id) {

        $stmt = $this->connection->prepare("UPDATE withdrawal SET 
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

    // actualiza un recurso especifico en la base de datos
    public function update() {}

    // elimina un recurso especifico en l abase de datos
    public function destroy($id) {

        $this->connection->beginTransaction();

        $this->connection->exec("DROP TABLE prueba");

        /* $stmt = $this->connection->prepare("DELETE FROM withdrawals WHERE id=:id");
        $stmt->execute([
            ":id" => $id
        ]);

        $sure = readline("¿De verdad quieres eiminar este registro?");

        if ($sure == "no") 
            $this->connection->rollBack();
        else
            $this->connection->commit(); */

    }
}
