<?php
	session_start();
	include 'config.php';
	
	$username = $_POST['u_name'];
	$password = $_POST['p_word'];
	
	$query = sprintf("SELECT priv, u_name, p_word FROM secure WHERE u_name='$username'",
		mysql_real_escape_string($u_name),
		mysql_real_escape_string($p_word),
		mysql_real_escape_string($id));
		
	$result = mysql_query($query);
		
		while($row = mysql_fetch_assoc($result)) {
			$privl = $row['priv'];
			$uname = $row['u_name'];
			$pword = $row['p_word'];
		}
	
	if ($password == $pword) {
		echo "Thanks for logging in, captain. If you werent redirected, you were supposed to be.<br />";
		
		$_SESSION['user'] = $username;
		$_SESSION['priv'] = $privl;
		
		header("Location: " . $_SERVER['HTTP_REFERER']);
	} else {
		header("Location: index.php?action=err");
	}
?>
