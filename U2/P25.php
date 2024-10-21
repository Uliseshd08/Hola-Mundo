<?php
/*CBTIS 89 
Programa que une cadenas de texto 
Avalos Hernandez Ulises Emmanuel
3ºA Programacion Matutino
*/
$cheque=5450;
$mierdacheque=$cheque;
$billete1000;
$billete500;
$billete200;
$billete100;
$billete50;
$billete20;

$billete1000=floor($cheque/1000);
$cheque=$cheque%1000;

$billete500=floor($cheque/500);
$cheque=$cheque%500;

$billete200=floor($cheque/200);
$cheque=$cheque%200;

$billete100=floor($cheque/100);
$cheque=$cheque%100;

$billete50=floor($cheque/50);
$cheque=$cheque%50;

$billete20=floor($cheque/20);
$cheque=$cheque%20;

echo"El valor de el cheque es: ",$mierdacheque;
echo"<br>";
echo "El total de billetes de 1000 es de: ",$billete1000;
echo"<br>";
echo "El total de billetes de 500 es de: ",$billete500;
echo"<br>";
echo "El total de billetes de 200 es de: ",$billete200;
echo"<br>";
echo "El total de billetes de 100 es de: ",$billete100;
echo"<br>";
echo "El total de billetes de 50 es de: ",$billete50;
echo"<br>";
echo "El total de billetes de 20 es de: ",$billete20;
echo"<br>";
?>