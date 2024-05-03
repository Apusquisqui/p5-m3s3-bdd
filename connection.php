<?php
// Conexión a la base de datos
$servidor = "emiliano.castelancarpinteyro.com";
$usuario = "emiliano";
$clave = "Apusquisqui23!! ";
$bd = "calificaciones";

$conexion = mysqli_connect("localhost", $usuario, $clave, $bd);

// chequor  de  conexin
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
