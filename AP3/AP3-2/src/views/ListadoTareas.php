<?php

class ListadoTareas
{
    private array $tareas;
    public function render( array $tareas =null): void
    {
        $this->tareas = $tareas; // guarda la data que le envia el controlador para poder mostrarla
        ?>
        <h1><?= $this->tareas['id'] ?></h1>
        <h2><?= $this->tareas['descripcion'] ?></h2>
        <p><?= $this->tareas['fecha_creacion'] ?></p>
        <p><?= $this->tareas['fecha_vencimiento'] ?></p>
        <?php
    }
}
