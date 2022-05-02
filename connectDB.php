<?php


//Configue database credentials
$server = "localhost";
$user = "root";
$password = "";
$database ="movies";

//connect to database
$conn = mysqli_connect($server,$user,$password,$database);
if(!$conn){
	echo "Connection Failed";
}
?>