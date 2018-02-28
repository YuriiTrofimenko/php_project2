<?php
session_start();
include_once('pages/functions.php');
if(isset($_POST['login']) && isset($_POST['pass1']) && logins($_POST['login'], $_POST['pass1']))
{
	$_SESSION['id'] = 1;
}

$page = 1;
if(isset($_GET['page']))
{
	$page = $_GET['page'];
	if ($page == 6) {
		unset($_SESSION['id']);
		session_destroy();
	}

	else if($page == 5)
	{
		if (isset($_SESSION["id"])) {
			header("Location: index.php?page=1");
			exit;
		}
	}

	else if($page == 2)
	{
		if (!isset($_SESSION["id"])) {
			header("Location: index.php?page=5");
			exit;
		}
	}
}


?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
	<title>TODO supply a title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<header class="col-sm-12 col-md-12 col-lg-12">
			</header>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<nav class="col-sm-12 col-md-12 col-lg-12 navbar navbar-light bg-faded">
				<?php include_once('pages/menu.php'); ?>
			</nav>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<section class="col-sm-12 col-md-12 col-lg-12">
				<?php
				if(isset($_GET['page'])){
					$page = $_GET['page'];
					switch ($page){
						case 1 : {
							include_once('pages/home.php');
							break;
						}
						case 2 : {
							include_once('pages/upload.php');
							break;
						}
						case 3 : {
							include_once('pages/gallery.php');
							break;
						}
						case 4 : {
							include_once('pages/registration.php');
							break;
						}
						case 5 : {
							include_once('pages/login.php');
							break;
						}						
					}
				}
				?>
			</section>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<footer class="col-sm-12 col-md-12 col-lg-12"></footer>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
