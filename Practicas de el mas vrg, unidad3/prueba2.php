<?php
$Nombre = array ("Ulises", "Maria", "Lalo","Rosi","Paty","Beto");
$edad = array (17, 25, 34, 52, 60, 15);
$Grupo1 = array(); 
$Grupo2 = array(); 
$Grupo3 = array();
for($i =0; $i < 6; $i++) 
{
if ($edad[$i]<18){
$Grupo1[$i]=1;
$Grupo2[$i]=0;
$Grupo3[$i]=0;
}
elseif($edad[$i]>18 && $edad[$i]<49){
$Grupo1[$i]=0;
$Grupo2[$i]=1;
$Grupo3[$i]=0;
}
elseif ($edad[$i] >=50){
$Grupo1[$i]=0;
$Grupo2[$i]=0;
$Grupo3[$i]=1;
}
}
echo "<br>";
echo "Nombre - Edad - Grupo1 - Grupo2 - Grupo3<br>";
for ($i = 0; $i<5; $i++){
echo $Nombre[$i]."-------".$edad[$i]."-------".$Grupo1[$i]."-----------------".$Grupo2[$i]."-------".$Grupo3[$i]."<br>";
    }
?>
