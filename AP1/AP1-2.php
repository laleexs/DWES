<?php
// Para ejecutarlo lanzaremos en la terminal del proyecto: docker exec -it servidor_php /bin/bash
//Y una vez dentro: php -S 0.0.0.0:8001

// URL de la actividad http://localhost:8001/AP1/AP1-2.php?hola=mundo&clave=2&clave2=valor3&dato=null

$datos = array();

if (isset($_GET)) {
    $datos = $_GET;
}

if (empty($datos)) {
    echo "NO hay ningún dato <br>";
}

foreach ($datos as $value) {
    if (is_null($value)) {
        echo "es un valor nulo <br>";
    } elseif (is_numeric($value)) {
        echo "Se ha recibido un número <br>";
    } else {
        echo "Se ha recibido una cadena de caracteres. <br>";
    }
}