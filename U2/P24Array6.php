<?php
/*CBTIS 89 
Programa que une cadenas de texto 
Avalos Hernandez Ulises Emmanuel
3ºA Programacion Matutino
*/
$equipo = array("Juan"=>"Contaduria","Rogelio"=>"Construccion","Brayan"=>"Programacion","Ulises"=>"Albañil");

echo "** CARRERAS DEL CBTIS 89 **", "<br>", "<br>";
foreach($equipo as $posicion=>$jugador)
{ echo "EL ALUMnO DE EL CBTIS 89 " . $posicion . " Estudia la carrera de " . $jugador;
echo "<br>", "<br>";

}
 