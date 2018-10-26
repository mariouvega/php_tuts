<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>

	<?php include "header.html" ?>

	<h1>Calculator</h1>

	<form action="index.php" method="post">
		Num1: <input type="number" step="0.000001" name="num1"> <br>
		Num2: <input type="number" step="0.000001" name="num2"> <br>
		+ <input type="radio" name="op" value="+">
		- <input type="radio" name="op" value="-">
		x <input type="radio" name="op" value="x">
		/ <input type="radio" name="op" value="/">
		<hr>
		<input type="submit">
	</form>

	<?php

		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		$op = $_POST["op"];

		if ($op == "+") {
			echo $num1 + $num2;
		} elseif ($op == "-") {
			echo $num1 - $num2;
		} elseif ($op == "x") {
			echo $num1 * $num2;
		} elseif ($op == "/") {
			echo $num1 / $num2;
		} else {
			echo "Please select an operator.";
		}

	?>

	<br>
	<br>
	<br>
	<br>

	<hr>
	<hr>
	<h1>Grades</h1>

	<form action="index.php" method="post">
		<input type="text" name="grade">
		<input type="submit">
	</form>

	<?php

		$grade = $_POST["grade"];

		switch ($grade) {
			case 'A':
				echo "You did very well!";
				break;
			case 'B':
				echo "You did very ok!";
				break;
			case 'C':
				echo "You did very eh!";
				break;
			case 'D':
				echo "You did very bad!";
				break;
			case 'F':
				echo "You did very very bad!";
				break;
			default:
				echo "Please enter a correct grade.";
				break;
		}
	?>

	<br>
	<br>
	<br>
	<br>

	<hr>
	<hr>
	<h1>While Loops</h1>

	<!-- WHILE LOOP -->

	<?php
		$index = 1;
		while ($index <= 10) {
			echo "$index <br>";
			$index++;
		}

		$index2 = 11;
		do {
			echo "<br><p>This is the do while loop $index2</p>";
			$index2++;
		} while ($index2 <= 10);
	?>

	<br>
	<br>
	<br>
	<br>

	<hr>
	<hr>
	<h1>For Loops</h1>

	<?php
		for ($i=0; $i <= 5 ; $i++) { 
			echo "<p> $i FOR LOOP!!";
		}

		echo "<br><br>";

		$luckyNums = array(4,3,6,5,1,2,9,8,7);
		for ($i=0; $i < count($luckyNums); $i++) { 
			echo "Looping through an Array $luckyNums[$i]<br>";
		}
	?>











	<?php include "footer.html" ?>
</body>
</html>