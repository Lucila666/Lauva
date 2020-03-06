<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
     <h1> Subir un archivo</h1>
     <form enctype="multipart/form-data" action="ejecucion.php" method="post">
        <input name="archivo" type="file" />
        <button>Subir Archivo</button>
    </form>
     <h1> Crear Tabla</h1>
     <form enctype="multipart/form-data" action="creartabla.php" method="post">
         
        <button>Crear</button>
    </form>
 <?php 
 
?>
 </body>
</html>
