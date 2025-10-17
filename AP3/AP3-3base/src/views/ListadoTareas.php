<?php

namespace AP33\Views;

class ListadoTareas
{
    public function render(array $tareas = null) // entra un array o si no entra nada es null
    {
        $template = __DIR__ . "/../../public/assets/tareas.html";
        include_once $template; // Incluye el contenido del archivo tareas.html dentro de la ejecución actual.
    }

}