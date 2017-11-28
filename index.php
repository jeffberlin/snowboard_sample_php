<!DOCTYPE html>
<html>

	<head>
		<title>Learning PHP</title>
	</head>
	<style type="text/css">

		body {
			text-align: center;
			padding-top: 10rem;
		}
		
		select {
			width: 20rem;
		}
		
	</style>
	<body>

		<?php

			$selectionone = "Hello";
			$selectiontwo = "Bye";

			

		?>

			<select>

				<option selected="">Select</option>
				<option><?php echo $selectionone; ?></option>
				<option><?php echo $selectiontwo; ?></option>

			</select>




	</body>
</html>