<html>
    <head>
        <title>Lauva</title>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
<?php
$torneo2=$_GET['torneo'];
echo "<h2>Tabla de posiciones del torneo ".$torneo2. "</h2>";



?>
        
        <a href="index.php"><button type="button">Home</button></a>
        <a href="grafico.php?torneo=<?php echo $torneo2;?>">Generar grafico de puntajes</a>
<?php 
$host="localhost";
$user="root";
$pw="";
$bd="torneo";


$conn= mysqli_connect($host,$user,$pw,$bd);

if ($conn){
    mysqli_select_db($conn,$bd);
    
}
else {
    die("<strong>Error al conectar a la Base de Datos</strong>)");
}
 
 

?>
        
        
        
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
                $team= substr($line2, 5, 30);
                $kills= (int)(substr($line1, 40, 4));
                $placement= (int)(substr($line1, 72, 5));
                $total= (int)(substr($line1, 105, 5));
                $id= strstr($line2, 'ID:');
                $id= trim($id, " ID:");
                $id=(int)($id);
            }else{
                $rank= substr($line1, 5, 3);
                $team= substr($line2, 5, 20);
                $kills= (int)(substr($line1, 37, 4));
                $placement= (int)(substr($line1, 69, 5));
                $total=(int)(substr($line1, 102, 5));
                $id= strstr($line2, 'ID:');
                $id= trim($id, " ID:");
                $id=(int)($id);
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
            
            $consulta="INSERT INTO jugadores(Id,Nombre,KillScore,Placement,Total) VALUES('.$id.','.$team.','.$kills.','.$placement.','.$total.')";
            $peticion=mysqli_query($conn,$consulta);
            //$info=mysqli_fetch_array($peticion);
            $prueba++; 
        }
fclose($prueba); 
mysqli_close( $conn );
  



?>
    </body>
    
    <footer>
     Creado por Lauva®. Derechos reservados.
    </footer>
</html>