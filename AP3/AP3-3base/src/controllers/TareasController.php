<?php

namespace AP33\Controllers;

use AP33\Models\Tareas;
use AP33\Views\DetalleTarea;
use AP33\Views\ListadoTareas;

class TareasController
{
public function list()
{
    //Llamar al modelo para obtener las tareas
    $tarea = new Tareas();
    $tareas =  $tarea->findAll();
    //Llamar a la vista para pintar el listado de tareas
    $listadoTareas = new ListadoTareas();
    $listadoTareas->render($tareas);

}


public function detail($id)
{
    //obtener detalle del modelo tarea
    $tareaModelo = new Tareas();
    $tarea = $tareaModelo->findById($id);
    $detalleTarea = new DetalleTarea();
    $detalleTarea->render($tarea);
}
}