<?php
include('connect/connect.php');
$name=$_GET["nme"];

?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
 <title>Catchy Carz a classified ads Category Flat Bootstrap Responsive Website Template | Search cars :: w3layouts</title>
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
							<li>Cars Result</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Cars Result</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		 	<div class="search-car w3l">
			<div class="container">
			    <!--/search-car-inner -->
					<div class="search-car-inner w3l">
		
		
		
    	
       	<div class="col-md-9 search-car-right-text w3">
							<div class="well well-sm">
								<strong>Display</strong>
								<div class="btn-group">
									<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
									</span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm two"><span
										class="glyphicon glyphicon-th"></span>Grid</a>
							
						
									    
            
					<?php
														

									$q="select * from car where Car_Make='$name'";
									
									$exe= mysql_query($q) ;
									$c = 1;
									while($read = mysql_fetch_array($exe, MYSQL_ASSOC))
									{
										
										
										?> 
                        	</div>
							</div>
                        
                        
                              
				            	<div id="products" class="row list-group">
								<div class="item  col-xs-4 col-lg-4">
								<div class="thumbnail">
                                <a href="#" data-toggle="modal" data-target="#myModal6"><img class="group list-group-image" src="images/<?php echo $read['image']; ?>" alt="carr-Image"></a>
		                                       <div class="table-text">
		                            <h4 ><a href="singlesearch.php?x=<?php echo $read["car_id"];?>" class="click-search"><span class= "spancarname"><?php echo $read['name']; ?> - <?php echo $read['Car_Make']; ?></span></a></h4>
                                         <p class="gridViewPrice hide">
                                     <a href="singlesearch.php?x=<?php echo $read["car_id"];?>" > 
                                     <span class="rupee-lac" style="font-size: 12px;">&euro; <?php echo $read['rent_price']; ?></span>  
                                        </a>
                                        </p>
                                         <div class="other-details">
                                             <a href="singlesearch.php?x=<?php echo $read["car_id"];?>" > 
                                     <span class="rupee-lac slprice" style="font-size: 12px;">&euro; <?php echo $read['rent_price']; ?></span>  
                                        </a>
                                        	<div class="clearfix"></div>	
                                        	 <a href="singlesearch.php?x=<?php echo $read["car_id"];?>" > 
                                            <p class="listing-item-kms"><span class="slkms"><?php echo substr ($read["Car_Model"],0,90) ?></span><span class="margin-left5 margin-right5">|</span><span class="fuel"><?php echo $read['Car_year']; ?></span><span class="margin-left5 margin-right5">|</span><span><?php echo $read['in_stock']; ?></span></p>
                                            <p class="listing-item-area"><span class="cityname"><?php echo $read['Car_Colour']; ?></span></p>
                                            <p class="text-light-grey deliverytext"></p>		
                                               </a> 
                                                 </div>
                           
                                  <div class="clearfix"></div>
                                 <div class="list-form">
                                              
								<div class="get-one"></div><a href="singlesearch.php?x=<?php echo $read["car_id"];?>" >GET CARS DETAILS<a></div>
                                             <div class="clearfix"></div>
                                              
                                                </div>
                                                 </div>
									<?php $c++; } ?>
									
									
									</div>
									</div>
									  </div>
									
									
									 </div><!-- // grid row -->
            </div><!-- /container -->
       </div>
                            
       
		<?php include('footer.php'); ?>
       

</body>
</html>