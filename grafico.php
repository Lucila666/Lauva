
<script>
window.onload = function () {
var titulo = "Valentina genia"
var team = {one:"Team Solo Mid", two:"Sniper Abusers", three:"Rogue", four:"Team Squidward", five:"RCO White", six:"Sentinels", seven:"lil poggies", eight:"VOL", nine:"Golden Guardians", ten:"Flying saucerorrs", eleven:"P.R.O", twelve:"Team FiRE", thirteen:"SMILE", forteen:"PTM", fifteen:"PVPXGeeshGnaske", sixteen:"MSK", seventeen:"STINKY", eighteen: "Griefers", nineteen:"Aqualix Esports", twenty:"FVK", twentyone:"equip21", twentytwo:"equip22", twentythree:"equipo23", twentyfour:"equip24", twentyfive:"equip25" };
let team1Points = [10, 15]
let team2Points = [12, 8]
let team3Points = [12, 8]
let team4Points = [12, 8]
let team5Points = [12, 8]
let team6Points = [12, 8]
let team7Points = [12, 8]
let team8Points = [12, 8]
let team9Points = [12, 8]
let team10Points = [12, 8]
let team11Points = [12, 8]
let team12Points = [12, 8]
let team13Points = [12, 8]
let team14Points = [12, 8]
let team15Points = [12, 8]
let team16Points = [12, 8]
let team17Points = [12, 8]
let team18Points = [12, 8]
let team19Points = [12, 8]
let team20Points = [12, 8]
let team21Points = [12, 8]
let team22Points = [12, 8]
let team23Points = [12, 8]
let team24Points = [12, 8]
let team25Points = [12, 8]
//Better to construct options first and then pass it as a parameter
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
		dataPoints: [
			{ y: team1Points[0], label: team.one },
			{ y: team2Points[0], label: team.two },
			{ y: team3Points[0], label: team.three },
			{ y: team4Points[0], label: team.four },
			{ y: team5Points[0], label: team.five },
			{ y: team6Points[0], label: team.six },
			{ y: team7Points[0], label: team.seven },
			{ y: team8Points[0], label: team.eight },
			{ y: team9Points[0], label: team.nine },
			{ y: team10Points[0], label: team.ten },
			{ y: team11Points[0], label: team.eleven },
			{ y: team12Points[0], label: team.twelve },
			{ y: team13Points[0], label: team.thirteen },
			{ y: team14Points[0], label: team.forteen },
			{ y: team15Points[0], label: team.fifteen },
			{ y: team16Points[0], label: team.sixteen },
			{ y: team17Points[0], label: team.seventeen },
			{ y: team18Points[0], label: team.eighteen },
			{ y: team19Points[0], label: team.nineteen },
			{ y: team20Points[0], label: team.twenty },
			{ y: team21Points[0], label: team.twentyone },
			{ y: team22Points[0], label: team.twentytwo },
			{ y: team23Points[0], label: team.twentythree },
			{ y: team24Points[0], label: team.twentyfour },
			{ y: team25Points[0], label: team.twentyfive },
		]
	},
	{
		type: "stackedColumn",
		name: "Kill points",
		showInLegend: "true",
		yValueFormatString: "# Points",
		dataPoints: [
			{ y: team1Points[1]},
			{ y: team2Points[1]},
			{ y: team3Points[1] },
			{ y: team4Points[1]},
			{ y: team5Points[1]},
			{ y: team6Points[1]},
			{ y: team7Points[1]},
			{ y: team8Points[1]},
			{ y: team9Points[1]},
			{ y: team10Points[1]},
			{ y: team11Points[1]},
			{ y: team12Points[1]},
			{ y: team13Points[1]},
			{ y: team14Points[1]},
			{ y: team15Points[1]},
			{ y: team16Points[1]},
			{ y: team17Points[1]},
			{ y: team18Points[1]},
			{ y: team19Points[1]},
			{ y: team20Points[1]},
			{ y: team21Points[1]},
			{ y: team22Points[1]},
			{ y: team23Points[1]},
			{ y: team24Points[1]},
			{ y: team25Points[1]},

		]
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
		dataPoints: [
			{ y: team1Points[0] + team1Points[1]},
			{ y: team2Points[0] + team2Points[1]},
			{ y: team3Points[0] + team3Points[1]},
			{ y: team4Points[0] + team4Points[1]},
			{ y: team5Points[0] + team5Points[1]},
			{ y: team6Points[0] + team6Points[1]},
			{ y: team7Points[0] + team7Points[1]},
			{ y: team8Points[0] + team8Points[1]},
			{ y: team9Points[0] + team9Points[1]},
			{ y: team10Points[0] + team10Points[1]},
			{ y: team11Points[0] + team11Points[1]},
			{ y: team12Points[0] + team12Points[1]},
			{ y: team13Points[0] + team13Points[1]},
			{ y: team14Points[0] + team14Points[1]},
			{ y: team15Points[0] + team15Points[1]},
			{ y: team16Points[0] + team16Points[1]},
			{ y: team17Points[0] + team17Points[1]},
			{ y: team18Points[0] + team18Points[1]},
			{ y: team19Points[0] + team19Points[1]},
			{ y: team20Points[0] + team20Points[1]},
			{ y: team21Points[0] + team21Points[1]},
			{ y: team22Points[0] + team22Points[1]},
			{ y: team23Points[0] + team23Points[1]},
			{ y: team24Points[0] + team24Points[1]},
			{ y: team25Points[0] + team25Points[1]},
		]
	}]
};

$("#chartContainer").CanvasJSChart(options);
}
</script>
<div id="chartContainer" style="height: 850px; width: 98%;"></div>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
