<?php 
session_start(); 
include "connectDB.php";


$movie_id = $conn->real_escape_string($_POST['movie_id']);



$sql = 'INSERT INTO favourites(movie_id,user_id) values("'.$movie_id.'","'.$_SESSION['user_id'].'")';
$query = mysqli_query($conn, $sql);

if($query){

    header('location:' . $_SERVER['HTTP_REFERER'].'?&response=true');

}else{

    header('location:' . $_SERVER['HTTP_REFERER'].'?&response=false');


}


?>