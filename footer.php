<?php 
session_start();
include "connectDB.php";
?>

                <!--login form popup-->
                <div class="login-wrapper" id="login-content">
                    <div class="login-content">
                        <a href="#" class="close">x</a>
                        <h3>Login</h3>
                        <form method="post" action="login.php" >
                            <div class="row">
                                <label for="username">
                                    Username: 
                                    <input type="text" name="username"   required="required" />
                                </label>
                            </div>
                        
                            <div class="row">
                                <label for="password">
                                    Password:
                                    <input type="password" name="password"   required="required" />
                                </label>
                            </div>
                            <div class="row">
                                <div class="remember">
                                    <div>
                                        <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                                    </div>
                                    <a href="#">Forget password ?</a>
                                </div>
                            </div>
                        <div class="row">
                            <button >Login</button>
                        </div>
                        </form>
                    
                    </div>
                </div>
                <!--end of login form popup-->



                    <!-- Get Pop up modal for movie info -->
                    <?php
                    
                 

                        $sql = 'SELECT * FROM favourites inner join
                         movies on favourites.movie_id = movies.movie_id
                         WHERE favourites.user_id = '.$_SESSION['user_id'].' LIMIT '.$first_page.' , '.$movies_per_page.'';
                      

                    $query = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($query) > 0){
                    while($row = mysqli_fetch_array($query)){

                    ?>
                    <!-- Movie Info Card -->
                    <div class="modal" tabindex="-1" id="movie<?php echo $row['movie_id']?>" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Movie Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            
                            </button>
                        </div>
                        <div class="modal-body">
                        <img src="https://image.tmdb.org/t/p/w500<?php echo $row['image'];?>" alt="">
                        <br/>
                        <h3><?php echo $row['title'];?></h3>
                            <h6>Release Date: <?php echo $row['release_date'];?></h6>
                            <br/>
                            <h6>Overview:</h6>
                            <span ><?php echo $row['overview']?></span>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="first" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End of Movie Info Card -->

                    <?php }}?>



                <footer class="ht-footer full-width-ft">
                    <div class="row">
                        <div class="flex-parent-ft">
                            <div class="flex-child-ft item1">
                                <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
                                
                            </div>
                            <div class="flex-child-ft item2">
                                <h4>Resources</h4>
                                <ul>
                                    <li><a href="#">About</a></li> 
                                    <li><a href="#">Blockbuster</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Forums</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Help Center</a></li>
                                </ul>
                            </div>
                            <div class="flex-child-ft item3">
                                <h4>Legal</h4>
                                <ul>
                                    <li><a href="#">Terms of Use</a></li> 
                                    <li><a href="#">Privacy Policy</a></li>	
                                    <li><a href="#">Security</a></li>
                                </ul>
                            </div>
                            <div class="flex-child-ft item4">
                                <h4>Account</h4>
                                <ul>
                                    <li><a href="#">My Account</a></li> 
                                    <li><a href="#">Watchlist</a></li>	
                                    <li><a href="#">Collections</a></li>
                                    <li><a href="#">User Guide</a></li>
                                </ul>
                            </div>
                        
                        </div>
                    
                    </div>
                </footer>
                <!-- end of footer v2 section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>


<script type="text/javascript">

$(document).ready(function(){
    // when any character press on the input field keyup function call
    $("#search").keyup(function(){
        $.ajax({
        type: "POST", // here used post method
        url: "search.php",//php file where retrive the post value and fetch all the matched item from database
        data:'search='+$(this).val(),//send data or search term to readname file to process
        success: function(data){
            // get the output from database on success
            $("#load").show();//show the suggestions
            $("#load").html(data);//append data in the box for selection
            $("#search").css("background","#FFF");
        }
        });
    });


    
});

// click one particular search name it's fill in textbox
$(document).on("click","option", function(){
$('#search').val($(this).text());
$('#load').fadeOut("fast");

window.location = "search_movies.php?search="+$('#search').val();
});


</script>
</body>
</html>