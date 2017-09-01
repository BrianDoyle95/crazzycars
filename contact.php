<!DOCTYPE html>
<html>
<head>
<title>CRAZZY CARZ</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="CRAZZY CARZ" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
			<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,300,300italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>



 <?php include 'header.php';?>

<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li>Contact Us</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Contact Us</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->

<div class="tips w3l">
				<div class="container">
				 <div class="col-md-9 tips-info">






    <div class="name">
    <form  action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<div>
    <input name="name" type="text" value="" size="30"/></div>
    
    Subject:<div>
    <input name="subject" type="text" value="" size="30"/></div>
    Your email:<div>
    <input name="email" type="text" value="" size="30"/></div>
    Your message:<div>
    <textarea name="message" rows="7" cols="30"></textarea></div>
   <div> <input type="submit" value="Send email"/> </div>
    </form>
    </div>
    <?php               	
                                  if(isset($_POST["submit"]))
								  {
				
						$name=$_POST["name"];
			            $email=$_POST["email"];
						$subject=$_POST["subject"];						
						$message=$_POST["message"];
						
												 $query1="insert into enquiry set name='$name',email='$email',subject='$subject',message='$message'";
												$query_exe=mysql_query($query1);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Message Send Sucessfully')</script>";
													 echo "<script>window.location.href='/contact.php'</script>";
	
												 }
												 
												 else
												 {
													  echo "<script>alert('Message not Send Sucessfully')</script>";
												 }
												 
												 
											}
                                           ?>                    
    
    
    
    
    	</div>
					<div class="clearfix"> </div>
			</div>
		</div>
    
    
    
    <?php include 'footer.php';?>

</body>
</html>