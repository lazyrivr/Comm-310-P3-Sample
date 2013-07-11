<?php

	$pagetitle="People";
	include("header.php");

?>
		<h1>Meet my (imaginary) classmates!</h1>
		<nav>
			<ul>
				<?php

					include("data.php");
					foreach($students as $student){
						echo "<li><a href='#$student[0]$student[1]'><img src='http://$student[25]/310/images/$student[0]$student[1].jpg' alt='".ucfirst($student[0])." ".ucfirst($student[1])."' /></a></li>";
					}

				?>
			</ul>
		</nav>
		<?php

			include("data.php");
			foreach($students as $student){
				echo "<section id='$student[0]$student[1]'>";
					echo "<small style='color:red;'>NEW SECTION</small>";
					echo "<ul class='profile-banner'>";
						echo "<li><img src='http://$student[25]/310/images/$student[26]' alt='$student[29]' /></li>";
						echo "<li><img src='http://$student[25]/310/images/$student[27]' alt='$student[30]' /></li>";
						echo "<li><img src='http://$student[25]/310/images/$student[28]' alt='$student[31]' /></li>";
					echo "</ul>";
					echo "<ul class='profile-social'>";
						if($student[19] != "") {
							echo "<li class='twitter'><a href='http://$student[19]'>Twitter</a></li>";
						}
						if($student[20] != "") {
							echo "<li class='facebook'><a href='http://$student[20]'>Facebook</a></li>";
						}
						if($student[21] != "") {
							echo "<li class='linkedin'><a href='http://$student[21]'>LinkedIn</a></li>";
						}
						if($student[22] != "") {
							echo "<li class='blog'><a href='http://$student[22]'>Blog</a></li>";
						}
						if($student[23] != "") {
							echo "<li class='youtube'><a href='http://$student[23]'>YouTube</a></li>";
						}
						if($student[24] != "") {
							echo "<li class='mormon'><a href='http://$student[24]'>Mormon.org</a></li>";
						}
						if($student[25] != "") {
							echo "<li class='website'><a href='http://$student[25]'>Website</a></li>";
						}
					echo "</ul>";
					echo "<img src='http://$student[25]/310/$student[0]$student[1].jpg' alt='".ucfirst($student[0])." ".ucfirst($student[1])."' />";
					echo "<h1>".ucfirst($student[0])." ".ucfirst($student[1])."</h1>";
					echo "<h2>$student[2]</h2>";
					echo "<aside class='topten'>";
						echo "<h3>$student[6]</h3>";
						echo "<ul>";
							echo "<li>$student[7]</li>";
							echo "<li>$student[8]</li>";
							echo "<li>$student[9]</li>";
							echo "<li>$student[10]</li>";
							echo "<li>$student[11]</li>";
							echo "<li>$student[12]</li>";
							echo "<li>$student[13]</li>";
							echo "<li>$student[14]</li>";
							echo "<li>$student[15]</li>";
							echo "<li>$student[16]</li>";
						echo "</ul>";
					echo "</aside>";
					echo "<p>$student[3]</p>";
					echo "<p>$student[4]</p>";
					echo "<p>$student[5]</p>";
					echo "<h2>$student[17]</h2>";
					echo "<p>$student[18]</p>";
				echo "</section>";
			}

		?>
<?php

	include("footer.php");

?>