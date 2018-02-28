<h3>Login</h3>
<?php
if(!isset($_POST['logbtn']))
{
	?>
	<form id="logform" class='cmxform' action="index.php?page=5" method="post">
		<div class="form-group">
			<label for="cname">Login:</label>
			<input id="cname" type="text" class="form-control" name="login" placeholder="mylogin" minlength="3" maxlength="30" required>
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input id="password" type="password" class="form-control" name="pass1" placeholder="mypassword" required>
		</div>
		<button type="submit" class="btn btn-primary" name="logbtn">Login</button>
	</form>
	<?php
}
else
{
	if(logins($_POST['login'], $_POST['pass1']))
	{
		echo "<h3/><span style='color:green;'>Вы вошли!</span><h3/>";
	}
}
?>