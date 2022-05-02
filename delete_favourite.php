<?php 
session_start(); 
include "connectDB.php";


$favourite_id = $conn->real_escape_string($_POST['favourite_id']);



$sql = 'DELETE FROM favourites  WHERE user_id ="'.$_SESSION['user_id'].'" AND favourite_id="'.$favourite_id .'"';
$query = mysqli_query($conn, $sql);

if($query){

    header('location:' . $_SERVER['HTTP_REFERER'].'?&delete=true');

}else{

    header('location:' . $_SERVER['HTTP_REFERER'].'?&delete=false');


}


?>