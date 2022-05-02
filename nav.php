<?php 
session_start();
?>
<!--preloading-->
<div id="preloader">
	    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->


<!-- BEGIN | Header -->
<header class="ht-header full-width-hd">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>

						
						<!-- Autocomplete Search  -->
						<form >
                      
						<input  id="search" type="text" name="search" class="form-control nosubmit" placeholder="Search...">
						<div id="load"></div>
						</form>
					
						<!-- End Autocomplete Search  -->
				
					
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li><a  href="index.php">Home</a></li>                
						<li><a href="favourites.php">Favourites</a></li>
                        <li><a href="contact.php">Contacts</a></li>
						<?php 
											
						if($_SESSION['user_id']){
							?>

						<li class="btn dropdown first"><a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown" href="#"><i style="padding:5px;margin-top:-5px;" class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp; <i style="padding:5px;margin-top:-5px;" class="fa fa-user"></i> <?php echo $_SESSION['username'];?></a>
						<ul class="dropdown-menu level1">
								<li><a href="logout.php">Logout</a></li>
								
							</ul>
					    </li>
						
						<?php }else{?>
							<li class="btn first"><a class="loginLink" href="#">Sign In</a></li>

						<?php }?>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    <!-- search form -->
		</div>
	
</header>
<!-- END | Header -->



