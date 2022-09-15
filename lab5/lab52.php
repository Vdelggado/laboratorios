<?php
if($_FILES['nombre_archivo_cliente']['size']>1000000){
    echo "solo se pueden subir archivos con peso menor a 1MB";
}else{
if($_FILES['nombre_archivo_cliente']['type']=="image/jpeg"||$_FILES['nombre_archivo_cliente']['type']=="image/jpg"||$_FILES['nombre_archivo_cliente']['type']=="image/png"||$_FILES['nombre_archivo_cliente']['type']=="image/gif"){
    if (is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'])){
    $nombreDirectorio = "archivo/";
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    if (is_file($nombreCompleto))
    {
    $idUnico = time();
    $nombrearchivo = $idUnico . "-" . $nombrearchivo;
    echo "Archivo repetido, se cambiara el nombre a $nombrearchivo
        <br><br>";
    }
    move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio .$nombrearchivo);

    echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
    }
    else{
        echo "No se ha podido subir el archivo <br>";
    }
}else{
        echo "solo se pueden subir archivos con el formato: jpg, jpeg,gif o png <br>";
    }
}
?>  