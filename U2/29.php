<?php
/*CBTIS 89 
Programa que une cadenas de texto 
Avalos Hernandez Ulises Emmanuel
3ºA Programacion Matutino
*/
$nombre= "Ulises4";
$nom=0;
$nombres = array("Ulises", "Brayan", "Cesar", "Carlos", "Sofía", "Jorge", "Erick", "Pedro");
foreach ($nombres as $Person) {

    if ($Person == $nombre){
        $nom = 1;
        echo "El nombre ".$nombre." esta en el array";
        $Person=$nombres;}
    }
    if($nom==0){
    	echo "El nombre ".$nombre." no esta en el array";
    }
?>

    
