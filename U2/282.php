<?php
$equipo = array(
    "Playera" => "100",
    "Camisas" => "250",
    "Pantalones" => "300",
    "Bermudas" => "200"
);

// Mostrar el contenido del array usando var_dump
echo "** Liverpool **", "<br><br>";
var_dump($equipo);

// Recorrer el array y mostrar el precio de cada prenda
foreach ($equipo as $posicion => $precio) {
    echo "<br>La " . $posicion . " cuesta " . $precio . "<br>";
}
?>