<?php
// tenemos que decir de que tipo son los datos
declare(strict_types=1);

$datos = array(
    1 => "primero",
    3 => "segundo",
    5 => "tercero",
    7 => "cuarto",
    9 => "quinto",
    11 => "sexto",
);


(bool)$par = false;
(bool)$impar = true;

(int)$total = 0;
(int)$iteracion = 0;

foreach ($datos as $key => $value) {
    if(((++$iteracion) % 2) == 0){  // le sumamos 1 a la iteracion antes de calcular nada
        echo "Estas en una posicion par <br>";
        $impar = false;
        $par = true;
    }else {
        echo "Estas en una posicion impar <br>";
        $par = false;
        $impar = true;
    }

    $total += $key;
    
    echo "la suma de las claves";

    if($total > 20) {
        echo "el valor es mayor que 20<br>";
    }elseif($total > 10) {
        echo "el valor es mayor que 20<br>";
    }elseif($total > 5) {
        echo "el valor es mayor que 5<br>";
    }else {
        echo "el valor es menor que 5<br>";
    }

}

