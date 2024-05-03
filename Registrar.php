<?php
include "connection.php"; // Importamos la conexión a la base de datos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$docente = $_POST['docente'];
$primer_parcial = $_POST['primer_parcial'];
$segundo_parcial = $_POST['segundo_parcial'];
$tercer_parcial = $_POST['tercer_parcial'];


$promedio = (($primer_parcial + $segundo_parcial + $tercer_parcial) / 3);


$insertar = "INSERT INTO calificaciones (id, name, last_name, professor, cal_p1, cal_p2, cal_p3, promedio) VALUES ('', '$nombre', '$apellido', '$docente', $primer_parcial, $segundo_parcial, $tercer_parcial, $promedio)";

if (mysqli_query($conexion, $insertar)) {
    echo "Los datos se han insertado correctamente.";
} else {
    echo "Error al insertar los datos: " . mysqli_error($conexion);
}
