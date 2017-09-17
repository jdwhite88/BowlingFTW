<!DOCTYPE html>
<html>

<header>
	<title>Bowling FTW</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="style.css" rel="stylesheet">
</header>

<script type="text/javascript" src="checkSubmit.js"></script>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" align="center">
				<form action="scoreSheet.php" method="get">
					<h2 style="text-align:center"><b>Number of Players:</b></h2><br>
					<p style="text-align:center">Please enter a number between 1 and 5000:</p>
					<input type="text" class="textField" name="numPlayers" id="numPlayers" onblur="checkSubmitButton()" autofocus><br><br>
					<input type="submit" class="btn btn-primary btn-sm btn-block" value="Submit" name="Submit" id="Submit" disabled>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
