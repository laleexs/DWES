<?php

$datos = array();

if (isset($_GET)) {
    $datos = $_GET;
} else {
    echo "No hay datos introducidos por URL";
}

foreach ($datos as $key => $valor) {
    echo "se ha recibido $valor para la clave: $key <br>";
    // echo "se ha recibido" . $valor . " para la clave: " . $key . "<br>"; eso es equilavente a lo otro
}

//  URL : http://localhost:8001/AP1/AP1-1.php?hola=mundo&clave=valor2&clave2=valor3

/* yo pensaba que tenia que declarar cada variable de get que pasaba por URL pero con
    $_GET o $_REQUEST si tu pones los parametros clave , valor que quieras el metodo ya
    te lo pone en un array asociativo
*/