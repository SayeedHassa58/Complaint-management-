<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "complaint_management";

$conn = mysqli_connect($servername, $username, $password, $db);

if($conn->connect_error){
	die("Connection faild : ".$conn->connect_error);
}

?>