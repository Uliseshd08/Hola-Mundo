<?php
/*CBTIS 89 
P34Array15.php
Programa que convierte los datos de un arreglo en una cadena de texto, y de forma contraria es decir convierte una cadena de texto a elementos dentro de un arreglo.
Avalos Hernandez Ulises Emmanuel
3-A Programacion*/

$arraydatos = ["Brayan","Ulises","Brayanelcrackfreefire"];

$string = implode(" ", $arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

$cadena = "Tercero de programacion matutino";

$array = explode(" ", $cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

for($i=0; $i<$longitud; $i++)

{echo $array[$i];
echo "<br>";
}

