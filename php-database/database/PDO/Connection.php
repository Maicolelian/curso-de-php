<?php

namespace Database\PDO;

class Connection {

    private static $instance;
    private $connection;

    private function __construct() {
        $this->make_connection();
    }

    public static function getInstance() {
         if (!self::$instance instanceof self)
            self::$instance = new self();

        return self::$instance;
    }

    public function get_database_instance() {
        return $this->connection;
    }

   /*  private function make_connection() {
        $server = "localhost";
        $database = "finanzas_personales";
        $username = "Maicelian";
        $password = "mai";

        $conexion = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

        $setnames = $conexion->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        $this->connection = $conexion;
    } */

    private function make_connection() {

        $server = "localhost";
        $database = "finanzas_personales";
        $username = "MaiELian";
        $password = "mai";

        try {

        $conexion = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

        $setnames = $conexion->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        $this->connection = $conexion;

        echo "conexion establecida";
        } catch (\PDOException $e) {
           
            die("no se pudo establecer la conexion por: " . $e->getMessage());
        }
    }  

}

