<?php
// Conexión a la base de datos
$servidor = "74.208.62.188";
$usuario = "emiliano";
$clave = "Apusquisqui23!! ";
$bd = "calificaciones";

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

// chequor  de  conexin
if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
