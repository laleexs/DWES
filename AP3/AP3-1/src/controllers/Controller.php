<?php
require_once __DIR__ . '/../models/Model.php';
require_once __DIR__ .  '/../views/View.php';



class Controller
{
    private Model $modelo;
    private View $vista;
    private array $datos;


    private function pedirDatos()
    {
        if(!isset($this->modelo)){ //Si no existe el objeto modelo entonces lo creamos
            $this->modelo = new Model();
        }

        $this->datos = $this->modelo->getData();
    }

    public function enviarDatosVista()
    {
        if(!isset($this->vista)){
            $this->vista = new View();
        }

        //Solicitamos los datos almacenados en el Modelo
        $this->pedirDatos();

        $this->vista->render($this->datos);

    }
}