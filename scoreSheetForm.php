<!DOCTYPE html>
<html>

<header>
	<title>Bowling FTW</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link href="style.css" rel="stylesheet">
</header>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-2">
				<form action="scoreSheet.php" method="get">
					<h4 style="text-align:center"><b>Number of Players:</b></h4>
					<input type="text" name ="numPlayers"><br><br>
					<input type="submit" class = "btn btn-block btn-xs" value="Submit">
				</form>	
			</div>
			<div class="col-sm-6"></div>
		</div>
	</div>
</body>

</html>
