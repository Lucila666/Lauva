<<?php
 
$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('archivos')){
    mkdir('archivos',0777,true);
    if(file_exists('archivos')){
        if(move_uploaded_file($guardado,'archivos/entrada.txt')){
            
            echo "Archivo guardado con exito";
        }else{
            echo "Archivo no se pudo guardar";
        }
    }
}else{
    if(move_uploaded_file($guardado,'archivos/entrada.txt')){
        echo "Archivo guardado con exito";
    }else{
        echo "Archivo no se pudo grabar";
    }
    
}
?>
<h2>Se ha cargado correctamente el archivo /br</h2>
<a href="index.php"><button type="button">VOLVER</button></a>