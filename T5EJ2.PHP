<!-- 2. Ejercicio con Bucledo-while
Escribe un script en PHP que use un bucle do-whilepara pedir al usuario que
ingrese un número positivo. Si el número ingresado es negativo, el script debe
continuar pidiendo un número hasta que se ingrese uno positivo. Luego, imprime el
número positivo ingresado. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="T5EJ2.php" method="post">
 <p>Su nombre: <input type="text" name="numero" /></p>
 <p><input type="submit" /></p>
</form>

<body>
    <?php
do{
    if ($_POST>0){
        echo " Es positivo ";
    }else{
        echo "Introduce un numero positivo";
    }
}while($_POST<0)
    ?>
</body>
</html>