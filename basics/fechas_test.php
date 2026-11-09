<?php
// Imprimir en PHP
// http://localhost/adso3410390/fechas_test.php
echo "Fecha actual";
echo date ("y-m-d H:i:s");
echo "</br>";
// Fecha con día de la semana y mes completo
echo date('l, F j, Y'); 
echo "</br>";
//Ofrece mayor flexibilidad para cálculos y manipulación. Se usa con el método format().
$fecha = new DateTime();
echo $fecha->format('d/m/Y H:i:s'); 
// También permite fechas relativas
$manana = new DateTime('tomorrow');
echo $manana->format('Y-m-d');
echo "</br>";
?>