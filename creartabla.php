<?php

 
 $prueba=fopen("archivos/entrada.txt","r")
 or die("problemas al abrir el archivo");
        $loop = 0; 
        while (!feof($prueba)) { 
            $loop++;
            $line1 =fgets($prueba); 
            $prueba++;
            $line2 =fgets($prueba);
            
            
            $field[$loop] = explode(" ", $line1);
            $field1[$loop] = explode(" ", $line2);
            //print_r($field);
            echo '
                <div>
                    <div>Rank: '.$field[$loop][1].'</div>
                    <div>Name: '.$field1[$loop][1].'</div>
                    <div>TotalScore: '.$field[$loop][60].'</div>
                    
                </div>
            ';
            $prueba++; 
        }
fclose($prueba)         
?>

