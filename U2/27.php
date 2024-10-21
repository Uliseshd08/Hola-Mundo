<?php
$num;

for ($valor = 1; $valor <=100; $valor++)
	{
	$num = array("Numeros"=>$valor);
	foreach($num as $letra=>$numero)
if ($valor%2==0)
	echo "El ", $letra." ".$numero;
else 
	echo "<br>";
}
?>