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
        <input type="number" id="players " name="players" step = "1" min ="2" max ="6">
        <input type="submit" value="introducir">
    </form>
</body>
</html>
<?php
// Para ejecutarlo lanzaremos en la terminal del proyecto: docker exec -it servidor_php /bin/bash

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $players = $_POST['players'];

}