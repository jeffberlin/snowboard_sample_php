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
			margin-bottom: 3rem;
		}

		.boards img {
			height: 22rem;
			margin-bottom: 1rem;
		}

		.snowboard-images {
			background: rgba(251,251,251, .6);
			padding-top: 2rem;
			padding-bottom: 2rem;
		}

		.button {
			border-radius: 3px;
			color: #ffffff;
			background-color: #000000;
			border: none;
			padding: .5rem;
			font-size: 12pt;
			cursor: pointer;
			letter-spacing: .8px;
		}

		.button:focus {
			outline: none;
		}

		.button:active {
			transform: translateY(.1rem);
		}
		
		
	</style>
	<body>

		<?php

			$mensBoards = "Men's Boards";
			$womensBoards = "Women's Boards";

			$hiddenBoards = ["Flight Attendant Split", "Fish", "Trick Pony", "Family Tree Mystery Malolo", "Family Tree Skeleton Key", "Name Dropper", "Family Tree Dump Truck Split", "Instigator"];

		?>

		<div class="container-fluid">

			<div class="header text-center">

				<img class="img-fluid logo-white" src="images/logo_white.png">

				<img class="img-fluid snowboarder" src="images/snowboarder.png">

				<h2><?php echo $mensBoards; ?></h2>

				<div class="snowboard-images" id="snowboard-images">

					<div class="row">

						<div class="boards col-lg-3 col-md-3">

							<img class="img-fluid" src="images/board_1.png">

							<h3>Flight Attendant</h3>

						</div>

						<div class="boards col-lg-3 col-md-3">

							<img class="img-fluid" src="images/board_2.png">

							<h3>Custom Flying V</h3>

						</div>

						<div class="boards col-lg-3 col-md-3">

							<img class="img-fluid" src="images/board_13.png">

							<h3>Custom X Flying V</h3>

						</div>

						<div class="boards col-lg-3 col-md-3">

							<img class="img-fluid" src="images/board_4.png">

							<h3>Process Flying V</h3>

						</div>

						<div class="boards col-lg-3 col-md-3">

							<img class="img-fluid" src="images/board_5.png">

							<h3>Process</h3>

						</div>

						<div class="boards col-lg-3 col-md-3">

							<img class="img-fluid" src="images/board_6.png">

							<h3>Process Off-Axis</h3>

						</div>

						<div class="boards col-lg-3 col-md-3">

							<img class="img-fluid" src="images/board_7.png">

							<h3>Deep Thinker</h3>

						</div>

						<div class="boards col-lg-3 col-md-3">

							<img class="img-fluid" src="images/board_8.png">

							<h3>Free Thinker</h3>

						</div>

					</div>

					<!-- div for hidden boards in the list -->

					<div id="more-mens" style="display: none;">

						<div class="row">

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_9.png">

								<h3><?php echo $hiddenBoards[0]; ?></h3>

							</div>

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_10.png">

								<h3><?php echo $hiddenBoards[1]; ?></h3>

							</div>

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_11.png">

								<h3><?php echo $hiddenBoards[2]; ?></h3>

							</div>

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_12.png">

								<h3><?php echo $hiddenBoards[3]; ?></h3>

							</div>

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_15.png">

								<h3><?php echo $hiddenBoards[6]; ?></h3>

							</div>

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_3.png">

								<h3><?php echo $hiddenBoards[4]; ?></h3>

							</div>

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_14.png">

								<h3><?php echo $hiddenBoards[5]; ?></h3>

							</div>

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_16.png">

								<h3><?php echo $hiddenBoards[7]; ?></h3>

							</div>

						</div>

					</div>

					<button class="button" id="button-mens" onclick="showMoreMensBoards()">See More</button>
					<button class="button" id="button-less-mens" onclick="showLessMensBoards()" style="display: none;">See Less</button>

				</div>

					<h2><?php echo $womensBoards; ?></h2>

					<div class="snowboard-images">

						<div class="row">

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_3.png">

								<h3>Talent</h3>

							</div>

							<div class="boards col-lg-3 col-md-3">

								<img class="img-fluid" src="images/board_6.png">

								<h3>Déjà Vu</h3>

							</div>

							<div class="boards col-lg-3 col-md-3" id="more-womens" style="display: none;">

								<img class="img-fluid" src="images/board_8.png">

								<h3>Free Thinker</h3>

							</div>

						</div>

						<button class="button" id="button-womens" onclick="showMoreWomensBoards()">See More</button>

						<button class="button" id="button-less-womens" onclick="showLessWomensBoards()" style="display: none;">See Less</button>

					</div>

				</div>

			</div>

		</div>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>