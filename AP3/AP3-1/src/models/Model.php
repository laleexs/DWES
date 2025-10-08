<?php

namespace models; // al crea el Model.php con formato para clase, me crea el namespace

class Model
{
    private array $data; // declaramos que la propiedad data será un array

    private function __construct()
    {
        $this->data = array(
            "title" => "MVC Sencillo PHP",
            "keyworks" => "arquitectura de software, poo, mvc, php",
            "description" => "ponemos en práctica el MVC en PHP",
            "content" => "El contenido del presente ejercico corresponde a la creación de 
                                un modelo vista controlado, MVC en adelante, mediante el lenguaje 
                                de programación PHP de una forma sencilla y haciendo uso de los 
                                conocimientos previos que tienen los alumnos."
        );

    }

    //coge la información del atributo data
    public function getData(): array
    {
        return $this->data; // devuelve array asociativo porque tenemos clave y valor
    }

    public function setData($data): void //// retornamos void porque al estar añadiendo datos no hace falta que la función los devuelva, simplemente los almacena
    {
        $this->data = $data;
    }
}