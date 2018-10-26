<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<?php
		$title= "First Blog";
		$author= "Mario";
		$wordCount= 400;

		include "article-header.php";
		include "useful-tools.php";

		echo "<hr><hr>";

		sayHi("Mario");
		echo "<br>";
		echo $feetInMile;
	?>
</body>
</html>