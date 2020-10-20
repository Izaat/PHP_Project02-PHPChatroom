<?php

//file properties
$name = $_FILES["myfile"]["name"];
$type = $_FILES["myfile"]["type"];
$size = $_FILES["myfile"]["size"];
$temp = $_FILES["myfile"]["tmp_name"];
$error = $_FILES["myfile"]["error"];

if ($error > 0)
	die("Error uploading file. Code $error.");

else {
	if($type == "video/avi"){
		die("That format is not allowed");
	}

	else{
	move_uploaded_file($temp, "uploaded/".$name);
	echo "Upload complete</br>";
	}
}

echo '<button onclick="goBack()">Go Back</button>';
echo '<script>';
echo 'function goBack() {';
echo 'window.history.back();';
echo '}</script>';

?>