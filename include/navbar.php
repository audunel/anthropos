<div class="navbar">
	<ul>
		<?php
		$c = "";
		
		if (is_null(getCurrentPage())) { $c = " class='active'"; }
		
		echo "<li><a$c href='index.php'>Home</a></li>";
		
		foreach ($pages as $title => $link)
		{
			$c = "";
			if (getCurrentPage() == $link[0]) { $c = " class='active'"; }
			echo "<li><a$c href='index.php?p=$link[0]'>$title</a></li>";
		}
		
		echo "<li><a href='logout.php'>Log Out, " . $_SESSION["username"] . "</a></li>";
		
		?>
	</ul>
</div>