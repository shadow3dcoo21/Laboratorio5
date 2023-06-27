<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea2</title>
</head>
<body>
<form method="post" action="">
        
        Ingresar precio de la gaseosa : <br> <input type="text" name="precio_gaseosa"><br>
        Ingresar cantidad a comprar : <br> <input type="text" name="cantidad"><br>
        
        <input type="submit" name="resultado" value="Calcular">
        <input type="reset" name="cancelar" value="Cancelar">
        
    </form>
    <br>Resultado : <br>
    <?php include 'analisis2.php'?>
</body>
</html>