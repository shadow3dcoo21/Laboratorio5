<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de Formularios</title>
    
</head>
<body>
    <form method="post" action="">
        Ingresar Valor 1 : <br> <input type="text" name="valor1"><br>
        Ingresar Valor 2 : <br> <input type="text" name="valor2"><br>
        Resultado : <br>
        <input type="submit" name="producto" value="Calcular">
        <input type="reset" name="cancelar" value="Cancelar">
        
    </form>
    <?php include 'producto.php'?>



</body>
</html>