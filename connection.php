<?php
// Conexión a la base de datos
$servidor = "emiliano.castelancarpinteyro.com";
$usuario = "emiliano";
$clave = "Apusquisqui23!!";
$bd = "calificaciones";

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

// Chequeo de conexión
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}