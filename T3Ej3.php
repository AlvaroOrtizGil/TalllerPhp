<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="T3Ej3.php" method="post">
        <p>Cantidad a Ingresar<input type="text" name="cantidad" /></p>
        <p><input type="submit" value="calcular" /></p>
    </form>
    
    <?php
    const TASA_INTERESES=00.5;
    $resultado=($_POST['cantidad'])*TASA_INTERESES;
    echo $resultado;
    ?>
</body>
</html>