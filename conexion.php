<?php

$host="localhost";
$user="root";
$pw="123456";
$bd="torneo";


$conn= mysqli_connect($host,$user,$pw,$bd);

if ($conn){
    mysqli_selec_db($bd);
    print("<strong>Conectado correctamente a la Base de Datos</strong>");
}
else {
    die("<strong>Error correctamente a la Base de Datos</strong>)");
}

?>
