<?php
	include 'config.php';
	
	$username = $_POST['u_name'];
	$password = $_POST['p_word'];
	
	
	$query = sprintf("SELECT u_name, p_word FROM secure WHERE u_name='$username'",
		mysql_real_escape_string($u_name),
		mysql_real_escape_string($p_word));
		
	$result = mysql_query($query);
		
		while($row = mysql_fetch_assoc($result)) {
			$uname = $row['u_name'];
			$pword = $row['p_word'];
		}
	
	if($username == $uname){
		echo "Sorry, that username is already taken.";
	} else {
	$sql="INSERT INTO secure (f_name, l_name, u_name, p_word)
	VALUES
	('$_POST[f_name]', '$_POST[l_name]', '$_POST[u_name]', '$_POST[p_word]')";
		if (!mysql_query($sql, $con)) {
			die('Error: ' . mysql_error());
		}
	echo "Registered. Go <a href='index.php'>here</a> to login.";
	}

	mysql_close($con);
?>