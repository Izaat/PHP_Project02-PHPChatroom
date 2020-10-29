<?php
echo 'new message</br>';

//ORIGINAL//////////////
//$message = $_POST['message'];
//$username = $_SESSION['username'];

session_start();
error_reporting(0);
//if (ISSET($_POST['message'], $_POST['tag'])) //original with tag column

if (ISSET($_POST['message'])){

    $link = mysqli_connect('localhost', 'root', '', 'im');
    if (!$link){	
        die('Could not connect: ' . mysqli_error()); }
    else{ 
    //echo 'new message';
    }

    $message = mysqli_real_escape_string($link, $_POST['message']);
    //$tag = mysqli_real_escape_string($link, $_POST['tag']);
    $username = mysqli_real_escape_string($link, $_SESSION['username']);

    $sql = "INSERT INTO messages (message, username)
    VALUES ('$message', '$username')";

    //starting sql
    $result = mysqli_query($link, $sql);


    /* close connection */
    mysqli_close($link);
}


echo '<html>';
echo '<head></head><body>';

//displays what you typed in
if ($displaymessage = $_POST['messages']){
	echo 'Room:'.$displaymessage.','.' ';
}
else {echo 'First!</br>'.' ';}

/*
if ($displaytag = $_POST['tag']){
	echo 'Tag:'.$displaytag;
}
else {echo 'Second!</br>';}
*/
echo $_POST['message'];

//To post texts
echo '<form action="newmessage.php" method="POST">';
//echo '<textarea name="message" rows="3" cols"50" placeholder="Enter message" name="message" ></textarea>';
echo '<input type="text" name="message" />';
echo '<input type="submit" name="Send" />';
echo '</form>';

//To post images
echo '<form action="upload.php" method="POST" enctype="multipart/form-data">';
echo '<input type="file" name="myfile"><p>';
echo '<input type="submit" value="Upload">';
echo '</form>';

echo '</body></html>';



?>
