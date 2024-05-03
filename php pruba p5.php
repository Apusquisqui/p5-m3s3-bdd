<?php

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