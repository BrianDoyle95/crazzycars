<?php
include('connect/connect.php');

$cars_id=$_GET["y"];
$brand_name=$_GET["z"];
$price=$_GET["l"];
$model=$_GET["m"];
$days=$_GET["n"];
$colour=$_GET["o"];
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html>
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




	<?php include('header.php'); ?>
	
	<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li>Booking Details</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Booking</h3>
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
							    	
							    	<h1>Book Your Car</h1> <hr>
                    <form  method="post">
				   
					       <label>Full Name</label>
                                <div class="input-wrap name">
                                    <input type="text" name="name"  placeholder="Name" id="name" required>
                                </div>
								</div>
	
								<div class="form-group">
								<label>Email</label>
                            
                                <div class="input-wrap email">
                                    <input type="email" name="email"  placeholder="email"  id="email" required>
                                </div>
								</div>
								<div class="form-group">
                           <label>Contact Number</label>
                                <div class="input-wrap name">
                                    <input type="text" name="contact_no" maxlength="10"  placeholder="number" id="number" required>
                                </div>
								</div>
								<div class="form-group">
								<label>Car Model</label>
                            
                                <div class="input-wrap name">
                                    <select type="text" name="card"  placeholder="card"  id="card" required>
									<option value="">--card--</option>
									<?php 
                                	$q="select * from  car";
		                			$exe=mysql_query($q);
			
                   					while($re=mysql_fetch_array($exe))
		                			{
		    			
                                	?>   
                            	<option value="<?php echo $re['Car_Make']; ?>"><?php echo $re['Car_Make']; ?></option>
		            			<?php } ?>
                            	</select>
                                </div>
								</div>
								<div class="form-group">
								<label>Amount(&euro;)</label>
                            
                                <div class="input-wrap name">
                                    <input readOnly type="text" value="<?php echo $price?>" name="amount"  placeholder="amount" id="amount" readOnly>
                                </div>
								</div>
                                  </div>
                          <center>  
                        <div class="submit-wrap">
                            <input type="submit" name="submit" value="Submit and Pay" class="btn flat-button bg-orange">
                        </div></center>
						</div>
                    </form><!-- /.comment-form --> 
                                                  
                
<?php
                                            if(isset($_POST["submit"]))
											{
												 
						
						$date=date("y-m-d");
						
						$enter_time=date("h:i:s A");
						
			                                     $name=$_POST["name"];
												 
												 $email=$_POST["email"];
												 $contact_no=$_POST["contact_no"];
												 
												 $card=$_POST["card"];
												 
										$see="select * from booking order by id desc limit 1";
						$sere=mysql_query($see);
						$last_id_1=mysql_fetch_array($sere);
						$last_id_db_1=$last_id_1["id"]+1;
						$customer_id_1="Customer-".$last_id_db_1;		
					
		

											  $query1="insert into booking set car_id='$cars_id',brand='$brand_name',customer_name='$name',car_name='$model',email='$email',contact_no='$contact_no',card='$card',amount='$price',date='$date',time='$enter_time',days='$days',colour='$colour',customer_id='$customer_id_1'";
											 
												$query_exe1=mysql_query($query1);
												 if($query_exe1>0)
												 {
													 echo "<script>alert('Data Save Sucessfully')</script>";
													 echo "<script>window.location.href='pay.php?x=$customer_id_1'</script>";
	
												 }
												 
												 else
												 {
													  echo "<script>alert('Data Not Save Sucessfully')</script>";
												 }
												 
												 
											}
                                           ?>										   
                                     
                                     
                                      <div class="clearfix"></div>
                                           
                                     
                                     
                
            </div><!-- /.container -->  
                </div><!-- /#respond -->
            </div><!-- /.container -->  

        

    <!-- Footer -->
   <?php include('footer.php'); ?>
     

</body>
</html>