<!DOCTYPE html>
<html>
<head>
	<title>First PHP</title>
</head>
<body>
	<form action="index.php" method="get">
		Name: <input type="text" name="uName" placeholder="...">
		<br>
		Age: <input type="number" name="uAge" placeholder="...">
		<br>
		<input type="submit">
	</form>
	Hello <?php echo $_GET["uName"] ?>
	<br>
	Your age is <?php echo $_GET["uAge"] ?>
	<?php 
		$name = 'Mario';
		$age = 29;
		echo "<p>Hello, my name is $name and I am $age years old.</p>";
		echo strtoupper($name);
		echo "<br>";

		$phrase = "I like big booty and I cannot lie";
		echo str_replace("booty", "butts", $phrase);
		echo "<br>";
		echo "Original phrase was '$phrase' I used a method to change a targeted string!!";
	?>
	<hr>
	<h3>Basic Calculator</h3>
	<form action="index.php" method="get">
		First number: <input type="number" name="num1">
		<br>
		Second number: <input type="number" name="num2">
		<br>
		<input type="submit" value="+">
	</form>
	Addtion: <?php echo $_GET["num1"] + $_GET["num2"] ?>
	Subtraction: <?php echo $_GET["num1"] - $_GET["num2"] ?>
	Division: <?php echo $_GET["num1"] / $_GET["num2"] ?>
	Multiplication: <?php echo $_GET["num1"] * $_GET["num2"] ?>
	Remainder: <?php echo $_GET["num1"] % $_GET["num2"] ?>
</body>
</html>