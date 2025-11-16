<?php


function comprobarDisponibilidad($tipoCorte, $tintes, $peinados, $fecha) {

    // Establece conexión con base de datos
    $con = new mysqli("localhost", "root", "", "peluqueria");

    if ($con->connect_error) {
        die("Error de conexión: " . $con->connect_error);
    }

    // Consulta SQL para comprobar si ya existe una reserva en esa fecha
    $sql = "SELECT * FROM reservas WHERE fecha = '$fecha'";

    $resultado = $con->query($sql);

    if (!$resultado) {
        echo "Error en la consulta de disponibilidad: " . $con->error;
        $con->close();
        return;
    }

    // Si ya hay reservas ese día
    if ($resultado->num_rows > 0) {
        echo "Fecha no disponible, elige otra.";
    } else {
        // Si no hay reservas, se puede guardar
        reservaCita($tipoCorte, $tintes, $peinados, $fecha);
    }

    $con->close(); // Cerrar la conexión
}

function reservaCita($tipoCorte, $tintes, $peinados, $fecha) {

    $con = new mysqli("localhost", "root", "", "peluqueria");

    // Verificar si la conexión falló
    if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
    }

    $sql = "INSERT INTO reservas (tipoCorte, tintes, peinados, fecha) 
            VALUES ('$tipoCorte', '$tintes', '$peinados', '$fecha')";

  

    if ($con->query($sql) === TRUE) {
        echo "Su cita se ha reservado correctamente el: " . $fecha;
    } else {
        echo "Error al reservar la cita: " . $con->error;
    }

    $con->close(); // Cerrar la conexión
}

// Recoger los datos del formulario y luego llamar a comprobarDisponibilidad()
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoCorte = $_POST['tipoCorte'] ?? '';
    $tintes    = $_POST['tintes'] ?? '';
    $peinados  = $_POST['peinados'] ?? '';
    $fecha     = $_POST['fecha'] ?? '';

    echo "<p>Formulario recibido correctamente.</p>";

    comprobarDisponibilidad($tipoCorte, $tintes, $peinados, $fecha);
} else {
    echo "Acceso no válido. Vuelve al formulario.";
}

?>