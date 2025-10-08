<?php
require_once __DIR__ . '/../models/Tarea.php';
require_once __DIR__ . '/../views/ListadoTareas.php';

class TareasController
{
    private Tarea $modelo;
    private ListadoTareas $vista;
    private array $datos;


    /**
     * Este método se encarga de recibir los datos que estan cargados en el modelo.
     * @return void
     */
    private function pedirDatos()
    {
        if (!isset($this->modelo)) {
            $this->modelo = new Tarea();
        }
        $this->datos = $this->modelo->getTodas();
    }

    /**
     * Método que se encarga de enviar los datos a la vista y de volver a cargarla.
     * @return void
     */
    public function enviarDatosVista()
    {
        //Verificamos que no se haya creado la vista con anterioridad.
        if (!isset($this->vista)) {
            $this->vista = new ListadoTareas();
        }
        //Solicitamos los datos almacenados en el Modelo
        $this->pedirDatos();
        //Enviamos los datos a la vista para garantizar que le han llegado.
        $this->vista->setData($this->datos);
        //Mostramos la vista de nuevo para recoger los nuevos datos enviados.
        $this->vista->mostrarPlantilla();
    }

}

?>