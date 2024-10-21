wadadwadw<?php
/*CBTIS 89 
Programa que une cadenas de texto 
Avalos Hernandez Ulises Emmanuel
3ºA Programacion Matutino
*/
$equipo = array("Playera"=>"100","Camisas"=>"250","Pantalones"=>"300","Bermudas"=>"200");

echo "** Liverpool **", "<br>", "<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "La " . $posicion . " cuesta " . $jugador;
echo "<br>", "<br>";

}
?>