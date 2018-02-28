<ul class="nav nav-pills">
	<li role="presentation" class="nav-item"><a class="active nav-link" ref="index.php?page=1">Home</a></li>
	<li role="presentation" class="nav-item"><a class="nav-link" href="index.php?page=2">Upload</a></li>
	<li role="presentation" class="nav-item"><a class="nav-link" href="index.php?page=3">Gallery</a></li>
	<li role="presentation" class="nav-item"><a class="nav-link" href="index.php?page=4">Registration</a></li>
	<?php
	if (!isset($_SESSION["id"])) {
		echo '<li role="presentation" class="nav-item"><a class="nav-link" href="index.php?page=5">Login</a></li>';
	}
	else
	{
		echo '<li role="presentation" class="nav-item"><a class="nav-link" href="index.php?page=6">Exit</a></li>';
	}

	?>
</ul>
