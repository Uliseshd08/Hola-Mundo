<?php
/*CBTIS 89 
Programa que une cadenas de texto 
Avalos Hernandez Ulises Emmanuel
3ºA Programacion Matutino
*/
$equipo = array("Tahoe Blindada"=>"2,500,000","Ford F150XL blindada"=>"1,500,000","Suburban Blindada"=>"3,000,00","Tacoma Blindada"=>"1,800,000");

echo "** Consesionaria **", "<br>", "<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "La " . $posicion . " cuesta " . $jugador;
echo "<br>", "<br>";

}
?>