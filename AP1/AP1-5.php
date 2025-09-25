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

$sql = "INSERT INTO usuarios(nombre, estado) values(Alex, false)";

// try and catch para controlar si en la sentecia hay algún error
try {
    $conn->query($sql);
    $id = $conn->insert_id;
    echo "Se a realizado con exito la inserción de la nueva id: " . $id . "<br>";

} catch (mysqli_sql_exception)

