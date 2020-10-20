<html>
<head>
<meta http-equiv="refresh" content="10">
</head>
<body>
<?php
// this is where the message from the server will go

//connect to db
$link = mysqli_connect('localhost', 'root', '', 'foxtrot');
if (!$link)
{	die('Could not connect: ' . mysqli_error()); }
else
{ 
//echo 'were good';

}



$query = "SELECT * FROM messages";

if ($result = mysqli_query($link, $query)) {
	/*fetch associative array */
	while ($row = mysqli_fetch_row($result)) 
	{
		echo $row['3'].': '.'Room:'.$row['1'].', Tag:'.$row['2'].'</br>';
	}
	mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);

//echo rand(1,100);




?>
</body>
</html>