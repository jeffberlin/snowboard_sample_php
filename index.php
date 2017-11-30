<!DOCTYPE html>
<html>

	<head>
		<title>Snowboards in PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<style type="text/css">

		html, body {
			overflow-x: hidden;
			width: 100%;
		}

		body {
			background-image: url("images/background.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			padding-left: 10%;
			padding-right: 10%;
		}

		.container-fluid {
			margin-top: 10vh;
			max-width: 1200px;
			background: rgba(0, 0, 0, 0.8);
			min-height: 100vh;
			padding: 0;
		}

		h1 {
			font-family: rooney-sans, sans-serif;
			font-style: normal;
			font-weight: 500;
			letter-spacing: .75px;
			font-size: 38pt;
			text-shadow: 0 0 2px #9b9b9b;
			color: #ffffff;
		}

		h2 {
			font-family: rooney-sans, sans-serif;
			color: #ffffff;
			text-align: left;
			letter-spacing: .8px;
			
		}

		.header {
			padding-top: 2rem;
		}

		.logo-white {
			margin-right: 1.5rem;
		}

		.snowboarder {
			width: 15rem;
		}

		.header h2 {
			padding-left: 3rem;
			margin-top: 4rem;
			margin-bottom: 1.5rem;
		}

		.boards {
			display: inline-block;
			margin-bottom: 2rem;
		}

		.boards img {
			height: 20rem;
		}

		.snowboard-images {
			background: rgba(251,251,251, .6);
			padding-top: 2rem;
			padding-bottom: 2rem;
		}
		
		
	</style>
	<body>

		<?php

			$mensBoards = "Men's Boards";

		?>

		<div class="container-fluid">

			<div class="header text-center">

				<img class="img-fluid logo-white" src="images/logo_white.png">

				<img class="img-fluid snowboarder" src="images/snowboarder.png">

				<h2><?php echo $mensBoards; ?></h2>

				<div class="snowboard-images">

					<div class="boards col-lg-3 col-md-3">

						<img class="img-fluid" src="images/board-1.png">

						<h3>Process Flying V</h3>

					</div>

					<div class="boards col-lg-3 col-md-3">

						<img class="img-fluid" src="images/board-3.png">

						<h3>Talent (women's)</h3>

					</div>

					<div class="boards col-lg-3 col-md-3">

						<img class="img-fluid" src="images/board-2.png">

						<h3>Clash</h3>

					</div>

					<div class="boards col-lg-3 col-md-3">

						<img class="img-fluid" src="images/board-4.png">

						<h3>Custom X Flying V</h3>

					</div>

					<div class="boards col-lg-3 col-md-3">

						<img class="img-fluid" src="images/board-5.png">

						<h3>Chopper LTD Marvel</h3>

					</div>

					<div class="boards col-lg-3 col-md-3">

						<img class="img-fluid" src="images/board-5.png">

						<h3>Chopper LTD Marvel</h3>

					</div>

				</div>

			</div>

		</div>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>