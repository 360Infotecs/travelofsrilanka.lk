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
	<body class="no-overflow" data-color="theme-1">
		<?php
			include('admin/common/DBCon.php');
			global $con;
		?>	
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
									<li class="type-1 active">
										<a href="index.php">Home<span class="fa fa-angle-down"></span></a>
									</li>
									<li class="type-1">
										<a href="aboutus.html">About<span class="fa fa-chevron-right"></span></a>
									</li>
									<li class="type-1">
										<a href="packages.html">Packages<span class="fa fa-angle-down"></span></a>
									</li>
									<li class="type-1">
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

		<!-- TOP BANNER -->
		<div class="top-baner">
			<div class="arrows">
				<div class="swiper-container main-slider-5" data-autoplay="5" data-loop="1" data-speed="6000" data-center="0" data-slides-per-view="1">
					<div class="swiper-wrapper">
						<div class="swiper-slide active" data-val="0">	
							<img class="center-image" src="img/home_5/slider.jpg" alt="">
						</div>
						<div class="swiper-slide" data-val="1"> 
							<img class="center-image" src="img/home_5/slider1.jpg" alt="">
						</div>
						<div class="swiper-slide" data-val="2"> 
							<img class="center-image" src="img/home_5/slider2.jpg" alt="">
						</div>
						<div class="swiper-slide" data-val="3"> 
							<img class="center-image" src="img/home_5/slider3.jpg" alt="">
						</div>
						<div class="swiper-slide" data-val="4"> 
							<img class="center-image" src="img/home_5/slider4.jpg" alt="">
						</div>
						<div class="swiper-slide" data-val="5"> 
							<img class="center-image" src="img/home_5/slider5.jpg" alt="">
						</div>
					</div>    
					<div class="pagination pagination-hidden poin-style-1"></div>
				</div>
			</div>	
		</div>

		<!-- CONTRY-ITEM -->
		<!--div class="main-wraper padd-110">
			<div class="container clearfix contry-wrapp">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						<div class="second-title style-3">
							<h4 class="subtitle color-dark-2-light">our tours</h4>
							<h2 class="color-dark-2">tours to any place in the Sri Lanka</h2>
						</div>					
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9">
						<div class="row">
							<div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
								<a class="contry-item">
									<img class="img-responsive" src="img/theme-5/country_1.png" alt="">
									<h5>europe</h5>
								</a>							
							</div>
							<div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
								<a class="contry-item">
									<img class="img-responsive" src="img/theme-5/country_2.png" alt="">
									<h5>asia</h5>
								</a>							
							</div>
							<div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
								<div class="contry-item">
									<img class="img-responsive" src="img/theme-5/country_3.png" alt="">
									<h5>africa</h5>
								</div>							
							</div>
							<div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
								<a class="contry-item">
									<img class="img-responsive" src="img/theme-5/country_4.png" alt="">
									<h5>north america</h5>
								</a>							
							</div>
							<div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
								<a class="contry-item">
									<img class="img-responsive" src="img/theme-5/country_5.png" alt="">
									<h5>south america</h5>
								</a>							
							</div>
							<div class="col-mob-12 col-xs-6 col-sm-4 col-md-2">
								<a class="contry-item">
									<img class="img-responsive" src="img/theme-5/country_6.png" alt="">
									<h5>australia</h5>
								</a>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div-->

		<!-- Tour Item-->
		<div class="main-wraper padd-90">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="second-title">
							<h4 class="color-dark-2-light">our directions</h4>					
	    					<h2>Featured Destinations in Sri Lanka</h2>
	    				</div>
					</div>
				</div>
	    		<div class="row">
					<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
						<div class="swiper-wrapper">
							<?php
								$get_places = mysqli_query($con, "SELECT * FROM `tosl_places` WHERE `tosl_place_status` = '1' ORDER BY `tosl_place_id` DESC");
								
								while($get_prows = mysqli_fetch_array($get_places)){
									echo"
										<div class='swiper-slide' data-val='0'>
											<div class='city-entry bg-grey-2'>
												<div class='tour-block tour-block-s-9 hover-green radius-5 underline-block'>
													<div class='tour-layer delay-1'></div> 
													<img src='admin/images/places/".$get_prows['tosl_place_img']."' class='res-img' alt=''>
													<div class='tour-caption'>
														<div class='vertical-align'>
															<h3 class='underline hover-it'>".$get_prows['tosl_place_name']."</h3>
														</div>
													</div>
												</div>
											</div>							
										</div>
									";
								}
							?>						
						</div>
						<div class="pagination poin-style-2"></div>
					</div>
	   		    </div>
			</div>
		</div>
		
		<!-- COUNTER-ENTRY -->
		<div class="main-wraper color-2 padd-90">
			<img class="center-image" src="img/home_5/bg-counter.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="second-title style-2">
							<h4 class="color-white-light">our directions</h4>
	    					<h2>why we are the best</h2>
	    				</div>
					</div>
				</div>
				<div class="counters row">
					<div class="col-mob-12 col-xs-6 col-sm-4">
						<div class="counter-entry">
							<img class="counter-icon" src="img/theme-5/c_icon_1.png" alt="">
							<div class="counter-number underline color-white" data-to="25968" data-speed="3000">100</div>
							<h5 class="counter-title color-white">happy clients & customers</h5>
						</div>
					</div>
					<div class="col-mob-12 col-xs-6 col-sm-4">
						<div class="counter-entry">
							<img class="counter-icon" src="img/theme-5/c_icon_2.png" alt="">
							<div class="counter-number underline color-white" data-to="55598" data-speed="3000">20</div>
							<h5 class="counter-title color-white">amazing tour</h5>
						</div>
					</div>
					<div class="col-mob-12 col-xs-6 col-sm-4">
						<div class="counter-entry">
							<img class="counter-icon" src="img/theme-5/c_icon_3.png" alt="">
							<div class="counter-number underline color-white" data-to="5568" data-speed="3000">10</div>
							<h5 class="counter-title color-white">Comfortable Vehicles</h5>
						</div>
					</div>											
				</div>
			
			</div>
		</div>

		<div class="main-wraper padd-90">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="second-title">
							<h4 class="color-dark-2-light">best cities for you</h4>					
	    					<h2>most popular cities in Sri Lanka</h2>
	    				</div>
					</div>
				</div>
	    		<div class="row">
					<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
						<div class="swiper-wrapper">
							<?php
								$get_cities = mysqli_query($con, "SELECT * FROM `tosl_cities` WHERE `tosl_city_status` = '1' ORDER BY `tosl_city_id` DESC");
								
								while($get_crows = mysqli_fetch_array($get_cities)){
									echo"
										<div class='swiper-slide' data-val='0'>
											<div class='city-entry bg-grey-2'>
												<div class='tour-block tour-block-s-9 hover-green radius-5 underline-block'>
													<div class='tour-layer delay-1'></div> 
													<img src='admin/images/cities/".$get_crows['tosl_city_img']."' class='res-img' alt=''>
													<div class='tour-caption'>
														<div class='vertical-align'>
															<h3 class='underline hover-it'>".$get_crows['tosl_city_name']."</h3>
														</div>
													</div>
												</div>
											</div>							
										</div>
									";
								}
							?>					
						</div>
						<div class="pagination poin-style-2"></div>
					</div>
	   		    </div>
			</div>
		</div>	

		<!--div class="main-wraper bg-grey-2 padd-90">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">
						<div class="second-title">
							<h4 class="color-dark-2-light">testimonials</h4>					
	    					<h2>what our clients say</h2>
	    				</div>
					</div>
				</div>
	    		<div class="row">
		    		<div class="top-baner arrows">
						<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
							<div class="swiper-wrapper">
								<div class="swiper-slide" data-val="0">
									<div class="tour-item style-3">
										<div class="radius-top">
										 	<img src="img/home_5/testimonal_1.jpg" alt="">
										 	<div class="tour-weather">sea tour</div>
										</div>
										<div class="tour-desc bg-white">
											<div class="rate">
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
										  	</div>
											<img class="tm-people" src="img/home_5/people_1.jpg" alt="">
											<h4><a class="tour-title color-dark-2 link-green" href="#">inna lunoe</a></h4>
											<div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
									 	</div>
									</div>							
								</div>
								<div class="swiper-slide" data-val="1">
									<div class="tour-item style-3">
										<div class="radius-top">
										 	<img src="img/home_5/testimonal_2.jpg" alt="">
										 	<div class="tour-weather">mountains</div>
										</div>
										<div class="tour-desc bg-white">
											<div class="rate">
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
										  	</div>									
											<img class="tm-people" src="img/home_5/people_2.jpg" alt="">
											<h4><a class="tour-title color-dark-2 link-green" href="#">alina, mark</a></h4>
											<div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
									 	</div>
									</div>							 
								</div>
								<div class="swiper-slide" data-val="2">
									<div class="tour-item style-3">
										<div class="radius-top">
										 	<img src="img/home_5/testimonal_3.jpg" alt="">
										 	<div class="tour-weather">sea tour</div>
										</div>
										<div class="tour-desc bg-white">
											<div class="rate">
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
										  	</div>									
											<img class="tm-people" src="img/home_5/people_3.jpg" alt="">
											<h4><a class="tour-title color-dark-2 link-green" href="#">george ross</a></h4>
											<div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
									 	</div>
									</div>							
								</div>
								<div class="swiper-slide" data-val="4">
									<div class="tour-item style-3">
										<div class="radius-top">
										 	<img src="img/home_5/testimonal_4.jpg" alt="">
										 	<div class="tour-weather">mountains</div>
										</div>
										<div class="tour-desc bg-white">
											<div class="rate">
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
												<span class="fa fa-heart color-green"></span>
										  	</div>									
											<img class="tm-people" src="img/home_5/people_3.jpg" alt="">
											<h4><a class="tour-title color-dark-2 link-green" href="#">mikel, kim</a></h4>
											<div class="tour-text color-grey-3">“Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa rta nequetiam.”</div>
									 	</div>
									</div>							 
								</div>					
							</div>
							<div class="pagination  poin-style-1 pagination-hidden"></div>
						</div>
		  		        <div class="swiper-arrow-left offers-arrow color-3"><span class="fa fa-angle-left"></span></div>
						<div class="swiper-arrow-right offers-arrow color-3"><span class="fa fa-angle-right"></span></div>
		   		    </div>
	    		</div>			
			</div>
		</div-->

	    <!--div class="main-wraper padd-90">
	        <div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-sm-offset-2">
						<div class="second-title">
							<h4 class="color-dark-2-light">hotels</h4>					
	    					<h2>Special hotels for You</h2>
	    				</div>
					</div>
				</div>        
	        	<div class="row">
	    			<div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
	    				<div class="hotel-small style-2 clearfix">
	    					<a class="hotel-img black-hover" href="#">
	    						<img class="img-responsive radius-3" src="img/home_5/small_hotel_1.jpg" alt="">
	    						<div class="tour-layer delay-1 radius-3"></div>        						
	    					</a>
	    					<div class="hotel-desc">
	        					<h5>from <strong>$273</strong></h5>	        					
	        					<h4>bristol Hotel</h4>
								<div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
							</div>
	    				</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">    			
	    				<div class="hotel-small style-2 clearfix">
	    					<a class="hotel-img black-hover" href="#">
	    						<img class="img-responsive radius-3" src="img/home_5/small_hotel_4.jpg" alt="">
	    						<div class="tour-layer delay-1 radius-3"></div>   						
	    					</a>
	    					<div class="hotel-desc">
	        					<h5>from <strong>$273</strong></h5>    					
	        					<h4>bristol Hotel</h4>
								<div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
							</div>
	    				</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">    			
	    				<div class="hotel-small style-2 clearfix">
	    					<a class="hotel-img black-hover" href="#">
	    						<img class="img-responsive radius-3" src="img/home_5/small_hotel_7.jpg" alt="">
	    						<div class="tour-layer delay-1 radius-3"></div>        						
	    					</a>
	    					<div class="hotel-desc">
	        					<h5>from <strong>$273</strong></h5>    					
	        					<h4>bristol Hotel</h4>
								<div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
							</div>
	    				</div>        				        				
	    			</div>
	    			<div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
	    				<div class="hotel-small style-2 clearfix">
	    					<a class="hotel-img black-hover" href="#">
	    						<img class="img-responsive radius-3" src="img/home_5/small_hotel_2.jpg" alt="">
	    						<div class="tour-layer delay-1 radius-3"></div>        						
	    					</a>
	    					<div class="hotel-desc">
	        					<h5>from <strong>$273</strong></h5>    					
	        					<h4>bristol Hotel</h4>
								<div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
							</div>
	    				</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">    			
	    				<div class="hotel-small style-2 clearfix">
	    					<a class="hotel-img black-hover" href="#">
	    						<img class="img-responsive radius-3" src="img/home_5/small_hotel_5.jpg" alt="">
	    						<div class="tour-layer delay-1 radius-3"></div>        						
	    					</a>
	    					<div class="hotel-desc">
	        					<h4>bristol Hotel</h4>
	        					<h4>from $273</h4>
								<div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
							</div>
	    				</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">    			
	    				<div class="hotel-small style-2 clearfix">
	    					<a class="hotel-img black-hover" href="#">
	    						<img class="img-responsive radius-3" src="img/home_5/small_hotel_8.jpg" alt="">
	    						<div class="tour-layer delay-1 radius-3"></div>        						
	    					</a>
	    					<div class="hotel-desc">
	        					<h5>from <strong>$273</strong></h5>    					
	        					<h4>bristol Hotel</h4>
								<div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
							</div>
	    				</div>        				        				
	    			</div>      			       		
	    			<div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
	    				<div class="hotel-small style-2 clearfix">
	    					<a class="hotel-img black-hover" href="#">
	    						<img class="img-responsive radius-3" src="img/home_5/small_hotel_3.jpg" alt="">
	    						<div class="tour-layer delay-1 radius-3"></div>        						
	    					</a>
	    					<div class="hotel-desc">
	        					<h5>from <strong>$273</strong></h5>    					
	        					<h4>bristol Hotel</h4>
								<div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
							</div>
	    				</div>
	    			</div>
	    			<div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">    			
	    				<div class="hotel-small style-2 clearfix">
	    					<a class="hotel-img black-hover" href="#">
	    						<img class="img-responsive radius-3" src="img/home_5/small_hotel_6.jpg" alt="">
	    						<div class="tour-layer delay-1 radius-3"></div>        						
	    					</a>
	    					<div class="hotel-desc">
	        					<h5>from <strong>$273</strong></h5>    					
	        					<h4>bristol Hotel</h4>
								<div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
							</div>
	    				</div>
					</div>
	    			<div class="col-xs-12 col-sm-6 col-md-4 clear-sm-2 clear-md-3">
	    				<div class="hotel-small style-2 clearfix">
	    					<a class="hotel-img black-hover" href="#">
	    						<img class="img-responsive radius-3" src="img/home_5/small_hotel_9.jpg" alt="">
	    						<div class="tour-layer delay-1 radius-3"></div>						
	    					</a>
	    					<div class="hotel-desc">
	        					<h5>from <strong>$273</strong></h5>    					
	        					<h4>bristol Hotel</h4>
								<div class="hotel-loc">2 Place de la Sans Défense, Puteaux, Paris, France.</div>
							</div>
	    				</div>        				        				
	    			</div>         		
	        	</div>
	        </div>
	    </div-->	  	    	  	       
	 
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
		<script src="js/isotope.pkgd.min.js"></script>	
		<script src="js/jquery.viewportchecker.min.js"></script>
		<script src="js/jquery.countTo.js"></script>
		<script src="js/jquery.mousewheel.min.js"></script>	
		<script src="js/all.js"></script>
	</body>
</html>				   