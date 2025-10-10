<?php

class ListadoTareas
{

    public function render( array $tareas =null): void
    {
     include_once  __DIR__ . "/../../public/assets/tareas.html"; // es como si el archivo de tareas.html lo viera con echo
    }
}
