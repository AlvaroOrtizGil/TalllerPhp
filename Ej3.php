<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Ej3.php" method="post">
        <p>Nombre del Planeta <input type="text" name="nombrePlaneta" /></p>
        <p>Masa del planeta<input type="text" name="masaPlaneta" /></p>
        <p><input type="submit" value="calcular" /></p>
       </form>
    <?php
    const GRAVITY=9.8;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recogemos los valores del formulario
        $nombrePlaneta = $_POST['nombrePlaneta'];
        $masaPlaneta = $_POST['masaPlaneta'];
    
    function multiplicacion($nombrePlaneta,$masaPlaneta){
     
        if($nombrePlaneta=="Tierra"){
            $resultado=GRAVITY*$masaPlaneta;
            echo "Masasa de la Tierra= ".$resultado;

        }else{
            echo "Has introducido otro planeta diferente a la Tierra";
        }
        
    }
    multiplicacion($nombrePlaneta, $masaPlaneta);
    }


    
    ?>
</body>
</html>