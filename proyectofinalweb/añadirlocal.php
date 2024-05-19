<?php

$servername = "127.0.0.1";
$username = "root";
$password = "GUApero14";
$dbname = "base_registros";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexion: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];


$sql = "INSERT INTO registros (nombre, email) VALUES ('$nombre', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso:DDD";
} else {
    echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();

?>