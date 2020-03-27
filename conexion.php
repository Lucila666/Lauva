<html>
    <body>
    <?php
//Netbeans desde mi pc
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
    die("<strong>Error al conectar a la Base de Datos</strong>)");
}
   

?>
<a href="creartabla.php?a=<?php echo $conn; ?>" > Holi </a>
    </body>
</html>
