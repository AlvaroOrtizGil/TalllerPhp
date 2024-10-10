

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ej1.php" method="post">
        <p>Su nombre: <input type="text" name="nombre" /></p>
        <p><input type="submit" /></p>
       </form>
       <?php echo htmlspecialchars($_POST['nombre']); ?>
</body>
</html>