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
					<input type="text" name="numPlayers" id="numPlayers" onblur="checkSubmitButton()" autofocus><br><br>
					<input type="submit" class="btn btn-primary btn-xs btn-block" value="Submit" name="Submit" id="Submit" disabled>
					<script type="text/javascript" src="checkSubmit.js"></script>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
