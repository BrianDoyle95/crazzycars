<?php
include('connect/connect.php');

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><!--<![endif]-->
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
							<li>Search Cars</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Search Cars</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
    	<!--//breadcrumb-->
    	  <!--/search-car -->
      	<div class="search-car w3l">
			<div class="container">
			    <!--/search-car-inner -->
					<div class="search-car-inner w3l">
					<!--/search-car-left-nav -->
						<div class="col-md-3 search-car-left-sidebar">
						    
						     <section class="sky-form">
							   
						    
						    </section>
						    <form method ="get">
						    
						    	<div class="w_nav1">
						    	    <h4>Choose your car</h4>
						    
                                    <select id="country"  type="text" class="frm-field required"   placeholder="Name" name="name" required>
									<option value="">--Brand--</option>
									<?php 
	                $q="select * from  car";
					$exe=mysql_query($q);
			
					while($re=mysql_fetch_array($exe))
					{
					
	                ?>    
	                <option value="<?php echo $re["Car_Make"];?>"><?php echo $re["Car_Make"];?></option>
												<?php } ?>
									</select>
									</div>
								
								
								<section class="sky-form">
								    <div>
								<input type="submit" name="s" value="Search" class="get-one">
								</div>
                                   </form>
								<?php 
										if(isset($_GET["s"]))
						            { 
							
								$name=$_GET["name"];
					            
				echo	"<script>window.location.href='searchcar1.php?nme=$name'</script>";
									}
										
										?>
			 </section>
			
			
		
               
               </div> 	<!-- div for side bar -->
               	<!--//search-car-left-nav -->
               	<!--/search-car-right-text -->
                        	<div class="col-md-9 search-car-right-text w3">
							<div class="well well-sm">
								<strong>Display</strong>
                           	<div class="btn-group">
									<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
									</span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm two"><span
										class="glyphicon glyphicon-th"></span>Grid</a>
						

					<?php
														

									$q="select * from car limit 0,10";
									
									$exe=mysql_query($q);
									$c=1;
									while($read=mysql_fetch_array($exe))
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
                                    
                    </div><!-- / .post-wrap	<php $c++; } ?> -->
                        </div>
                        </div><!-- // col9 line 124 -->
                    
                </div><!-- // grid row -->
            </div><!-- /container -->
       </div>

        <!-- Footer -->
		<?php include('footer.php'); ?>
        
       
</body>
</html>