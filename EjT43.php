<!-- ejercicios con operador ternario -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$calificacion = 100;
echo ($calificacion >= 90) ? 'Sobresaliente' : '';
echo ($calificacion >= 70 && $calificacion < 90) ? 'Buena' : '';
echo ($calificacion < 70) ? 'Necesita mejorar' : '';
?>

</body>
</html>
