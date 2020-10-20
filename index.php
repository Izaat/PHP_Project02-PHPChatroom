<html>

	<head>
		<title>Chatroom</title>
	</head>
	
	<?php
	session_start();
	?>

	
	<body align="centre" valign="middle">

		<form action="chatroom.php" method="POST">
			Please enter your name below: </br>
			<input type="text" name="username" />
			<input type="submit" name="Enter" />
			
		</form>
	</body>

	
</html>