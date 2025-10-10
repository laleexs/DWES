<?php
require_once (__DIR__ . '/../core/Database.php');

class Tarea
{
    public function getData()
    {
        $conn = Database::getInstance(); // acedemos a la funcion de la clase database porque la clase database tiene propiedades estaticas a las cuales podemos aceder a traves del ::
        $data = $conn->executeSQL("SELECT * FROM tareas");
        return $data;
    }
}