<?php

class Database
{
    private static $instancia = null;

    private static $conexion;

    private const SERVER = "mariaDB-server";

    private const USERNAME = "root";

    private const PASSWORD = "root";

    private const DB = "todolist";


    private function __construct()
    {
        $this->getConection;
    }

    public static function getInstance()
    {
        if (self::$instacia === null) {
            self::$instancia = new Database();
        }
        return self::$instancia;
    }

    public function getConexion() // creando la conexión
    {
        self::$conexion = new mysqli(self::SERVER, self::USERNAME, self::PASSWORD, self::DB);

        if(self::$conexion->connect_error) {
            die ("Error de conexión: " . self::$conexion->connect_error);
        }
    }

    public function executeSQL($sql)
    {
        return self::$conexion->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
}
