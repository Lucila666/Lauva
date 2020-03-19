<html>
    <head>
        <title>Lauva</title>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
<?php
 
$host="localhost";
$user="root";
$pw="";
$bd="torneo";

$conn= mysqli_connect($host,$user,$pw,$bd);

if ($conn){
    mysqli_select_db($conn,$bd);
    print("<strong>Conectado correctamente a la Base de Datos</strong>");
}
else {
    die("<strong>Error correctamente a la Base de Datos</strong>)");
}
?>
        
        <a href="index.php"><button type="button">VOLVER</button></a>
        
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
$rankA=array();
$teamA=array();
$killsA=array();
$placementA=array();
$totalA=array(); 
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
                array_push($rankA,$rank);
                $team= substr($line2, 5, 30);
                array_push($teamA,$team);
                $kills= (int)(substr($line1, 40, 4));
                array_push($killsA,$kills);
                $placement= (int)(substr($line1, 72, 5));
                array_push($placementA,$placement);
                $total= (int)(substr($line1, 105, 5));
                array_push($totalA,$total);
                $id= strstr($line2, 'ID:');
                $id= trim($id, " ID:");
                $id=(int)($id);
            }else{
                $rank= substr($line1, 5, 3);
                array_push($rankA,$rank);
                $team= substr($line2, 5, 20);
                array_push($teamA,$team);
                $kills= (int)(substr($line1, 37, 4));
                array_push($killsA,$kills);
                $placement= (int)(substr($line1, 69, 5));
                array_push($placementA,$placement);
                $total=(int)(substr($line1, 102, 5));
                array_push($totalA,$total);
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
            
            $consulta="INSERT INTO jugadores(Id,Nombre,KillScore,Pleacement,Total) VALUES('.$id.','.$team.','.$kills.','.$placement.','.$total.')";
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