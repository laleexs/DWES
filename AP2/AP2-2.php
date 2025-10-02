<?php

// Para ejecutarlo lanzaremos en la terminal del proyecto: docker exec -it servidor_php /bin/bash  Y una vez dentro: php -S 0.0.0.0:8001   al navegador en: http://localhost:8001
class Vehiculo
{
    public $nombre;
    public $color;
    public $velocidadMaxima;
    public $velocidadActual;
    public $distanciaRecorrida;

    public function __construct($nombre, $color)
    {
        $this->nombre = $nombre;
        $this->color = $color;
        $this->velocidadMaxima = rand(250, 300); // velocidad aleatoria de 250 a 300
        $this->velocidadActual = 0;
        $this->distanciaRecorrida = 0;
    }

    public function tirarDado()
    {
        return rand(1, 10);
    }

    public function acelerar()
    {
        $incremento = $this->tirarDado() * 10; // cada valor del dado aumenta 10 la velocidad
        $this->velocidadActual += $incremento;

        if ($this->velocidadActual > $this->velocidadMaxima) {
            $this->velocidadActual = $this->velocidadMaxima;
        }

        echo $this->nombre . "acelera en: " . $incremento . "km/h, velocidad actual " . $this->velocidadActual . "km/h\n";

    }

    public function avanzar()
    {
        // Convertimos la velocidad actual en distancia recorrida en un turno (asumimos que un turno dura 1 hora)
        $this->distanciaRecorrida += $this->velocidadActual / 60; // Suponemos que cada turno es de 1 minuto (1/60 de hora)
        echo "{$this->nombre} ha recorrido un total de {$this->distanciaRecorrida} metros\n";
    }


//final de la clase
}

// recepción del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$numPlayers = (int)($_POST['players']);
?>
<form method="post" action="">
    <?php
    for ($i = 0; $i < $numPlayers; $i++) {
        echo '<label for="name">nombre player: </label><br>';
        echo ' <input type="text" id="name" name="names[]" required><br>';
        echo '<label for="color">color: </label><br>';
        echo ' <input type="text" id="color" name="colors[]" required><br>';
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['names']) && isset($_POST['colors'])) {
        $names = $_POST['names'];
        $colors = $_POST['colors'];

        for ($i = 0; $i < $numPlayers; $i++) {
            $vehiculos[] = new Vehiculo($names[$i],$colors[$i]);
        }
    }
    }
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <form method="post" action="">
        <label for="players">Numero de jugadores: </label>
        <input type="number" id="players " name="players" step="1" min="2" max="6" required>
        <input type="submit" value="introducir">
    </form>
    </body>
    </html>


