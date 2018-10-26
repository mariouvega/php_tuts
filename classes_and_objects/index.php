<!DOCTYPE html>
<html>
<head>
	<title>Classes & Objects</title>
</head>
<body>
	<?php

		class Book {
			var $title;
			var $author;
			var $chapters;

			function __construct($aTitle, $aAuthor, $aChapters) {
				$this->title = $aTitle;
				$this->author = $aAuthor;
				$this->chapters = $aChapters;
			}
		}

		$book3 = new Book("Hunger Games","Marioooo", 11);
		// echo $book3->author;
		// echo $book3->title;
		// echo $book3->chapters;

		/*
		$book1 = new Book;

		$book1->title = "Lord of the Rings";
		$book1->author = "Mario";
		$book1->chapters = 7;

		echo $book1->title;

		$book2 = new Book;
		
		$book2->title = "Harry Potter";
		$book2->author = "Mario Me";
		$book2->chapters = 9;

		echo $book2->author;
		*/

	?>

	<!-- OBJECT FUNCTIONS -->
	<?php
		class Student {
			var $name;
			var $major;
			var $gpa;

			function __construct($name,$major,$gpa) {
				$this->name = $name;
				$this->major = $major;
				$this->gpa = $gpa;
			}

			function hasHonors() {
				if ($this->gpa >= 4.0) {
					return "true";
				} else {
					return "false";
				}
			}

		}

		$student1 = new Student("Karen","MBA",4.0);
		$student2 = new Student("Mario","CS",2.0);

		echo $student2->hasHonors();
	?>

	<br>

	<!-- GETTERS AND SETTERS -->

	<?php
		class Movie {
			public $title;
			private $rating;

			function __construct($title,$rating) {
				$this->title = $title;
				$this->setRating($rating);
			}

			function getRating() {
				return $this->rating;
			}

			function setRating($rating) {
				if ($rating == "G" || $rating == "R") {
					$this->rating = $rating;
				} else {
					$this->rating = "NR";
				}
			}

		}

		$movie1 = new Movie("Avengers","G");

		echo $movie1->getRating();

	?>

	<br>

	<!-- INHERITANCE -->

	<?php
		class Chef {

			function makeChicken() {
				echo "Makes chicken<br>";
			}

			function makeSalad() {
				echo "Makes salad<br>";
			}

			function makeSpecialDish() {
				echo "Makes special dish<br>";
			}

		}

		class MexicanChef extends Chef {

			function makeTacos() {
				echo "Makes tacos<br>";
			}
			function makeSpecialDish() {
				echo "Makes mole<br>";
			}
		}

		$chef = new Chef();
		$chef->makeChicken();
		$chef->makeSpecialDish();

		$mexicanchef = new MexicanChef();
		$mexicanchef->makeChicken();
		$mexicanchef->makeTacos();
		$mexicanchef->makeSpecialDish();
	?>
</body>
</html>