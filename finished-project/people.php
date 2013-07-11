<?php

	$pagetitle="People";
	include("header.php");

?>
		<h1>Meet my (imaginary) classmates!</h1>
		<nav>
			<ul>
				<li><a href="#cordelldurand"><img src="http://files.andy-bell.com/310/images/cordelldurand.jpg" alt="Cordel Durand" /></a></li>
				<li><a href="#judethatcher"><img src="http://files.andy-bell.com/310/images/judethatcher.jpg" alt="Jude Thatcher" /></a></li>
				<li><a href="#lambertatkinson"><img src="http://files.andy-bell.com/310/images/lambertatkinson.jpg" alt="Lambert Atkinson" /></a></li>
				<li><a href="#willisharrell"><img src="http://files.andy-bell.com/310/images/willisharrell.jpg" alt="Willis Harrell" /></a></li>
				<li><a href="#lesterforrest"><img src="http://files.andy-bell.com/310/images/lesterforrest.jpg" alt="Lester Forrest" /></a></li>
				<li><a href="#nigelhancock"><img src="http://files.andy-bell.com/310/images/nigelhancock.jpg" alt="Nigel Hancock" /></a></li>
			</ul>
		</nav>
		<?php

			include("data.php");
			foreach($students as $student){
				echo "<section id='$student[0]$student[1]'>";
					echo "<aside class='topten'>";
						echo "<h3>$student[6]</h3>";
						echo "<li>$student[7]</li>";
						echo "<li>$student[8]</li>";
					echo "</aside>";
				echo "</section>";
			}

		?>
<?php

	include("footer.php");

?>