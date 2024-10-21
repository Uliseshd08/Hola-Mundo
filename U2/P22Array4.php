<?php
/*CBTIS 89 
Programa que une cadenas de texto 
Avalos Hernandez Ulises Emmanuel
3ºA Programacion Matutino
*/
$equipo = array("portero"=>"Julio","Defensa"=>"Diego","Medio"=>"Jair","Delantero"=>"Rafa");

echo "** SELECCION NACIONAL **", "<br>", "<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "El jugador " . $jugador . " Es el " . $posicion;
echo "<br>", "<br>";

}
?>