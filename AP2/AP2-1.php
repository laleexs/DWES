<?php

 class VehiculoCarrera
 {
     protected $marca;
     protected $modelo;
     protected $velocidad;
     protected $combustible;

     public function __construct($marca, $modelo, $velocidad ,$combustible)
     {
         $this->marca = $marca;
         $this->modelo = $modelo;
         $this->velocidad = $velocidad;
         $this->combustible = $combustible;

     }

     public function __destruct()
     {
         return "El coche se ha retirado de la carrera";
     }

     protected function consumirCombustible()
     {
        return "Combustible ahorrado al mover el coche";
     }

     public function arrancar()
     {
         return "coche arrancado";
     }

     public function acelerar()
     {
         return "coche detenido";
     }

     public function mostrarEstado()
     {
         $result = "La marca del coche es: " . $this->marca . "El modelo del coche es: " . $this->modelo . "La velocidad
          maxima del coche es: " . $this->velocidad . "El combustible del coche es: " .$this->combustible ;
         return $result;
     }



 }

 class CocheF1 extends VehiculoCarrera
 {
     public $alerones;

     public function __construct($marca, $modelo, $velocidad, $combustible, $alerones)
     {
         parent::__construct($marca, $modelo, $velocidad, $combustible);
         $this->alerones = $alerones;
     }

     public function activarDRS()
     {
         return "DRS activado";
     }
 }

 class CocheElectrico extends VehiculoCarrera
 {
     public $bateria;

     public function __construct($marca, $modelo, $velocidad, $combustible, $bateria)
     {
         parent::__construct($marca, $modelo, $velocidad, $combustible);
         $this->bateria = $bateria;
     }

     public function recargar ()
     {
         return "recargando batería.";
     }
 }