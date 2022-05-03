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
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    				
	    				</div>
	    			
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
				<h2>Favourite Movies</h2>
			</div>
			
		      <!-- Alert notification -->
			 <?php
			if ($_GET['delete'] == "true" ){  
						
				echo "<div class='alert alert-success'>Movie succesfully removed from favourites</div>"; 
						
					
				} 
			
			if($_GET['delete'] == "false" ){  
						
				
				
			echo "<div class='alert alert-danger'>Error! couldn't remove movie from favourites</div>"; 
			}
			?>
	         <!-- End of Alert notification -->


             <!-- Favourite movies -->
			    <div class="row ">
			
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
						$sql = 'SELECT * FROM favourites WHERE user_id="'.$_SESSION['user_id'].'"';
						$query = mysqli_query($conn,$sql);
						$num_of_rows = mysqli_num_rows($query);
						//Determining number of pages for pagination					 
						$number_of_page = ceil ($num_of_rows / $movies_per_page);

						
						$sql_limit = 'SELECT * FROM favourites inner join
                         movies on favourites.movie_id = movies.movie_id 
                         WHERE favourites.user_id = "'.$_SESSION['user_id'].'"LIMIT '.$first_page.' , '.$movies_per_page.'';
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
				            			<div class="mv-img">
				            				<img src="https://image.tmdb.org/t/p/original<?php echo $row['image'];?>" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="#"> Release Date: <?php echo $row['release_date']?></a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?php echo $row['title'];?></a></h6>
											
				            				<form action="delete_favourite.php" method="post" >
									<input type="hidden" name="favourite_id" value="<?php echo $row['favourite_id']?>">
									<button onclick="return confirm('Are you sure you want to remove <?php echo $row['title'] ?> from favourites?')" 
									 style="color:white;background:grey;border: none;float:right;margin-bottom:10px;" ><i class="ion-android-cancel"></i><span>Remove as favourite</span></button>
									</form>

										</div>
				            		</div>
							<!-- End of Movie Card -->

							<?php 


						//while loop close
							}

						}else{

							echo "<p style='color:white;'>No movies available!</p>";
						}
							
                
							?>
					
			            </div>
				   <!-- End of Favourite movies -->




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
