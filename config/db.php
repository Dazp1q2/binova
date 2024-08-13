<?php
$servername = "localhost";
$username = "root"; // Cambia esto si tu usuario no es 'root'
$password = ""; // Cambia esto si tienes una contraseña en tu base de datos
$dbname = "binova"; // Cambia esto al nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
