<?php
/*CBTIS 89 
Programa que une cadenas de texto 
Avalos Hernandez Ulises Emmanuel
3ºA Programacion Matutino
*/
$equipo = array("25"=>"Manzana","40"=>"Mango","35"=>"Limon","20"=>"Naranja");

echo "** FRUTERIA DEL NORTE **", "<br>", "<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "El kilo de " . $jugador . " Cuesta " . $posicion;
echo "<br>", "<br>";

}
