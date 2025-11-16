<?php

   include 'modelo.php';
   
        $tipoCorte=$_POST['tipoCorte'];
        $tintes=$_POST['tintes'];
        $peinados=$_POST['peinados'];
        $fecha=$_POST['fecha'];

       

        $disponible = comprobarDisponibilidad($tipoCorte, $tintes, $peinados, $fecha);
if ($disponible) {
    $ok = guardarReserva($tipoCorte, $tintes, $peinados, $fecha);
} else {
    $ok = false;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmación de reserva</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">

    <?php if ($disponible && $ok): ?>
        <h2>✅ Reserva confirmada</h2>
        <p>Su cita se ha reservado correctamente el: <strong><?php echo $fecha; ?></strong></p>
    <?php elseif (!$disponible): ?>
        <h2>❌ Fecha no disponible</h2>
        <p>Ya existe una reserva para esa fecha. Por favor, seleccione otro día.</p>
    <?php else: ?>
        <h2>❌ Error al guardar la reserva</h2>
        <p>Ha ocurrido un error al registrar la cita. Inténtelo de nuevo más tarde.</p>
    <?php endif; ?>

    <h3>Detalles de la cita</h3>
    <p><strong>Tipo de corte:</strong> <?php echo $tipoCorte; ?></p>
    <p><strong>Tinte:</strong> <?php echo $tintes; ?></p>
    <p><strong>Peinado:</strong> <?php echo $peinados; ?></p>
    <p><strong>Fecha:</strong> <?php echo $fecha; ?></p>

    <div class="volver">
        <a class="btn-volver" href="vistaFormulario.php">← Volver a la página inicial</a>
    </div>

</div>

</body>
</html>

?>