<?php
// Para ejecutarlo lanzaremos en la terminal del proyecto: docker exec -it servidor_php /bin/bash
//  Y una vez dentro: php -S 0.0.0.0:8001
//   al navegador en: http://localhost:8001

class DatabaseConnection
{
    private static $instancia = null;
    private static $conexion;
    private const SERVER = "mariaDB-server";
    private const USERNAME = "root";
    private const PASSWORD = "root";
    private const DB = "AP1";

    //constructor privado
    private function __construct()
    {
        $this->getConnection();
    }

    // Este método se asegura de que la instacia sea creada una sola vez.
    public static function  getInstance()
    {
        if(self::$instancia === null){
            self::$instancia = new DatabaseConnection();
        }
        return self::$instancia;
    }

    public function getConnection()
    {
        self::$conexion = new mysqli(self::SERVER, self::USERNAME, self::PASSWORD,self::DB);

        if(self::$conexion->connect_error) {
            die("Error de conexión: " . self::$conexion->connect_error);
        }
    }

    /**
     * Función que ejecuta cualquier sentencia SQL que recibe y devuelve el resultado en un array asociativo
     */
    public function executeSQL($sql)
    {
        return self::$conexion->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
}

// Ejemplo de uso

$db1 = DatabaseConnection::getInstance();
$conexion1 = $db1->getConnection();

//ejecutar la consulta para verificar la conexión
$resultado = $db1->executeSQL("SELECT * FROM usuarios");

if (count($resultado) > 0) {
    foreach ($resultado as $row) {
        echo "ID: " . $row['id'] . "-  Nombre: " .$row['nombre'] . "<br>";
    }
} else {
    echo "No se encontraron usuarios.\n ";
}

// Verificar que siempre se usa la misma instancia de conexión
$db2 = DatabaseConnection::getInstance();
$conexion2 = $db2->getConnection();

var_dump($conexion1 === $conexion2);  // true