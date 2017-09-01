<?php
include('connect/connect.php');

$cars_id=$_GET["x"];
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<html>
<head>
<title>CRAZZY CARZ</title>
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
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
			<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>


		<?php include('header.php');?>
		
	 	<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li>Car Details</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Car Details</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
    	<!--//breadcrumb-->
    	
        	<div class="search-car w3l">
			<div class="container">
			    <!--/search-car-inner -->
					<div class="search-car-inner w3l">
					    
					    	<div class="col-md-12 search-car-right-text w3">
							<div class="well well-sm">
							    	<div class="thumbnail">    
					    
						<?php
														

									$q="select * from car where car_id='$cars_id'";
									
									$exe=mysql_query($q);
					
								$read=mysql_fetch_array($exe);
									
										?> 
                            <h1 class="bold"><?php echo $read['Car_Make']; ?> - <?php echo $read['Car_Model']; ?></h1>
                            <ul class="car-meta review style2 clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/<?php echo $read['image']; ?>" alt="image">
                                        
                                    </div>

                                    <div class="text">
                                        <b><?php echo $read['Car_Make']; ?></b>
                                        <p>Cars</p>
                                    </div>
                                </li>
                                <li class="categories">
                                    <b class="car-name"><?php echo $read['Car_Model']; ?></b>
                                    
                                </li>
                                

                                
                            </ul>

                             <div class="car-widget-price">
                                <h4 class="sky-form">Cars Features</h4>
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <span>Car Year<br> -</span>
                                        <span class="time"><?php echo $read['Car_year']; ?>  </span>
                                    </li>
                                   <li>
                                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                        <span>Stock<br> -</span>
                                        <span class="time"><?php echo $read['in_stock']; ?> Items</span>
                                    </li>   
                                    <li>
                                        <i class="fa fa-leanpub" aria-hidden="true"></i>
                                        <span>Car Colour<br> -</span>
                                        <span class="time"><?php echo $read['Car_Colour']; ?></span>
                                    </li>
                                     <li>
                                        <i class="fa fa-leanpub" aria-hidden="true"></i>
                                        <span>Car Price<br> -</span>
                                        <span class="time">&euro; <?php echo $read['rent_price']; ?>Price per week</span>
                                    </li>
                                    
                                    
                                    
                                </ul>
                                </div>
					
							
                            <div class="entry-content">
                                <h4 class="title-1 bold">ABOUT CAR</h4>
                                <p>
                                    <?php echo $read['Car_Model']; ?>
                                </p> 

                                
								<div class="rating-mng">
                               <h5><b>Rating</b></h5>
							  <span> </span>
                                </div>
								<br>
								<div class="review-box">
								<h5 class="review-title">Review</h5>
								<hr>
								<p>
								<?php echo $read['review']; ?>
								<p>
								
								</div>
								</div>
								
								<div class="get-one"></div><a href="book.php?x=<?php echo $read["car_id"];?>" >Book Your Car<a></div>
                                             <div class="clearfix"></div>
                                              </div>
								</div><!-- /thumbnail -->
								
	</div>
	</div>
	
	
             <!--  hiding and delete 
             						
                                    -->
                        
                                
                            </div><!-- /.comment-post -->
                        </div><!-- /blog-title-single -->
                    </div><!-- /col-md-8 -->

                 
        <!-- Footer -->
		<?php include('footer.php'); ?>
     

      

</body>
</html>