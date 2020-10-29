<html>
<head>
<meta http-equiv="refresh" content="2">

</head>
<body>
<?php
//page refresh rate every 2 seconds
//Change port for C:\xampp\phpMyAdmin if not connected to SQL
// this is where the message from the server will go

//connect to db
$link = mysqli_connect('localhost', 'root', '', 'im');
if (!$link)
{	die('Could not connect: ' . mysqli_error()); }
else
{ 
echo 'were good</br>';
}

//connect to database
//mysql_select_db(im)

//query the database
$query = "SELECT * FROM messages";

//fetch the results / convert result to array
if ($result = mysqli_query($link, $query)) {
    
	/*fetch associative array */
	while ($row = mysqli_fetch_row($result)) 
	{
        //number is column and row as specified echo $row['username-columnid'].' says: '.$row['message-columnid'].'</br>';
		echo $row['3'].' says: '.$row['1'].'</br>';
	}
	mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);

//echo rand(1,100);




?>
</body>
</html>
