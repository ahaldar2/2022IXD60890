<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>

	<?php
		echo "Hello World"
		echo "<div>Hello World</div>"
		echo "<h2>Hello World</h2>"
		echo "<p>Hello World</p>"

		$number = "number";
		$a = 5;
		$bool = true;

		$float = 0.678;

		echo '<p>'$number'</p>';
		echo '<p>'$number'</p>';
		echo 'This '+$number+' is equal to 5';
		echo "This is a quote";
		echo "<p>This is a quote</p>";

		echo (15-3)%7;

		$firstname = "Aindrila";
		$lastname = "Haldar";
		$fullname = $firstname.$lastname;

		echo '<br>'.$fullname;

		// super global variable

		echo $_GET['name'].'<br>';

		echo "My name is {$_GET['name']}! I am years{$_GET["age"] old".'<br>';

		$colors = array("Red","Yellow","Blue");

		echo $colors[0].'<br>';
		echo $colors[1].'<br>';
		echo $colors[2].'<br>';
		print_r ($colors);

	?>
	<div style="color:<?= echo $colors[0]; ?>">This text has a different color"</div>

	<?
		$colorsAssociative = [
			"red" => "#f00",
			"yellow" => "#ff0",
			"blue" => "#00f"
			];

			echo $colorsAssociative['yellow'];

	?>
	<div style="color:<?= echo $colorsAssociative['blue']; ?>">This text has a different color"</div>

	<?

		//casting
		$a = 5;
		$c = $a;

		$d = $c*2;

		echo $d;

		echo '<p>This is a paragraph.</p>';
		echo "<p>This is a paragraph.</p>";

		function print_p($v) {
			echo "<pre>",print_r($v),"</pre>";
		}

		pring_p($_GET);
		pring_p($colors);
		pring_p($colorsAssociative);


	?>
</body>
</html>