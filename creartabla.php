<?php

 
 $prueba=fopen("prueba.txt","r")
 or die("problemas al abrir el archivo");
        $loop = 0; 
        while (!feof($prueba)) { 
            $loop++;
            $line = fgets($prueba); 
            $field[$loop] = explode ('|', $line);

            echo '
                <div>
                    <div>Nombre: '.$field[$loop][0].'</div>
                    <div>Email: '.$field[$loop][1].'</div>
                    <div>Website: '.$field[$loop][2].'</div>
                    <div>Teléfono: '.$field[$loop][3].'</div>
                </div>
';
            $prueba++; 
        }
         
?>

