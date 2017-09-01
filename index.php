<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php


$page_title = 'login';



if(isset($errors) && !empty ($errors))
{
    echo '<p id="err_msg">Oops! there was a problem:<br>';
    foreach ($errors as $msg)
    {
        echo "-$msg<br>";
    
    }
    echo 'please try again or <a href="index.php"> Register </a></p>';
    
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Crazzy Carz </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Carz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
<!--/banner-section-->
	<div id="demo-1" data-zs-src='["images/2.jpg", "images/1.jpg", "images/3.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		   <div class="header-top">
		    <!-- /header-left -->
		          <div class="header-left">
				  <!-- /sidebar -->
				         <div id="sidebar"> 
						     <h4 class="menu">Menu  </i> </h4>
						         <ul>
								<li><a href="recommend.php"><span>Recommend Me </span></a></li>
							
							    <li><a href="searchcar.php">Hire Cars</a></li>
							    <li><a href="compare.php">Compare Cars</a></li>
							    <li><a href="news.php">News And Reviews</a></li>
							    <li><a href="tips.php">Tips </a></li>
							   	<li class="last"><a href="contact.php">Contact Us</a></li>
							   
							 	
						   </ul>
						   <div id="sidebar-btn">
							   <span></span>
							   <span></span>
							   <span></span>
							  
						   </div>
					   </div>

							 <script>
								  var sidebarbtn = document.getElementById('sidebar-btn');
									var sidebar = document.getElementById('sidebar');
								   sidebarbtn.addEventListener('click', function () {
								  if(sidebar.classList.contains('visible')){
										sidebar.classList.remove('visible'); 
								   }else {
										sidebar.className = 'visible';
									}
								  });
								</script>
					    <!-- //sidebar -->
		<!--			  <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-tag"></span> Discounts On New Cars » </a></div> -->
					  <div class="tag"><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></div>
					</div>
				  <!-- //header-left -->
		        <!--     <div class="search-box">
						<div id="sb-search" class="sb-search">
							<form action="#" method="post">
								<input name="name" class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
						<!-- search-scripts -->
					<!--	<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts 
					    <ul>
							
							<li>
							<a href="#" data-toggle="modal" data-target="#myModal4"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Select Your Location</a></li>
			 -->
			 				
							<li><button id="showRight" class="navig">Login </button>
							 <div class="cbp-spmenu-push">
							<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
							<h3>Login</h3>
							<div class="login-inner">
								<div class="login-top">
								 <form action="login_action.php" method="post">
									<input type="text" name="user_name"  placeholder="user_name" class="name active" required=""/>
									<input type="password" name="password" class="password" placeholder="Password" required=""/>	
									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span> Remember me</label>
								</form>
								<div class="login-bottom">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
													
							</div>
							<div class="social-icons">
							<ul> 
								<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
								<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
								<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
							</ul> 
						</div>		
							</div> 
							</nav>
						</div> 
				<script src="js/classie2.js"></script>
						<script>
							var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
								showRight = document.getElementById( 'showRight' ),
								body = document.body;
				
							showRight.onclick = function() {
								classie.toggle( this, 'active' );
								classie.toggle( menuRight, 'cbp-spmenu-open' );
								disableOther( 'showRight' );
							};
				
							function disableOther( button ) {
								if( button !== 'showRight' ) {
									classie.toggle( showRight, 'disabled' );
								}
							}
						</script>
						<!--Navigation from Right To Left-->
						    </li>
						</ul>
						
					</div>
				
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
		    <!--banner-info-->
			<div class="banner-info">
			  <h1><a href="index.php">Crazzy <span class="logo-sub">Carz</span> </a></h1>
			    <h2><span>COME LOOK </span> <span>AT THE SELECTION! </span></h2>
				<p>Eye it – Hire it – Drive it!</p>
			     
			</div>
				<!--//banner-info-->	
		</div>
</div>
<!-- discounts -->
			
			<!-- //discounts-->
				<!-- sign-up-->
				<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabe1">
				<div class="modal-dialog sign" role="document">
					<div class="modal-content about">
						<div class="modal-header one">
							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								<div class="discount one">
									<h3>Sign Up</h3>
									
								</div>							
						</div>
						 <div class="modal-body about">
								<div class="login-top sign-top one">
								 <form action="register.php"  method="POST">
									<input type="text" id="first_name"name="first_name" class="name active" placeholder="First Name" required=""Value="<?php if(isset($_POST['first_name']))
        echo $_POST['first_name'];?>">
									<input type="text" id="last_name"name="last_name" class="name active" placeholder="Last Name" required=""Value="<?php if(isset($_POST['last_name']))
        echo $_POST['last_name'];?>">
									<input type="text" id="user_name"name="user_name" class="name active" placeholder="User Name" required=""Value="<?php if(isset($_POST['user_name']))
        echo $_POST['user_name'];?>">
									<input type="text" id="email" name="email "class="email" placeholder="Email" required="" Value="<?php if(isset($_POST['email']))
        echo $_POST['email'];?>">
									<input type="password" id="p_word1" name="p_word1" class="password" placeholder="Password" required="" Value="<?php if(isset($_POST['p_word1']))
        echo $_POST['p_word1'];?>">	
									<input type="password"  id="p_word2" name="p_word2" class="password" placeholder="Confirm Password" required="" Value="<?php if(isset($_POST['p_word2']))
        echo $_POST['p_word2'];?>">	
								     <input type="text" id= "billing_address" name="billing_address"  placeholder="Billing Address" required="" Value="<?php if(isset($_POST['billing_address']))
        echo $_POST['billing_address'];?>">
								<input type="text" id= "City "name="City"  placeholder="City" required="" Value="<?php if(isset($_POST['City']))
        echo $_POST['City'];?>">
								<input type="text" id= "Country "name="Country" placeholder="Country" required="" Value="<?php if(isset($_POST['Country']))
        echo $_POST['Country'];?>">
								
								
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span> Remember me?</label>
									<div class="login-bottom one">
									<ul>
										<li>
											<a href="#">Forgot password?</a>
										</li>
										<li>
										
										  <input type="submit" value="SIGN UP">
										
										</li>
									<div class="clearfix"></div>
								</ul>
								</div>	
								</form>
								
							</div>
							
							
						 </div>
						 <div class="social-icons">
									<ul> 
										<li><a href="#"><span class="icons"></span><span class="text">Facebook</span></a></li>
										<li class="twt"><a href="#"><span class="icons"></span><span class="text">Twitter</span></a></li>
										<li class="ggp"><a href="#"><span class="icons"></span><span class="text">Google+</span></a></li>
									</ul> 
									</div>
								
					</div>
				</div>
			</div>
			<!-- //sign-up-->
				<!-- /location-->
			
			<!-- //location-->
<!--//banner-section-->
	<!--/featured_section-->
	<div class="featured_section_w3l">
		<div class="container">
		      <h3 class="tittle">FEATURED CARS</h3>
	               <div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Rent Per Day</a></li>
							<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Rent Per Week</a></li>
							<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree">Special Rent Offer</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							   <div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/pcsbvdmtu1brxbefqwov.jpg" alt="Crazzy Carz">
													<div class="car_description">
														 <h4><a href="single.php">Audi S6 2008</a></h4>
														 <div class="price"><span class="fa fa-dollar"></span><span class="font25">€125 - €200 </span></div>
														 <p>Estimated Price</p>
														 <div class="date"></div>
														 
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												<form>
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<input type="text" name="phone" class="phone" placeholder="Phone" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
														<option value="city">Dublin</option>
														<option value="city">Limerick</option>
														<option value="city">Cork</option>
														<option value="city">Galway</option>
														<option value="city">Killarney</option>
														<option value="city">Others...</option>
													</select>
												   </div>	
													<input type="submit" value="Done">
													
													</div>
												</form>
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/volkswagen-golf-1997-2003-1493267380.71.jpg" alt="Crazzy Carz">
													<div class="car_description">
														 <h4><a href="single.php">Volkswagen Golf 2001</a></h4>
														 <div class="price"><span class="fa fa-dollar"></span><span class="font25">€300 - €550</span></div>
														 <p>Estimated Price</p>
					
					                                            </div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												<form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<input type="text" name="phone" class="phone" placeholder="Phone" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
																<option value="null"> Select City</option>
														<option value="city">Dublin</option>
														<option value="city">Limerick</option>
														<option value="city">Cork</option>
														<option value="city">Galway</option>
														<option value="city">Killarney</option>
														<option value="city">Others...</option>
													</select>
												   </div>	
													<input type="submit" value="Done">
													
													</div>
												</form>
												
												 <?php               	
                                  if(isset($_POST["submit"]))
								  {
						$enter_date=date("Y-m-d");					 
						$enter_time=date("h:i:s A");
						
						
						$name=$_POST["name"];
			            $email=$_POST["email"];
						$phone=$_POST["phone"];						
						$city=$_POST["city"];
						
												 $query1="insert into enquiry set name='$name',email='$email',time='$enter_time',date='$enter_date',phone_no='$phone_no',city='$city'";
												$query_exe=mysql_query($query1);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Message Send Sucessfully')</script>";
													 echo "<script>window.location.href='index.php'</script>";
	
												 }
												 
												 else
												 {
													  echo "<script>alert('Message not Send Sucessfully')</script>";
												 }
												 
												 
											}
                                           ?>     
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/239174.jpg" alt="Crazzy Carz">
													<div class="car_description">
														 <h4><a href="single.php">Chevrolet Silverado 1500</a></h4>
														 <div class="price"><span class="fa fa-dollar"></span><span class="fontspan">€50 - € 150</div>
														 <p>Weekend Flash Sale </p>
														 <div class="date">Limited Time Offer</div>
			                                                                                                                                        
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4>Be the first to know</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<input type="text" name="phone" class="phone" placeholder="Phone" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
																			<option value="null"> Select City</option>
														<option value="city">Dublin</option>
														<option value="city">Limerick</option>
														<option value="city">Cork</option>
														<option value="city">Galway</option>
														<option value="city">Killarney</option>
														<option value="city">Others...</option>
													</select>
												   </div>		
													<input type="submit" value="Done">
													
													</div>
												</form>
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
								   <div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/dakota-rt2.jpg" alt="Crazzy Carz">
													<div class="car_description">
														 <h4><a href="single.php">Dodge Dakota 1992</a></h4>
														 <div class="price"><span class="fa fa-dollar"></span><span class="font25"> €100 - € 175 </span></div>
														 <p>Estimated Price</p>
													
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/dollar.png" alt="Crazzy Carz"> Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
															<option value="null"> Select City</option>
														<option value="city">Dublin</option>
														<option value="city">Limerick</option>
														<option value="city">Cork</option>
														<option value="city">Galway</option>
														<option value="city">Killarney</option>
														<option value="city">Others...</option>
													</select>
													</div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
											
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/maxresdefault.jpg" alt="Crazzy Carz">
													<div class="car_description">
														 <h4><a href="#">Nissan 200SX 1995</a></h4>
														 <div class="price"><span class="fa fa-dollar"></span><span class="font25">€ 175 - €325</span></div>
														 <p>Estimated Price</p>
						                                                                                                                                
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/dollar.png" alt="Crazzy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
														<option value="null"> Select City</option>
																	<option value="null"> Select City</option>
														<option value="city">Dublin</option>
														<option value="city">Limerick</option>
														<option value="city">Cork</option>
														<option value="city">Galway</option>
														<option value="city">Killarney</option>
														<option value="city">Others...</option>
													</select>
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
													</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/mercury.jpg" alt="Crazzy Carz">
													<div class="car_description">
														 <h4><a href="single.php"> Mercury Milan 2010 </a></h4>
														 <div class="price"><span class="fa fa-dollar"></span><span class="font25"> €80 - €120 </span></div>
														 <p>Weekend Flash Sale </p>
														 <div class="date">Limited Time Offer</div>
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/dollar.png" alt="Crazzy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
											   <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
																<option value="null"> Select City</option>
														<option value="city">Dublin</option>
														<option value="city">Limerick</option>
														<option value="city">Cork</option>
														<option value="city">Galway</option>
														<option value="city">Killarney</option>
														<option value="city">Others...</option>
													</select>
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
								
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
								
								<div class="section__content clearfix">
							   <!-- /card1 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/2009-jaguar-xf-front-three-quarter-motion.jpg" alt="Crazzy Carz">
													<div class="car_description">
														 <h4><a href="single.php">Jaguar XF 2009</a></h4>
														 <div class="price"><span class="fa fa-dollar"></span><span class="font25"> €125 - €175 </span></div>
														 <p>Estimated Price</p>
					
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/dollar.png" alt="Crazzy Carz"> Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
																<option value="null"> Select City</option>
														<option value="city">Dublin</option>
														<option value="city">Limerick</option>
														<option value="city">Cork</option>
														<option value="city">Galway</option>
														<option value="city">Killarney</option>
														<option value="city">Others...</option>
													</select>
													</div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card1 -->
									<!-- /card2 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/66011273.jpg" alt="Crazzy Carz">
													<div class="car_description">
														 <h4><a href="single.php"> BMW 5 Series 1999</a></h4>
														 <div class="price"><span class="fa fa-dollar"></span><span class="font25"> €350 - €475 </span></div>
														 <p>Estimated Price</p>
														 </div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/dollar.png" alt="Crazzy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
												 <form action="#" method="post">
													<input type="text" name="name" class="name active" placeholder="Name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													<select id="country1" onchange="change_country(this.value)" class="frm-field required">
															<option value="null"> Select City</option>
														<option value="city">Dublin</option>
														<option value="city">Limerick</option>
														<option value="city">Cork</option>
														<option value="city">Galway</option>
														<option value="city">Killarney</option>
														<option value="city">Others...</option>
													</select>
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card2 -->
									<!-- /card3 -->
								  <div class="card effect__hover">
									<div class="card__front">
									  <span class="card__text">
									       <div class="img-grid">
													<img src="images/22164950001_large.jpg" alt="Crazzy Carz">
													<div class="car_description">
														 <h4><a href="single.php">Buick Century 1990 </a></h4>
														 <div class="price"><span class="fa fa-dollar"></span><span class="font25">&nbsp;€75 - €145</span></div>
														 <p>Weekend Flash Sale </p>
														 <div class="date">Limited Time Offer</div>>
							
														</div>
												
													</div>
									  </span>
									</div>
									<div class="card__back">
									  <span class="card__text">
									     	 <div class="login-inner2">
												<h4><img src="images/dollar.png" alt="Crazzy Carz">  Check On-Road Price</h4>
											<div class="login-top sign-top">
											 <form action = "login_action.php" method="post">
													<input type="text" name="user_name" class="name active" placeholder="User_name" required=""/>
													<input type="text" name="email" class="email" placeholder="Email" required=""/>
													<div class="section_drop">
													
												   </div>
													<input type="password" name="password" class="password" placeholder="Password" required=""/>		
													<input type="submit" value="Check Now">
													
													
												</form>
											</div>
										</div>
									  </span>
									</div>
								  </div>
								    <!-- //card3 -->
								 </div>
								
							</div>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	<!--//featured_section-->
	<!--/select-cars-agile-->
	<div class="select-cars-agile">
	   <div class="container">
	         <div class="grid cars-main">
			  <div class="col-md-7 slide-show-w3l">
			     <!--//screen-gallery-->
				 <h3 class="tittle top">NEW CARS</h3>
				 <h6 class="sub">Great Prices. Great Vehicles. Great Service.</h6>
							<div class="car-view-slider">
					          <ul id="flexiselDemo">
							 <li>
								 <a href="upcoming.php"><img src="images/n2.jpg" alt=""/>
								  <div class="caption">
										<h3><a href="upcoming.php">Ford Mustang GT 500</a></h3>
										<span>Crazzy Carz</span>
										
									</div>
								 </a>
								
							 </li>
							 <li>
								 <a href="upcoming.php"><img src="images/n1.jpeg" alt=""/>
								 <div class="caption">
										<h3><a href="upcoming.php">Acura TLX</a></h3>
										<span>Crazzy Carz</span>
										
									</div>
								 </a>
							 </li>
							 <li>
								 <a href="upcoming.php"><img src="images/n3.jpg" alt=""/>
								  <div class="caption">
										<h3><a href="upcoming.php"> McLaren MP4-12c</a></h3>
										<span>Crazzy Carz</span>
										
									</div>
								 </a>
							 </li>
							 <li>
								 <a href="upcoming.php"><img src="images/n4.jpg" alt=""/>
									<div class="caption">
										<h3><a href="upcoming.php">BMW Z4</a></h3>
									<span>Crazzy Carz</span>
										
									</div>
								 </a>
							 </li>
							</ul>
						</div>
						<!--//screen-gallery-->

					</div>
					<div class="col-md-5 new-car-used">
					  <h3 class="tittle top">USED CARS</h3>
					  <h6 class="sub">Used Cars at Shocking Prices.</h6>
					  <div class="used-one">
					     <figure class="effect-zoe">
							 <a href="used.php"><img src="images/used_car.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>Crazzy <span>CARZ</span></h4>
								<p class="icon-links">
									<a href="#"><i class="glyphicon glyphicon-heart-empty"></i></a>
									<a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
									<a href="#"><i class="glyphicon glyphicon-paperclip"></i></a>
								</p>
							<p class="description">" BMW’s range of cars is designed with the driver in mind; most of its models feature rear-wheel drive and decent handling."</p>
							</figcaption>			
						</figure>
					  </div>
					  <div class="clearfix"> </div>
					   <div class="used-one second">
					     <figure class="effect-zoe">
							<a href="used.php"><img src="images/used_car1.jpg" alt="Used Car"></a>
							<figcaption>
								<h4>Crazzy <span>CARZ</span></h4>
								<p class="icon-links">
									<a href="#"><i class="glyphicon glyphicon-heart-empty"></i></a>
									<a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
									<a href="#"><i class="glyphicon glyphicon-paperclip"></i></a>
								</p>
							<p class="description"><br>"Audi produces a wide range of cars, <br>ranging from the VW Polo-sized A1 to the giant Range Rover-rivalling Q7 SUV."</p>
							</figcaption>			
						</figure>
					  </div>
					</div>
					<div class="clearfix"> </div>
				</div>
	   </div>
	</div>
	<!-- /bottom-banner -->
	<div class="banner-bottom">
	   <div class="container">
          <div class="bottom-form">
			<div class="inner-text">
				
			 <form action="#" method="post">
				<h3>Choose Your Best Car</h3>
					<div class="best-hot">
						<h5>Name</h5>
						<input type="text" class="name active" placeholder="Name" required="">
					</div>
					<div class="best-hot">
						<h5>Email</h5>
						<input type="text" class="email" placeholder="Email" required="">
					</div>
					<div class="section_drop2">
					<h5>City</h5>
						<select id="country6" onchange="change_country(this.value)" class="frm-field required">
															<option value="null"> Select City</option>
														<option value="city">Dublin</option>
														<option value="city">Limerick</option>
														<option value="city">Cork</option>
														<option value="city">Galway</option>
														<option value="city">Killarney</option>
														<option value="city">Others...</option>
													</select>
												   </div>
					<input type="submit" value="Book Now">
				</form>
			</div>
		</div>
	</div>
</div>
	<!-- //bottom-banner -->
		<div class="slider1">
		<div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="single.php"><img src="images/f1.jpg" alt=""/>
					  <div class="caption">
							<h3><a href="single.php">Mercedes-Benz C250 CDI</a></h3>
							<span>Crazzy Carz</span>
							
						</div>
					 </a>
					
				 </li>
				 <li>
					 <a href="single.php"><img src="images/f2.jpg" alt=""/>
					 <div class="caption">
							<h3><a href="single.php">Audi A4 2.0 TDI</a></h3>
							<span>Crazzy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.php"><img src="images/f3.jpg" alt=""/>
					  <div class="caption">
							<h3><a href="single.php">Ford Mustang GT 500</a></h3>
							<span>Crazzy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.php"><img src="images/f4.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.php">Ford Mustang GT 350</a></h3>
						<span>Crazzy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.php"><img src="images/f7.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.php">BMW M4</a></h3>
							<span>Crazzy Carz</span>
							
						</div>
					 </a>
				 </li>
				 <li>
					 <a href="single.php"><img src="images/f5.jpeg" alt=""/>
					 <div class="caption">
							<h3><a href="single.php">Ferrari F430</a></h3>
							<span>Crazzy Carz</span>
							
						</div>
					 </a>
				 </li>
				  <li>
					 <a href="single.php"><img src="images/f8.jpg" alt=""/>
					    <div class="caption">
							<h3><a href="single.php">BMW X4 M Sport</a></h3>
							<span>Crazzy Carz</span>
					    </div>
					 </a>
				 </li>
				</ul>
		  </div>
	  </div>
	<!-- //slider -->
	<!-- Services -->
	<div class="updates-agile">
		<div class="container">
		      <h3 class="tittle">LATEST CAR UPDATES</h3>
		<div class="inner_tabs">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class=""><a href="#updates" id="updates-tab" role="tab" data-toggle="tab" aria-controls="updates" aria-expanded="false">Car News</a></li>
							<li role="presentation" class=""><a href="#expert" role="tab" id="expert-tab" data-toggle="tab" aria-controls="expert" aria-expanded="false">Expert Reviews</a></li>
							<li role="presentation" class="active"><a href="#video-text" role="tab" id="video-text-tab" data-toggle="tab" aria-controls="video-text" aria-expanded="true">Videos</a></li>
							
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade" id="updates" aria-labelledby="updates-tab">
							 <div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="single.php" title="Crazzy Carz">
													<img src="images/u1.jpeg" alt="" class="img-responsive">
													<div class="mask">
														<p>Crazzy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
											
										</div>
										<div class="col-md-7 tab-info one">
										<h4><a href="single.php">Lorem Ipsum is simply dummy text of the printing </a></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
											<a href="single.php" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info two">
										<h4><a href="single.php">Lorem Ipsum is simply dummy text of the printing </a></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
											<a href="single.php" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="single.php" title="Crazzy Carz">
													<img src="images/u2.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>Crazzy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
										</div>
										
										<div class="clearfix"></div>
									</div>
										
								 </div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="expert" aria-labelledby="expert-tab">
								<div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
												<a href="single.php" title="Crazzy Carz">
													<img src="images/u3.jpg" alt="" class="img-responsive">
													<div class="mask">
														<p>Crazzy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="single.php">Lorem Ipsum is simply dummy text of the printing </a></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
											<a href="single.php" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info one">
										<h4><a href="single.php">Lorem Ipsum is simply dummy text of the printing </a></h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
											<a href="single.php" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<div class="view second-effect">
											<a href="single.php" title="Crazzy Carz">
													<img src="images/u4.jpeg" alt="" class="img-responsive">
													<div class="mask">
														<p>Crazzy <span>Carz</span> </p>
													</div>
												</a>	
											</div>
										</div>
										
										<div class="clearfix"></div>
									</div>
										
								 </div>
								
							</div>
							<div role="tabpanel" class="tab-pane fade active in" id="video-text" aria-labelledby="video-text-tab">
								
								<div class="news-updates">
									<div class="update-info-w3l">
										<div class="col-md-5 tab-image">
											<iframe src="https://www.youtube.com/embed/XoXHwhADS4k" frameborder="0" allowfullscreen></iframe>
										</div>
										<div class="col-md-7 tab-info">
										<h4><a href="single.php">Audi A4 2016 review - Car Keys </a></h4>
											  							<p>The Audi A4 competes with the BMW 3 Series, Mercedes-Benz C-Class and Jaguar XE. Top-of-the-range models are powerful and luxurious, but basic Audi A4s are starved of standard equipment. It’s still an extremely popular car – proof that many people are prepared to make sacrifices to own Audi’s upmarket badge. </p>
											<a href="http://www.carbuyer.co.uk/reviews/audi#model_736" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="update-info-w3l two">
										<div class="col-md-7 tab-info two">
										    <h4><a href="single.php">Volvo V90 review: is Volvo's new estate car </a></h4>
											<p>"The Volvo V90 is the latest – and very possibly greatest – in a long line of large executive estates that the brand has almost become synonymous with".</p>
											<a href="http://www.carbuyer.co.uk/reviews/volvo/v90/estate/review" class="read hvr-shutter-in-horizontal">Read More</a>
										</div>
										<div class="col-md-5 tab-image">
											<iframe src="https://www.youtube.com/embed/NcoCLc0MNdA" frameborder="0" allowfullscreen></iframe>
										</div>
										
										<div class="clearfix"></div>
									</div>
										
								 </div>
								
							</div>
						
						
						</div>
					</div>
				</div>
            </div>
		</div>
		<div class="clearfix"></div>
	<!-- /slider1 -->
	<?php include 'footer.php';?>

<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo").flexisel({
					visibleItems:1,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed:1000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 1
						},
						tablet: { 
							changePoint:768,
							visibleItems: 1
						}
					}
				});
				});
				</script>
						<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script src="js/bootstrap.js"></script>
 

</body>
</html>