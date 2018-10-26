<!DOCTYPE html>
<html>
<head>
	<title>MADLIBS</title>
</head>
<body>
	<form action="index.php" method="get">
		Color: <input type="text" name="color" placeholder="..."><br>
		Plural Noun: <input type="text" name="pluralNoun" placeholder="..."><br>
		Celebrity: <input type="text" name="celebrity" placeholder="..."><br>
		<input type="submit">
	</form>
	
	<?php
		$color = $_GET["color"];
		$pluralNoun = $_GET["pluralNoun"];
		$celebrity = $_GET["celebrity"];

		echo "Roses are $color <br>";
		echo "$pluralNoun are blue<br>";
		echo "I love $celebrity";
	?>

	<hr>
	
	<?php
		$friends = array("Karen", "Arthur");
		echo $friends[0];
		$friends[1] = "Mario";
		$friends[2] = "Arthur";
		echo "<hr>";
		echo count($friends);
	?>

	<hr>

	<!-- Checkbox Forms -->
	<form action="index.php" method="post">
		Apples: <input type="checkbox" name="fruits[]" value="apples">
		Oranges: <input type="checkbox" name="fruits[]" value="oranges">
		Pears: <input type="checkbox" name="fruits[]" value="pears">
		<input type="submit">
	</form>
	<?php
		$fruits = $_POST["fruits"];
		echo $fruits[1];
	?>

	<hr>

	<form action="index.php" method="post">
		<input type="text" name="student">
		<input type="submit">
	</form>

	<!-- Associated Array -->
	<?php 
	$grades = array("Jim"=>"A+","Karen"=>"A++","Mario"=>"F-");

	echo $grades[$_POST["student"]];
	// echo $grades["Karen"];
	?>

	<hr>

	<!-- FUNCTIONS -->
	<?php
		function sayHi(){
			echo "Hi";
		}
		sayHi();

		// Passing it Parameters
		function sayHello($name, $age){
			echo "<br>Hello $name, your age is $age";
		}
		sayHello("Mario", 29);
		sayHello("Karen", 24);

	?>

	<hr>

	<?php
		function cube($num){
			return pow($num,3);
		}

		echo cube(5);
	?>

	<hr>

	<?php
	// If Else Statements
		$isMale = false;
		$isTall = false;

		if ($isMale && $isTall) {
			echo "You are a tall male.";
		} elseif ($isMale && !$isTall) {
			echo "You are a short male.";
		} elseif (!$isMale && $isTall) {
			echo "You are a tall female";
		} else {
			echo "You are a short female.";
		}

	?>

	<hr>

	<?php

		function getMax($num1, $num2, $num3) {
			if ($num1 >= $num2 && $num1 >= $num3) {
				return $num1;
			} elseif ($num2 >= $num1 && $num2 >= $num3) {
				return $num2;
			} else {
				return $num3;
			}
		}

		echo getMax(810,820,840)

	?>

</body>
</html>