<?php
/*CBTIS 89 
P34Array15.php
Programa que convierte los datos de un arreglo en una cadena de texto, y de forma contraria es decir convierte una cadena de texto a elementos dentro de un arreglo.
Avalos Hernandez Ulises Emmanuel
3-A Programacion*/

$arraydatos = ["10","20","30","40","50"];
$arraydatos2 = ["3","7","6","15","18"];
$sumaa = array();
$restaa = array();
$multia = array();
$divia = array();

/*$string = implode(" ", $arraydatos);*/
echo "Suma entre arreglos <br>";
for ($i = 0; $i < count($arraydatos); $i++) {
$sumaa[$i] = $arraydatos[$i]	+ $arraydatos2[$i];
echo $arraydatos[$i] . " + " . $arraydatos2[$i] . " = " . $sumaa[$i] . "<br>";
}

echo "Resta entre arreglos <br>";
for ($i = 0; $i < count($arraydatos); $i++) {
$restaa[$i] = $arraydatos[$i]	- $arraydatos2[$i];
echo $arraydatos[$i] . " - " . $arraydatos2[$i] . " = " . $restaa[$i] . "<br>";
}

echo "Multiplicacion entre arreglos <br>";
for ($i = 0; $i < count($arraydatos); $i++) {
$multia[$i] = $arraydatos[$i]	* $arraydatos2[$i];
echo $arraydatos[$i] . " * " . $arraydatos2[$i] . " = " . $multia[$i] . "<br>";
}

echo "Division entre arreglos <br>";
for ($i = 0; $i < count($arraydatos); $i++) {
$divia[$i] = $arraydatos[$i]	/ $arraydatos2[$i];
echo $arraydatos[$i] . " / " . $arraydatos2[$i] . " = " . $divia[$i]. "<br>";
}