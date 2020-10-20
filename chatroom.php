<?php
session_start();

//echo $_POST['username'];
$_SESSION['username']=$_POST['username'];

?>



<html>

	<head>
		<title>Chatroom</title>
	</head>

	<FRAMESET cols="150,*,150">
		<FRAME src="sidebar.php">
		
		<FRAMESET rows="500,2000">
			<FRAME src="newmessage.php">
			<FRAME src="messages.php">

		</FRAMESET>
		
		<FRAME src="messages.php">
		
		
	</FRAMESET>
	
</html>




