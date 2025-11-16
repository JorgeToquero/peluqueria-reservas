<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Proyecto 3 Sistema de reservas para una peluquería</title>
</head>
<body>

    <h2>Reserva tu cita en la peluquería</h2>

    <form action="reservar.php"  method="POST">
        <label>Elige el tipo de corte y peinado :</label>
        <select id="tipoCorte" name="tipoCorte" required>
    <option value="Rapado">Rapado</option>
    <option value="degradado">Degradado</option>
    <option value="corto">Corto</option>
</select>

    <select id="tintes" name="tintes" required>
    <option value="Rubio">Rubio</option>
    <option value="Gris">Gris</option>
    <option value="Sin Tinte">Sin tinte</option>
</select>

    <select id="peinados" name="peinados" required>
    <option value="Peinado Desordenado">Peinado desordenado</option>
    <option value="PeinadoAtras">Peinado hacia atrás</option>
    <option value="Peinado a Capas">Peinado por capas</option>
</select>

    <br><br><label for ="fecha">Fecha : </label><input type="date" name="fecha" required>

    <br><br><input type="submit" name="reserva" value="reserva Cita">
</form> 
</body>
</html>