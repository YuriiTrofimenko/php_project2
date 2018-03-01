<ul class="nav nav-pills">
        <li role="presentation" class="nav-item"><a class="<?php if($page == 1){echo 'active';} ?> nav-link" href="index.php?page=1">Home</a></li>
        <li role="presentation" class="nav-item"><a class="<?php if($page == 2){echo 'active';} ?> nav-link" href="index.php?page=2">Upload</a></li>
        <li role="presentation" class="nav-item"><a class="<?php if($page == 3):?>active<?php endif ?>  nav-link" href="index.php?page=3">Gallery</a></li>
	<?php
	if (!isset($_SESSION["id"])) {
                echo '<li role="presentation" class="nav-item"><a class="'.(($page == 4)?'active ':'').'nav-link" href="index.php?page=4">Registration</a></li>';
		echo '<li role="presentation" class="nav-item"><a class="'.(($page == 5)?'active ':'').'nav-link" href="index.php?page=5">Login</a></li>';
	}
	else
	{
		echo '<li role="presentation" class="nav-item"><a class="'.(($page == 6)?'active ':'').'nav-link" href="index.php?page=6">Exit</a></li>';
	}

	?>
</ul>
