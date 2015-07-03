<?php 
session_start(); 
include 'config.php';
if($_GET['action'] = "err"){
	$msg = "Incorrect username/password. Please try again, or forever leave this login system alone.";
}
?>
<html>
	<head>
		<link href="http://fonts.googleapis.com/css?family=Hind" rel="stylesheet" type="text/css">
	</head>
	<body style="font-family: Hind;">
		<fieldset>
			<legend>Register</legend>
				<form action="register.php" method="post">
					<input type="text" name="f_name" placeholder="First Name"/> <br />
					<input type="text" name="l_name" placeholder="Last Name"/> <br />
					<input type="text" name="u_name" placeholder="User Name"/> <br />
					<input type="password" name="p_word" placeholder="Password"/> <br />
					<br />
					<input type="submit" value="Register"/>
				</form>
		</fieldset>
		
		<?php
			if(isset($_SESSION['user'])){
		?>
		<fieldset>
			<legend>Login</legend>
				<h3>Lol you're already logged in as <?php echo $_SESSION['user']; ?>, get outta here ;)</h3>
				<p>Would you like to <a href="logout.php">logout</a>?</p>
				<?php
					if($_SESSION['priv'] > 0){
				?>
				<p>By the way, you're an administrator.</p>
				<?php
					} // end privl check
				?>
		</fieldset>
		<?php
		} else {
		?>
		<fieldset>
			<legend>Login</legend>
				<?php
					if($_GET['action'] == "err"){
						echo "<span style='color: red'>Incorrect username/password. Please try again, or forever leave this login system alone.</a>";
					}
				?>	
				<form action="login.php" method="post">
					<input type="text" name="u_name" placeholder="User Name"/> <br />
					<input type="password" name="p_word" placeholder="Password"/> <br />
					<br />
					<input type="submit" value="Login"/>
				</form>
		</fieldset>
		<?php
		}
		?>
		
	</body>
</html>