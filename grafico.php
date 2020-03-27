<html>
    <head>
        <title>Lauva</title>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    </head>
    
    <body>
    <?php
    $torneo1=$_GET['torneo'];
    echo "<h2>Grafico de puntos del torneo ".$torneo1. "</h2>";
    ?>
    <a href="index.php"><button type="button">Home</button></a></html>
    <a href="creartabla.php?torneo=<?php echo $torneo1;?>">Tabla de puntajes</a>
<?php
 
$host="localhost";
$user="root";
$pw="";
$bd="torneo";
$conn= mysqli_connect($host,$user,$pw,$bd);

$killsB=array();
$placementB=array();
$nombresB=array();

mysqli_select_db($conn,$bd) or die("<strong>Error correctamente a la Base de Datos</strong>)");

$consulta = "SELECT KillScore FROM jugadores";
$resultado = mysqli_query($conn,$consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
while ($row_recupero= mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    foreach($row_recupero as $col_value){
        array_push($killsB,$col_value);
    }
}
mysqli_free_result($resultado);



$consulta1 = "SELECT Placement FROM jugadores";
$resultado1 = mysqli_query($conn,$consulta1 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
while ($row_recupero1= mysqli_fetch_array($resultado1, MYSQLI_ASSOC)){
    foreach($row_recupero1 as $col_value){
        array_push($placementB,$col_value);
    }
}
mysqli_free_result($resultado1);

$consulta2 = "SELECT Nombre FROM jugadores";
$resultado2 = mysqli_query($conn,$consulta2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
while ($row_recupero2= mysqli_fetch_array($resultado2, MYSQLI_ASSOC)){
    foreach($row_recupero2 as $col_value){
        array_push($nombresB,$col_value);
    }
}
mysqli_free_result($resultado2);

mysqli_close( $conn );
?>

<script type="text/javascript">
    
var kills= <?php echo json_encode($killsB);?>;
var placement= <?php echo json_encode($placementB);?>;
var nombres= <?php echo json_encode($nombresB);?>;
var datapoint1=[];
var datapoint2=[];
var datapoint3=[]
var long=30;
for (var i=0; i<long; i++) {
    datapoint1.push({ y: Number(placement[i]), label: nombres[i] });
    datapoint2.push({ y: Number(kills[i]),label: nombres[i]});
    datapoint3.push({ y:Number(placement[i]) + Number(kills[i])});
}

window.onload = function () {
var titulo = "Puntajes"

var options = {
	animationEnabled: true,
	colorSet: "colorSet2", 
	dataPointWidth: 50, //ancho de las barras

	title:{
		text: titulo 
	},
      axisX:{
        labelFontSize: 13,
		interval: 1
      },	
	axisY:{
		title: "Points",
		labelFontSize: 20,
	},	
	toolTip: {
		shared: true,
		reversed: true,
//fontColor: "Black"
	},
	data: [{
		type: "stackedColumn",
		name: "Placement Points",
//		color: "#BF9820",
		showInLegend: "true",
		yValueFormatString: "# Points",
		dataPoints: datapoint1 
     	},
	{
		type: "stackedColumn",
		name: "Kill points",
		showInLegend: "true",
		yValueFormatString: "# Points",
		dataPoints: datapoint2 
        },
    {
		type: "line",
		color: "black", //color general
		lineColor: "transparent", //color de la linea
		markerColor: "transparent", //color de los puntos
		name: "Total points",
		indexLabel: "{y}",
		showInLegend: "true",
		yValueFormatString: "# Points",
		indexLabelFontSize: 15,
		dataPoints: datapoint3
        }]
};

$("#chartContainer").CanvasJSChart(options);
}
</script>
<div id="chartContainer" style="height: 850px; width: 98%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
    <footer>
     Creado por Lauva®. Derechos reservados.
    </footer>
</html>