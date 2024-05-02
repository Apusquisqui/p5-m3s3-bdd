<?php
    // Conexin a la base de datos
    $servidor = "74.208.62.188";
    $usuario = "emiliano";
    $clave = "xxxxxxxxx ";
    $bd = "Calificaiones";

    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

    // chequor  de  conexin
    if (!$conexion) {
        die("La conexión ha fallado: " . mysqli_connect_error());
    }

    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $docente = $_POST['docente'];
        $primer_parcial = $_POST['primer_parcial'];
        $segundo_parcial = $_POST['segundo_parcial'];   
        $tercer_parcial = $_POST['tercer_parcial'];
        
        
        $promedio = ($primer_parcial + $segundo_parcial + $tercer_parcial) / 3;


        $insertar = "INSERT INTO calificaciones (nombre, apellido, docente, primer_parcial, segundo_parcial, tercer_parcial, promedio) VALUES ('$nombre', '$apellido', '$docente', '$primer_parcial', '$segundo_parcial', '$tercer_parcial', '$promedio')";

        if (mysqli_query($conexion, $insertar)) {
            echo "Los datos se han insertado correctamente.";
        } else {
            echo "Error al insertar los datos: " . mysqli_error($conexion);
        }
    }