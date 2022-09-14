<?php 
    $numero = $_POST['Numero'];
    $factorial = 1;
        for($i=1;$i<=$numero;$i++) {
            $factorial= $factorial * $i;
        }
        echo "el factorial de ".$numero." es ".$factorial;
?>