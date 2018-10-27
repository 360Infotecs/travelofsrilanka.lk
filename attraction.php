<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="travel-of-srilanka" content="yes" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no" />
		<link rel="shortcut icon" href="favicon.ico"/>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<title>Travel of Sri Lanka</title>
		
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
		    google_ad_client: "ca-pub-6587409369783973",
		    enable_page_level_ads: true
		  });
		</script>
	</head>
	
	<body data-color="theme-1">
		<?php
			include('admin/common/DBCon.php');
			global $con;
		?>	
		<!--div class="style-page">
        	<div class="wrappers">
        		<div class="conf-button">
        			<span class="fa fa-cog"></span>
         			<h6>Theme options</h6>
         		</div>
         		<a href="index.php" class="site-logo">
         			<img src="img/theme-1/logo_dark.png" alt="">
         		</a>
		  		<div class="color-block">
		    		<h5>change color</h5>
		    		<div class="entry bg-1" data-color="theme-1"></div>
					<div class="entry bg-2" data-color="theme-2"></div>
			 		<div class="entry bg-3" data-color="theme-3"></div>
			 		<div class="entry bg-4" data-color="theme-4"></div>
			 		<div class="entry bg-5" data-color="theme-5"></div>
			 		<div class="entry bg-6" data-color="theme-6"></div>
			 		<div class="entry bg-7" data-color="theme-7"></div>
			 		<div class="entry bg-8" data-color="theme-8"></div>
			 		<div class="entry bg-9" data-color="theme-9"></div>
		  		</div>
		  		<div class="color-block">
		  			<h5>Layout style</h5>
		    		<div class="check-option active">
		    			<span class="boxed">Boxed</span>
		    		</div>
			  		<div class="check-option">
			  			<span class="noboxed">Wide</span>
			  		</div>
		  		</div>
				<div class="color-block">
				    <h5>Elements style</h5>
					<div class="check-option active">
						<span class="rounded">Rounded</span>
					</div>
				  	<div class="check-option">
				  		<span class="norounded">Not rounded</span>
				  	</div>
				</div>
		  		<div class="color-block">
		    		<h5>Header style</h5>
		     		<div class="header-style">
		      			<a href="menu_style_1.html" class="active">
		        			<img src="img/landing/header_1.png" alt="">
		      			</a>
			  			<a href="menu_style_2.html">
			    			<img src="img/landing/header_2.png" alt="">
			  			</a>
			  			<a href="menu_style_3.html">
			    			<img src="img/landing/header_3.png" alt="">
			  			</a>
			  			<a href="menu_style_4.html">
			  				<img src="img/landing/header_4.png" alt="">
			  			</a>
			  			<a href="menu_style_5.html">
			    			<img src="img/landing/header_5.png" alt="">
			  			</a>
			  			<a href="menu_style_6.html">
			    			<img src="img/landing/header_6.png" alt="">
			  			</a>
			 		</div>
		  		</div>
		  		<div class="color-block">
		    		<h5>Footer style</h5>
	        		<div class="header-style">
				    	<a href="footer_style_1.html" class="active">
				        	<img src="img/landing/footer_1.png" alt="">
				       	</a>
				       	<a href="footer_style_2.html">
				        	<img src="img/landing/footer_2.png" alt="">
				       	</a>
				       	<a href="footer_style_3.html">
				        	<img src="img/landing/footer_3.png" alt="">
				       	</a>
				       	<a href="footer_style_4.html">
				        	<img src="img/landing/footer_4.png" alt="">
				       	</a>
				       	<a href="footer_style_5.html">
				        	<img src="img/landing/footer_5.png" alt="">
				       	</a>
			 		</div>
		  		</div>
			</div>
	  	</div-->

		<!-- LOADER -->
		<!--div class="loading dr-blue">
			<div class="loading-center">
				<div class="loading-center-absolute">
					<div class="object object_four"></div>
					<div class="object object_three"></div>
					<div class="object object_two"></div>
					<div class="object object_one"></div>
				</div>
			</div>
		</div-->

		<!-- HEADER -->
  		<header class="color-1 hovered menu-3">
   			<div class="container">
   				<div class="row">
   	  	 			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  	  	    			<div class="nav">
   	  	    				<a href="index.php" class="logo">
   	  	    					<img src="img/logo.png" alt="Travel of Sri Lanka">
   	  	    				</a>
   	  	    				<div class="nav-menu-icon"><a href="#"><i></i></a></div>
   	  	 					<nav class="menu">
								<ul>
									<li class="type-1">
										<a href="index.php">Home<span class="fa fa-angle-down"></span></a>
									</li>
									<li class="type-1">
										<a href="aboutus.html">About<span class="fa fa-chevron-right"></span></a>
									</li>
									<li class="type-1">
										<a href="packages.html">Packages<span class="fa fa-angle-down"></span></a>
									</li>
									<li class="type-1 active">
										<a href="attraction.php">Attraction<span class="fa fa-angle-down"></span></a>
									</li>
									<li class="type-1">
										<a href="contactus.html">Contact<span class="fa fa-chevron-right"></span></a>
									</li>
								</ul>
		   					</nav>
		   				</div>
   	  	 			</div>
   	  			</div>
   			</div>
  		</header>

		<!-- INNER-BANNER -->
		<div class="inner-banner style-6">
			<img class="center-image" src="img/bgg.jpg" alt="">
			<div class="vertical-align">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
				  			<h2 class="color-white">Attraction</h2>
		  				</div>
					</div>
				</div>
			</div>
		</div>

		<!-- TEAM -->
		<div class="main-wraper padd-70-70">
			<div class="container">
		        <!--div class="filter style-2">
		            <ul class="filter-nav">
		                <li class="selected"><a href="#all" data-filter="*">all</a></li>
		                <li><a href="#tours" data-filter=".tours">tours</a></li>
		                <li><a href="#cruises" data-filter=".cruises">cruises</a></li>
		                <li><a href="#flights" data-filter=".flights">flights</a></li>
		                <li><a href="#hotels" data-filter=".hotels">hotels</a></li>
		            </ul>
		        </div-->
				<div class="filter-content row">
					<div class="grid-sizer col-mob-12 col-xs-6 col-sm-4 col-md-4 col-lg-4"></div>
					<?php
						$get_cities = mysqli_query($con, "SELECT * FROM `tosl_places` WHERE `tosl_place_status` = '1' ORDER BY `tosl_place_id` DESC");
						
						while($get_crows = mysqli_fetch_array($get_cities)){
							$j = $get_crows['tosl_place_id'];
							if ($j % 2 != 0){
								echo "
									<div class='item tours gal-item col-mob-12 col-xs-6 col-sm-4 col-md-4 col-lg-4'>
										<img class='img-full img-responsive' src='admin/images/places/".$get_crows['tosl_place_img']."' alt=''>
										<div class='tour-layer delay-1'></div>
										<div class='vertical-align'>
											<h3 class='color-white'><b>".$get_crows['tosl_place_name']."</b></h3>
											<h5 class='color-white'>".$get_crows['tosl_place_tag']."</h5>
										</div>
									</div>
								";
							} 
							else {
								echo "
									<div class='item flights gal-item col-mob-12 col-xs-6 col-sm-8 col-md-8 col-lg-8'>
										<img class='img-full img-responsive' src='admin/images/places/".$get_crows['tosl_place_img']."' alt=''>
										<div class='tour-layer delay-1'></div>
										<div class='vertical-align'>
											<h3 class='color-white'><b>".$get_crows['tosl_place_name']."</b></h3>
											<h5 class='color-white'>".$get_crows['tosl_place_tag']."</h5>
										</div>
									</div>
								";
							}
						}
					?>
				</div>
			</div>
		</div>

		<!-- FOOTER -->
		<footer class="bg-dark type-2">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	    				<div class="footer-block">
	    					<img src="img/logo-white.png" alt="" class="logo-footer" />
	    					<div class="f_text color-grey-7"></div>
		    				<div class="footer-share">
		    					<a href="#"><span class="fa fa-facebook"></span></a>
		    					<a href="#"><span class="fa fa-instagram"></span></a>
		    				</div>
		    			</div>
		    		</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		                <div class="footer-block">
		                    <h6>Contact Info</h6>
		            	    	<div class="contact-info">
		                        	<div class="contact-line color-grey-3">
		                        		<i class="fa fa-map-marker"></i>
		                        		<span>No.96, Nugagoda Watta, Waskaduwa</span>
		                        	</div>
									<div class="contact-line color-grey-3">
										<i class="fa fa-phone"></i>
										<a href="tel:+94 776 093 921">+94 776 093 921</a>
									</div>
									<div class="contact-line color-grey-3">
										<i class="fa fa-envelope-o"></i>
										<a href="mailto:travelofsrilanka@gmail.com">travelofsrilanka@gmail.com</a>
									</div>
									<div class="contact-line color-grey-3">
										<i class="fa fa-globe"></i>
										<a href="http://travelofsrilanka.lk">travelofsrilanka.lk</a>
									</div>
								</div>
						 	</div>
						</div>
		    		</div>
		    	</div>
		    	<div class="footer-link bg-black">
		    	  	<div class="container">
		    	  		<div class="row">
		    	  			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		    	  			    <div class="copyright">
								<span>&copy; 2018 All rights reserved. <a href="http://www.360infotecs.com/">360InfoTecs</a></span>
							</div>
		    	  		</div>
		    	  	</div>
		    	</div>
		    </div>
		</footer>
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/idangerous.swiper.min.js"></script>
		<script src="js/jquery.viewportchecker.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/jquery.mousewheel.min.js"></script>
		<script src="js/jquery.circliful.min.js"></script>
		<script src="js/all.js"></script>
	</body>
</html>
