<?php
include "connectDB.php";


$title = $conn->real_escape_string($_POST['search']);
if(!$title ==''){
$sql = 'SELECT * FROM movies where title LIKE "%'.$title.'%" LIMIT 3';
$query= mysqli_query($conn,$sql);
echo "<li style='background:white;position:fixed;' >";
if(mysqli_num_rows($query) > 0){
      
    while($row = mysqli_fetch_array($query)){
        
  echo "<option>".$row['title']."</option>";

    }
    echo "</ul>";
}else{

    echo "<option>No data found!</option>";
    echo "</ul>";
  
}
}


?>