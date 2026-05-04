<?php


$host = "mysql-claseapi.alwaysdata.net";
$user = "claseapi";
$pass = "clase1234";
$db   = "claseapi_gestionusuarios";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    // No detenemos la página porque no es necesario
    echo "Conexión no utilizada en esta página";
}
?>