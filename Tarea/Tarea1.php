<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea1</title>
</head>
<body>
<form method="post" action="">
        
        Ingresar numero de Hijos : <br> <input type="text" name="hijos"><br>
        Ingresar total vendido en el mes: <br> <input type="text" name="mes"><br>
        
        <input type="submit" name="resultado" value="Calcular">
        <input type="reset" name="cancelar" value="Cancelar">
        
    </form>
    <br>Resultado : <br>
    <?php include 'analisis.php'?>
</body>
</html>