<?php
require_once (__DIR__ . "/../views/ListadoTareas.php");
require_once (__DIR__ . "/../models/Tarea.php");

class TareasController
{
    public function getTareas()
    {
        $tarea = new Tarea();
        $tareas = $tarea->getTodasTareas();
        $vistaTareas = new ListadoTareas();
        $vistaTareas->render($tareas);
    }
}
