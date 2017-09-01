<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Crazzy Carz</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Catchy Carz Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" type="text/css" href="css/recommend.css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>

	<?php include('header.php');?>
<body>
<!--/banner-section-->
		
			<!-- //get-->
		<!--//banner-section-->
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li>Recommend Me A car</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Recommend Me A car</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
		<div class="sell-car w3l">
			<div class="container">
			<h3 class="tittle">RECOMMEND ME A CAR</h3>
			    <!--/sell-price-grids -->
				<div class="main w3-agile">
			<div class="pic-image"></div>
				<form  action="j-folder/php/demo.php" method="post" class="j-forms j-multistep" id="j-forms" >
						<fieldset>

							<!-- start name -->
							<div class="unit">
								<label class="label">What is your maximum budget ($)?</label>
								<div class="input">
									
									<input type="text" id="name" name="name">
								</div>
							</div>
							<!-- end name -->

							<!-- start way to communicate -->
							<div class="unit check" id="way_to_communicate">
								<div class="inline-group">
									<label class="month">Best way to communicate</label>
									<label class="radio">
										<input type="radio" name="way_to_communicate" value="Email" id="email_to_communicate">
										<i></i>
										Email
									</label>
									<label class="radio">
										<input type="radio" name="way_to_communicate" value="Phone" id="phone_to_communicate">
										<i></i>
										Phone
									</label>
								</div>
							</div>
							<!-- end way to communicate -->

						</fieldset>
<fieldset>

							<!-- start name -->
							<div class="unit">
								<label class="label">What is your expected monthly usage (KM)?</label>
								<div class="input">
									
									<input type="text" id="name" name="name">
								</div>
							</div>
							<!-- end name -->

							<!-- start way to communicate -->
							<div class="unit check" id="way_to_communicate">
								<div class="inline-group">
									<label class="month">Monthly Usage And Preference</label>
									<label class="radio">
										<input type="radio" name="way_to_communicate" value="Email" id="email_to_communicate">
										<i></i>
										Email
									</label>
									<label class="radio">
										<input type="radio" name="way_to_communicate" value="Phone" id="phone_to_communicate">
										<i></i>
										Phone
									</label>
								</div>
							</div>
							<!-- end way to communicate -->

						</fieldset>

						<fieldset>


							<div id="email-step" class="hidden">

									<!-- start email -->
								<div class="unit">
									<label class="label">Your email</label>
									<div class="input">
										
										<input type="email" id="email" name="email">
									</div>
								</div>
								<!-- end email -->

								<!-- start message -->
								<div class="unit">
									<label class="label">Comments/Message</label>
									<div class="input">
										<textarea spellcheck="false" name="email_message"></textarea>
									</div>
								</div>
								<!-- end message -->
							

							</div>

							<div id="phone-step" class="hidden">

								<!-- start phone -->
								<div class="unit">
									<label class="label">Phone/Mobile</label>
									<div class="input">
										
										<input type="text" id="phone" name="phone">
									</div>
								</div>
								<!-- end phone -->

								<!-- start time to call -->
								<div class="unit">
									<label class="label">Time</label>
									<label class="input select">
										<select autocomplete="off" name="time">
											<option value="">call me ...</option>
											<option value="now">now</option>
											<option value="5 min">in 5 minutes</option>
											<option value="10 min">in 10 minutes</option>
											<option value="30 min">in 30 minutes</option>
											<option value="1 hour">in an hour</option>
											<option value="tomorrow">tomorrow</option>
										</select>
										<i></i>
									</label>
								</div>
								<!-- end time to call -->

								<!-- start message -->
								<div class="unit">
									<label class="label">Comments/Message</label>
									<div class="input">
										<textarea spellcheck="false" name="phone_message"></textarea>
									</div>
								</div>
								<!-- end message -->

							</div>

						<!-- start response from server -->
						<div id="response"></div>
						<!-- end response from server -->

						</fieldset>

				
					<!-- end /.content -->

					<div class="footer">
						<button type="submit" class="primary-btn multi-submit-btn">Send</button>
						<button type="button" class="primary-btn multi-next-btn">Next</button>
						<button type="button" class="secondary-btn multi-prev-btn">Back</button>
					</div>
					<!-- end /.footer -->

				</form>
		
				</div>
				 <!--//sell-price-grids -->
			</div>
		</div>
		<!-- //sell-car -->

	<?php include('footer.php');?>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
			<script src="js/jquery.validate.min.js"></script>
			<script src="js/jquery.form.min.js"></script>
			<script src="js/j-forms.min.js"></script>


 

</body>
</html>