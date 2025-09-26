<?php

//conexión a BBDD
$host = 'mariadb-server';
$username = 'root';
$password = 'root';
$database = 'AP1';

//se realiza la conexión
$conn = new mysqli($host, $username, $password, $database);

//verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "conexión exitosa.";

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
//procesamos el resultado
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) { // Fetch_assoc() obtiene
        //una fila de los resultadosde la query.
        echo "El usuario: " . $row['nombre'] . "<br>";
        echo "Posee la id: " . $row['id'] . "<br>";
        echo "Y su estado es: " . $row['estado'] . "<br>";
        echo "------------------------------<br>";
    }
}else {
    echo "no hay resultados";
}
//insertar usuario en la bbdd

$sql = "INSERT INTO usuarios(nombre, estado) values('Alexandre', false)"; // los valores entre comillas simples no dobles

// try and catch para controlar si en la sentecia hay algún error
try {
    $conn->query($sql);
    $id = $conn->insert_id;
    echo "Se a realizado con exito la inserción de la nueva id: " . $id . "<br>";

} catch (mysqli_sql_exception $e){
    die ("Se ha producido el siguiente error:<br>" . $e->getMessage() . " En la linea: " . $e->getLine() . "<br>");
}

//realizamos la actualización

$sql = "UPDATE usuarios SET estado =true WHERE id= " .$id;

try {
    $conn->query($sql);
    echo "Se ha realizado correctamente la actualización de la id:" . $id ."<br>";
} catch (mysqli_sql_exception $e){
    die("Se ha producido el siguiente error:" . $e->getMessage() . " En la Línea: " . $e->getLine() . "<br>");
}

// sql para mostrar los datos después de actualizarlos

$sql= "SELECT * FROM usuarios";
// lanzamos consulta para devolver resultados
$result  = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row =  $result->fetch_assoc()) {
        echo " El usuario " . $row['nombre'] . " posee la id: " . $row['id'] . "y su estado es: " . $row['estado'] . "<br>";
    }
}else {
    echo " 0 resultados obtenidos";
}


//borrado de un dato

$sql= "DELETE FROM usuarios WHERE id=" . $id ;

try {
    $conn->query($sql);
    echo "Se ha realizado correctamente el borrado de la id:" . $id ."<br>";
} catch(mysqli_sql_exception $e) {
    die("Se ha producido el siguiente error:" . $e->getMessage() . " En la Línea: " . $e->getLine() . "<br>");
}

//  IMPORTANTE CERRAR LA CONEXION PARA EVITAR CONSUMIR RECURSOS
$conn->close();
