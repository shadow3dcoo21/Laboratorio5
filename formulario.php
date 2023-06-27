<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Ingresar Valor 1 : <br> <input type="text" name="valor1"><br>
        Ingresar Valor 2 : <br> <input type="text" name="valor2"><br>
        Resultado : <br>
        <input type="submit" name="suma" value="Suma">
    </form>
    <?php 
    //declaracion de variables
    error_reporting(0);   
    $numero1=$_POST['valor1'];
    $numero2=$_POST['valor2'];
        

        if (isset($_POST['suma'])){
            
            if(empty($numero1) || empty($numero2)){
                echo "debes de ingresar datos , estan vacios";
            }else{
                if(is_int($numero1) || is_int($numero2)){
                    echo" no se permite texto , solo enteros";
                }else{
                    
                    $suma=$numero1+$numero2;
                    echo "El resultado de la suma es :" , $suma;
                }
            
                
            }
        }
        
    ?>



</body>
</html>