<?php

$servername = "sql309.infinityfree.com";
$username = "if0_36150780";
$password = "jsB5zUCWUcu";
$dbname = "if0_36150780_base_registros";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexion: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];


$sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso:DDD";
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>