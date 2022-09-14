<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio 4.1</title>
</head>
<body>
   <?php
        $ruta="img/";
        if(array_key_exists('enviar', $_POST)){
            if($_REQUEST['valor']>=80){
                $rutaf=$ruta."satifecho.jpg";
            }
            else if($_REQUEST['valor']>=50){
                $rutaf=$ruta."pocoSatisfecho.jpg";
            }
            else{
                $rutaf=$ruta."insatisfecho.jpg";
            }
            echo "<img src=".$rutaf.">";
        }
        else{
    ?>
        <form action="lab41.php" method="post">
            Ingrese el porcentaje de veta <input type="text" name="valor" value="">
            <input type="submit" name="enviar" value="enviar dato">
        </form>
    <?php
        }
    ?>

</body>
</html> 