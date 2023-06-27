
<?php 

//Tarea1
error_reporting(0);
$sueldo=600;
$num_hijos=$_POST['hijos'];
$bonificacion=$num_hijos*50;
$total_mes_vendido=$_POST['mes'];
//echo $total_mes_vendido;
$comision=($total_mes_vendido-($total_mes_vendido*0.75));
$sueldo_bruto=$sueldo+$comision+$bonificacion;
$descuento=$sueldo_bruto*0.11;
$sueldo_neto=$sueldo_bruto-$descuento;
echo"Bonificacion total a ",$num_hijos," hijos : ",$bonificacion ,"<br>";
echo"Comision por mes vendido : ",$comision,"<br>";
echo"Sueldo Bruto : ",$sueldo_bruto,"<br>";
echo"Descuento : ",$descuento,"<br>";
echo"Sueldo Neto : ",$sueldo_neto;


?>