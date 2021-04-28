<!DOCTYPE html>
	<html>
		<head>
			<title>forms</title>
		</head>
		<body>
			<h2>Welcome </h2>
				<?php
					$sleep = $_GET["sleep"];
					$drunk = $_GET["drunk"];
					$slider = $_GET["slider"];
					$check = $_GET["check"];
					if($check == "much" || $slider < "6" || $sleep <"6"){
						echo "<h2> You are not allowed to drive </h2>";
					}
					else{
						echo "<h2> You are allowed to drive </h2>";
					}

				?>				
		</body>
	</html>