<?php

class Database
{
    private static $instancia = null;

    private static $conexion;

    private const SERVER = "mariaDB-server";

    private const USERNAME = "root";

    private const DB = "todolist";


    private function __construct()
    {
        $this->getConection;
    }

    public static function getInstance()
    {
        if (self::$instacia === null) {

        }
    }
}
