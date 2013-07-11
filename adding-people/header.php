<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $pagetitle; ?> | Andy Bell's Comm 310 Experience</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<header>
		<nav>
			<h1 class="logo">Andy Bell's Comm 310 Experience</h1>
			<ul>
				<?php

					if($pagetitle=="Home"){
						echo "<li class='current'>Home</li>";
					} else {
						echo "<li><a href='index.php'>Home</a></li>";
					}

					if($pagetitle=="People"){
						echo "<li class='current'>People</li>";
					} else {
						echo "<li><a href='people.php'>People</a></li>";
					}

					if($pagetitle=="Notes"){
						echo "<li class='current'>Notes</li>";
					} else {
						echo "<li><a href='notes.php'>Notes</a></li>";
					}

					if($pagetitle=="Homework"){
						echo "<li class='current'>Homework</li>";
					} else {
						echo "<li><a href='homework.php'>Homework</a></li>";
					}

					if($pagetitle=="Projects"){
						echo "<li class='current'>Projects</li>";
					} else {
						echo "<li><a href='projects.php'>Projects</a></li>";
					}

					if($pagetitle=="About"){
						echo "<li class='current'>About</li>";
					} else {
						echo "<li><a href='about.php'>About</a></li>";
					}

				?>
			</ul>
		</nav>
	</header>
	<main>