<?php

namespace Database\MySQLi;

class Connection {

    private static $intance;
    private $connection;

    private function __construct() {
        $this->make_connection();
    }

    public static function getInstance() {

        if(!self::$instance instanceof self)
            self::$instance = new self();

        return self::$instance;
    }

    public function get_database_instance() {
        return $this->connection;
    }

    private function make_connection() {

        $server = "localhost";
        $database = "finanzas_personales";
        $username = "maicelian";
        $password = "mai";


        // forma procedural
        //$mysqli = mysqli_connect($server, $username, $password, $database);

        // forma orientada a objetos
        $mysqli = new \mysqli($server, $username, $password, $database);

        // comprobar conexion procedural
        //if (!$mysqli) 
            //die("Fallo la conexion:" . mysqli_connect_error());

        // comprobar conexion orientada a onjetos
        if ($mysqli->connect_errno)
            die("Fallo la conexion: {mysqli->connect_error}");

        //esto nos ayuda a usar cuaquier caracter
        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        $this->connection = $mysqli;

    }

}


