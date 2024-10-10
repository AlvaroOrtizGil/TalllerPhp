<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$cadena =(string)25;
echo "ANTES DE CONVERTIRLO A ENTERO:";
echo "<br>";
$suma=$cadena+3;
echo "total de la suma".$suma;
echo "<br>";
echo var_dump($cadena);
echo "<br>";
echo "Despues-------------------------";
echo "<br>";


$cadena =(int)1;
$suma=$cadena+3;
echo $suma;
echo "<br>";
echo var_dump($cadena);



    ?>
    
</body>
</html>