<?php 
error_reporting(0);
$valor1=$_POST['valor1'];
$valor2=$_POST['valor2'];

if(isset($_POST['producto'])){
    if(empty($valor1)||empty($valor2)){
        echo"no ingreso ningun valor esta vacio";
        
    }else{
        $resultado=$valor1*$valor2;
        echo" RESULTADO : " , $resultado;
    }
}

?>