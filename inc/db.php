<?php
$userdb = "root"; // Usuario de la base de datos
$passdb = ""; // Contraseña de la base de datos
$database = "seguimiento_db"; // Nombre de la base de datos
$hostname = "localhost"; // Host de la base de datos

$conn = new mysqli($hostname, $userdb, $passdb, $database);
if ($conn->connect_errno){
    echo "Hay problemas para conectarse al servidor MySQL";
    echo "Error #: ". $conn->connect_errno . "\n";
    echo "Error: ". $conn->connect_error . "\n";
}
?>
