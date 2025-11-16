<?php


function comprobarDisponibilidad($fecha) {
    // Conexión a la BD
    $con = new mysqli("localhost", "root", "", "peluqueria");

    if ($con->connect_error) {
        die("Error de conexión: " . $con->connect_error);
    }

    // Comprobar si ya hay alguna reserva en esa fecha
    $sql = "SELECT id FROM reservas WHERE fecha = '$fecha'";
    $resultado = $con->query($sql);

    if (!$resultado) {
        echo "Error en la consulta de disponibilidad: " . $con->error;
        $con->close();
        // Por seguridad consideramos que no está disponible
        return false;
    }

    // TRUE si está libre (0 filas), FALSE si ya hay reservas
    $libre = ($resultado->num_rows === 0);

    $con->close();

    return $libre;
}

function guardarReserva($tipoCorte, $tintes, $peinados, $fecha) {
    $con = new mysqli("localhost", "root", "", "peluqueria");

    if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
    }

    $sql = "INSERT INTO reservas (tipoCorte, tintes, peinados, fecha) 
            VALUES ('$tipoCorte', '$tintes', '$peinados', '$fecha')";

    $ok = $con->query($sql);

    if (!$ok) {
        echo "Error al guardar la reserva: " . $con->error;
    }

    $con->close();

    return $ok; // true si ha ido bien, false si ha fallado
}

?>