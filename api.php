<?php
include "connectDB.php";
$movies = "";


//Request movies
// URl parameter 'page' was manualy changed from 1-4 to import data from the  to database
function getMovies($count){

//Add your API Key on the URL
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.themoviedb.org/3/discover/movie?api_key={API KEY}&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=4&with_watch_monetization_types=flatrate',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);

$obj = (array)json_decode($response);
$movies = (array)$obj['results'][$count];
return $movies;

}




//Add data to database
for($count=0;$count < count(getMovies($count)); $count++){
  $movie_list = getMovies($count);

$sql ='INSERT INTO movies(title,image,release_date,overview)
values(
  "'.$movie_list['original_title'].'", 
  "'.$movie_list['backdrop_path'].'", 
  "'.$movie_list['release_date'].'",
  "'.$movie_list['overview'].'"
  )';
  $query = mysqli_query($conn,$sql);
  if($query){

    echo "Successfully loaded movies to database";
  }else{

    echo "error!";
  }
}



