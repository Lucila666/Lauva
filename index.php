<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
 <head>
  <title>Prueba de PHP</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
     
     <h1> Bienvenidos!</h1>
     <h2> 1. Para comenzar debe subir el archivo con los datos a analizar.</h2>
     <form enctype="multipart/form-data" action="ejecucion.php" method="post">
        <input name="archivo" type="file" />
        <button>Subir Archivo</button>
    </form>
     <h2> Tabla de posiciones:</h2>
     <table>
         <thead>
                    <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Team</th>
                        <th scope="col">Kills</th>
                        <th scope="col">Placement points</th>
                        <th scope="col">Total</th>
                    </tr>
         </thead>
     </table>
 <?php

 
 $prueba=fopen("archivos/entrada.txt","r")
 or die("problemas al abrir el archivo");
        $loop = 0; 
        while (!feof($prueba)) { 
            $loop++;
            $line1 =fgets($prueba);
            $prueba++;
            $line2 =fgets($prueba);
            if ($loop==1) {
                $rank= substr($line1, 8, 3);
                $team= substr($line2, 5, 20);
                $kills= substr($line1, 40, 4);
                $placement= substr($line1, 72, 5);
                $total= substr($line1, 105, 5);
            }else{
                $rank= substr($line1, 5, 3);
                $team= substr($line2, 5, 20);
                $kills= substr($line1, 37, 4);
                $placement= substr($line1, 69, 5);
                $total= substr($line1, 102, 5);
            }
            
            echo '
                
                <table> 
                    <tr>
                        <td>'.$rank.'</td>
                        <td>'.$team.'</td>
                        <td>'.$kills.'</td>
                        <td>'.$placement.'</td>
                        <td>'.$total.'</td>
                    </tr>

                </table>
            ';
            $prueba++; 
        }
fclose($prueba)         
?>
     
 </body>
 <footer>
     Creado por Lauva. Derechos reservados.
 </footer>
</html>
