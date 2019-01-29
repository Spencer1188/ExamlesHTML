<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comming Soon</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/materialize.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
</head>
<body>
	<div class="pageloader"></div>
		<div class="row" style="height: 100%;">
			<div class="col s6 black-half half">
				<div class="row set-right">
					<div class="box col s4 white">
						<div class="row">
							<p id="day" class="col s12 big black-text"></p>
							<p class="col s12 black-text">day</p>
						</div>
					</div>
					<div class="box col s4 white">
						<div class="row">
							<p id="hour" class="col s12 big black-text"></p>
							<p class="col s12 black-text">hour</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col s6 white-half half">
				<div class="row set-left">
					<div class="box col s4 black">
						<div class="row">
							<p id="min" class="col s12 big"></p>
							<p class="col s12">min</p>
						</div>
					</div>	
					<div class="box col s4 black">
						<div class="row">
							<p id="sec" class="col s12 big"></p>
							<p class="col s12">sec</p>
						</div>
					</div>
				</div>
			</div>
	</div>
	
</body>
	<script src="js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	<script>
			$(document).ready(function() {
				$(".pageloader").fadeOut("slow");
			});
	</script>
</html>
