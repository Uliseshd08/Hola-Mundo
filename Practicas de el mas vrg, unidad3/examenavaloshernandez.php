<?php
//oiga maestra no hice el examen de que aparte se me olvido como hacerlo tambien ya tengo mis 18 puntos y no digo que su materia no me preocupa pero prefiero mi salud mental y mi establidad en mi vida, en este cierto punto de mi vida, un dia sere un gran programador y estara orgullosa de mi pero por el momento no podre enfocarme ya que me da miedo y tengo noomofobia JAJAJA, para que me quita mi celular, algun dia trabajare para una cadena de supermercados millonaria creando un software donde puedan hacer demasiadas cosas y ser millonario y poder tener maximo control en mi vida, como Memo Salinas y asi //

$Productos = array ("Vestido","Pantalon","Cinturon","Camiseta");
$Precio = array(
	array(1650),array(2100),array(900));
$Subtotal = array(1650,2100,900,1200);
$Promedio = array(550,700,300,400);


echo "Tienda de ropa";
echo "<br>";
echo "Productos ---------Subtotal ------- Promedio<br>";
   for ($i = 0; $i < count($Productos); $i++){
    echo $Productos[$i]."------------".$Subtotal[$i]."--------------".$Promedio[$i]."<br>";

}
?>