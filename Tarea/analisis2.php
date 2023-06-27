<?php 
error_reporting(0);
$precioActual =$_POST['precio_gaseosa'];
$cantidad =$_POST['cantidad'];
$nuevoPrecio = $precioActual - ($precioActual * 0.05);
$importeCompra = $nuevoPrecio * $cantidad;
$importeDescuento = $importeCompra * 0.07;
$importePagar = $importeCompra - $importeDescuento;
$obsequioCaramelos = $cantidad * 2;
echo "Nuevo precio de la gaseosa: $" . $nuevoPrecio . "<br>";
echo "Importe de la compra: $" . $importeCompra . "<br>";
echo "Importe del descuento: $" . $importeDescuento . "<br>";
echo "Importe a pagar: $" . $importePagar . "<br>";
echo "Obsequio de caramelos: " . $obsequioCaramelos . " caramelos<br>";

?>