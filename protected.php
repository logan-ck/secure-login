<?php
	session_start();
	include 'config.php';
?>
<html>
	<head>
		<link href="http://fonts.googleapis.com/css?family=Hind" rel="stylesheet" type="text/css">
	</head>
	<body>
		<center><h1>This page is protected by a Login system.</h1></center>
		<br /><br />
		<?php
			if(isset($_SESSION['user'])){
		?>
			<center>
				grats, you get to see this awesome fucking video. <br />
				<iframe width="800" height="500" src="https://www.youtube.com/embed/BgoOihBb78w" frameborder="0" allowfullscreen></iframe>
			</center>
		<?php
			} else {// end privl check 
		?>
		<center><p>please <a href="index.php">login</a> to see this page's content.</p></center>
		<fieldset>
			<legend>Login</legend>
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