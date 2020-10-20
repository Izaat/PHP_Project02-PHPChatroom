<?php

session_start();
error_reporting(0);
if (ISSET($_POST['message'], $_POST['tag']))
{

$link = mysqli_connect('localhost', 'root', '', 'foxtrot');
if (!$link)
{	die('Could not connect: ' . mysqli_error()); }
else
{ 
//echo 'were good';

}



$message = mysqli_real_escape_string($link, $_POST['message']);
$tag = mysqli_real_escape_string($link, $_POST['tag']);
$username = mysqli_real_escape_string($link, $_SESSION['username']);

$sql = "INSERT INTO messages (message, tag, username)
VALUES ('$message', '$tag', '$username')";

$result = mysqli_query($link, $sql);


/* close connection */
mysqli_close($link);
}


echo '<html>';
echo '<head></head><body>';

//displays what you typed in

if ($displaymessage = $_POST['message']){
	echo 'Room:'.$displaymessage.','.' ';
}
else {
	echo 'First!'.' ';
}

if ($displaytag = $_POST['tag']){
	echo 'Tag:'.$displaytag;
}

else {
	echo 'Second!';
}




echo '<form action="newmessage.php" method="POST">';
echo '<input type="text" placeholder="Enter Room Number" name="message" />';
echo '<input type="text" placeholder="Enter Tag Number" name="tag" />';
echo '<input type="submit" name="Send" />';
echo '</form>';

echo '<form action="upload.php" method="POST" enctype="multipart/form-data">';
echo '<input type="file" name="myfile"><p>';
echo '<input type="submit" value="Upload">';

echo '</form>';

echo '</body></html>';



?>