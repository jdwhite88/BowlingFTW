<!DOCTYPE html>
<html>

<header>
	<title>Bowling FTW</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link href="style.css" rel="stylesheet">
</header>

<head>
<style>
table, th, td {
    border: 1px solid black;
	background-color: white;
	padding: 15px;
}
body {
	background-color: orange;
}
</style>
</head>

<p>Player:</p><p id="row">1</p>
<p>Frame:</p><p id="col">1</p> 

<br><br>

Pins <br>
<input id="pin" type="number" name="pins">
<button onclick="updateTable()">Add to Score</button>
<p id="test"><p>
<br><br>

<?php
	$numofplayers = $_GET["numPlayers"];
	session_start();
	$_SESSION["row"] = 1;
	$_SESSION["col"] = 1;
?>

<body>

<table style="width:100%" id="table">
  <tr>
    <th>Player</th>
    <th>1</th> 
    <th>2</th>
	<th>3</th> 
    <th>4</th>
	<th>5</th> 
    <th>6</th>
	<th>7</th> 
    <th>8</th>
	<th>9</th> 
    <th>10</th>
	<th>Total</th>
  </tr>
   <?php
		
			for( $i = 1; $i<=$numofplayers; $i++ ) {
				echo"<tr>";
				echo"<th rowspan='2'>player$i</th>";
				for( $u = 1; $u<=10; $u++ ) { 
					echo "<td></td>";
				}
				echo "<td rowspan='2'></td>";	//for the total
				echo"</tr>";
				
				echo"<tr>";
				for( $u = 1; $u<=10; $u++ ) { 
					echo "<td></td>";
				}
				echo"</tr>";
			}
	?>	 	
         
</table>

<script>
function updateTable() {
	var rowT = Number(document.getElementById("row").innerHTML);
	var colT = Number(document.getElementById("col").innerHTML);
	var pins = document.getElementById("pin");
	
	var numPlayer = <?php echo $numofplayers;?>;
	
	var test = document.getElementById("test");
	test.innerHTML = rowT;
	
	var table = document.getElementById("table");
	var row = table.getElementsByTagName("tr")[rowT];
	var td = row.getElementsByTagName("td")[colT];
	
	td.innerHTML = pins.value;
	document.getElementById("row").innerHTML = rowT + 1;
	
	if(Number(rowT) >= Number(numPlayer)) {
		document.getElementById("col").innerHTML = colT + 1;
		document.getElementById("row").innerHTML = "1";
	}
}
</script>
</body>
</html>
