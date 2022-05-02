<?php
session_start(); 
include "connectDB.php";
include "start.php";
include "nav.php";

?>
<div class="slider sliderv2">
	<div class="container">
		<div class="row">
	    	<div class="slider-single-item">
	    		<div class="movie-item">
	    			<div class="row">
	    			
	    			
	    			</div>	
	    		</div>
	    		
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items  full-width">
	<div class="row">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>Available Movies</h2>
			</div>


	         <!-- Alert notification -->
			 <?php
			if ($_GET['response'] == "true" ){  
						
				echo "<div class='alert alert-success'>movie added to favourites</div>"; 
						
					
				} 
			
			if($_GET['response'] == "false" ){  
						
				
				
			echo "<div class='alert alert-danger'>Error! couldn't add movie to favourites</div>"; 
			}
			?>
	         <!-- End of Alert notification -->





               <!-- Movies -->
			    <div class="row">
						<?php 
						
						//Determine page number
					 
						if (!isset ($_GET['page']) ) {  
							$page = 1;  
						} else {  
							$page = $_GET['page'];  
						}  

						$movies_per_page = 9;  
                        $first_page = ($page-1) * $movies_per_page; 
					

						//Get total number of movies
						$sql = 'SELECT * FROM movies';
						$query = mysqli_query($conn,$sql);
						$num_of_rows = mysqli_num_rows($query);
						//Determining number of pages for pagination					 
						$number_of_page = ceil ($num_of_rows / $movies_per_page);

						
						$sql_limit = 'SELECT * FROM movies LIMIT '.$first_page.' , '.$movies_per_page.'';
						$query_limit = mysqli_query($conn,$sql_limit);
						$i = 0;
						if(mysqli_num_rows($query_limit) > 0){
						while($row = mysqli_fetch_array($query_limit)){

							if($i % 3 == 0 ){
								echo "<div class='row'>";
								$i++;
							}
							
						

						
				             
						
						?>
					
					
					<!-- Movie Card -->
							<div  class=" col-md-4">
								<div class="mv-img" data-target="#movie<?php echo $row['movie_id']?>" data-toggle="modal">
									<img src="https://image.tmdb.org/t/p/w500<?php echo $row['image'];?>" alt="">
								</div>
								<div class="hvr-inner">
									<a  href="#"> Release Date: <?php echo $row['release_date']?>  </a>
								</div>
								<div class="title-in">
									<h6><a style="font-size:15px;font-weight:bold;"href="#">
									<?php 
									//Get string length, if too long shorten
									if(strlen($row['title']) > 45 ){
										echo substr($row['title'], 0,45)."...";

									}else{
										echo $row['title'];

									}
									
									?>
								</a></h6>
									<?php 
									
									//Determine if user logged in to add movie to favourites
									if($_SESSION['user_id']){
									?>
									<form action="add_favourite.php" method="post" >
									<input type="hidden" name="movie_id" value="<?php echo $row['movie_id']?>">
									<button onclick="return confirm('Are you sure you want to add <?php echo $row['title'] ?> as favourite?')" 
									 style="color:white;background:grey;border: none;float:right;margin-bottom:10px;" ><i class="ion-android-star"></i><span>add favorite</span></button>
									</form>
									<?php }else{ ?>
										<button class="loginLink" style="color:white;background:grey;border: none;float:right;margin-bottom:10px;" >
									<i class="ion-android-star"></i><span>add favourite</span></button>
										<?php }?>

								</div>
							</div>
					<!-- End of Movie Card -->

							<?php 


						
							}
						}else{

							echo "No movies available!";
						}
						?>	
        
			            	
			           
						</div>
						<!-- End of Movies -->
			      
			    
				<!-- Pagination -->
				<nav  data-pagination>
						<ul class="pagination">
						<?php


						if($page>=2){   
						echo "<li class='page-item'><a  class='page-link' href='index.php?page=".($page-1)."'>  Prev </a></li>";   

						}       

						for ($i=1; $i<=$number_of_page; $i++) {   
						if ($i == $page) {   
						$pageLink .= "<li class='page-item'><a class='page-link' class = 'active' href='index.php?page="  
										.$i."'>".$i." </a></li>";   
						}               
						else  {   
						$pageLink .= "<li class='page-item'><a class='page-link' href='index.php?page=".$i."'>   
										".$i." </a></li>";     
						}   
						}     
						echo $pageLink;   

						if($page<$number_of_page){   
						echo "<li class='page-item'><a class='page-link' href='index.php?page=".($page+1)."'>  Next </a></li>";   
						}   


						?>
						</ul>
						</nav>
							<!-- End Pagination -->		


			</div>
		
		</div>
	</div>
</div>

<?php
include "footer.php";
?>