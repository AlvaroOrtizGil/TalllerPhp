<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php // Aqui empiza nuestro Php
    
  function  calcularAreaRectangulo($ancho,$alto){//Esta funcion recibe el alto y acnho del triangulo

    $areaRectangulo=($ancho*$alto)/2;// Esta es la formula para calcualar el area de triangulo
    echo "El Area del rectangulo es ".$areaRectangulo;
  }
  calcularAreaRectangulo(4,5);//Llamamos a la funcion y le pasamos los parametros
  ?>
</body>
</html>