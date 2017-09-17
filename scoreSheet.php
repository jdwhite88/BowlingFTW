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
}
body {
	background-color: orange;
}
</style>
</head>

Pins <br>
<input id="pin" type="number" name="pins">
<button onclick="updateTable()">Add to Score</button>
<br><br>

<?php
	$numofplayers = $_GET["numPlayers"];
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
				echo"<td>player$i</td>";
				echo"<td></td>";
				for( $u = 1; $u<=10; $u++ ) { 					
					echo"<td></td>";
				}
				echo"</tr>";
			}
	?>	 	
         
</table>

<script>
function updateTable() {
	var pins = document.getElementById("pin");
	
	var table = document.getElementById("table");
	var row = table.getElementsByTagName("tr")[1];
	var td = row.getElementsByTagName("td")[1];
	
	td.innerHTML = pins.value;
}
</script>

</body>
</html>
