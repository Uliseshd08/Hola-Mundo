<?
/*CBTIS 89 
Programa que une cadenas de texto 
Avalos Hernandez Ulises Emmanuel
3ºA Programacion Matutino
*/
$arraynombres = array( "nombre", "nombre2", "nombre3", "nombre4", "nombre5", "nombre6");
$longitud = count($arraynombres);

for($i=0; $i<$longitud; $i++)
{
	echo $arraynombres[$i];
	echo "<br>";
}

?>
