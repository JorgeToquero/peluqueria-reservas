<?php

   include 'modelo.php';
   
        $tipoCorte=$_POST['tipoCorte'];
        $tintes=$_POST['tintes'];
        $peinados=$_POST['peinados'];
        $fecha=$_POST['fecha'];

        echo "tipo de corte  : ".$tipoCorte;
        echo "<br><br>";
        echo " El tinte  : ".$tintes;
         echo "<br><br>";
        echo " Peinado : " .$peinados;
         echo "<br><br>";
        echo "Fecha : " .$fecha;

?>