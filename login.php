<?php
session_start(); 
include "connectDB.php";


//sanitise input data to avoid SQL injection
$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);


$sql = 'SELECT * FROM users WHERE email="'.$username.'" OR username="'.$username.'" AND password="'.md5($password).'"';
$query = mysqli_query($conn,$sql);

if($query){
$row = mysqli_fetch_array($query);

$_SESSION['user_id'] = $row['user_id'];
$_SESSION['username'] = $row['username'];
$_SESSION['email'] = $row['email'];

header('location:' . $_SERVER['HTTP_REFERER']);

}else{


}


?>