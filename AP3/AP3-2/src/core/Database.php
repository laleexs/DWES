<?php

class Database
{
    private static $instancia = null;
    private static mysqli $conexion;


    private function __construct()
    {
        $json= file_get_contents(__DIR__ . '/../config/dbConfig.json');
        $dbConfig = json_decode($json, true);// crea aray asociativo del string de file_get_contents
        self::$conexion = new mysqli($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['db']);
    }

    public static function getInstance()
    {
        if (self::$instancia === null) {
            self::$instancia = new Database();
        }
        return self::$instancia;
    }


    public function executeSQL($sql)
    {
        return self::$conexion->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
}
