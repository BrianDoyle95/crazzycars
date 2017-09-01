<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

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

<body>
 <?php include 'header.php';?>
		

			<!-- //search-car-->
		<!--//banner-section-->
				<!--/breadcrumb-->
		    <div class="service-breadcrumb">
				<div class="container">
					<div class="wthree_service_breadcrumb_left">
						<ul>
							<li><a href="index.php">Home</a> <i>|</i></li>
							<li>Compare Cars</li>
						</ul>
					</div>
					<div class="wthree_service_breadcrumb_right">
						<h3>Compare Cars</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!--//breadcrumb-->
		   <!--/sell-car -->
		<div class="sell-car w3l">
			<div class="container">
			<h3 class="title">COMPARE CARS</h3>
			    <!--/sell-price-grids -->
	              	<div class="compare">

			<h4>Choose at least two cars of your choice to see how they compare on price, features, and performance.</h4>

			<div class="compare-cars">
				<div class="compare-text compare-cars-text">
					<p>Car 1</p>
				</div>
				<div class="compare-form-data compare-cars-form-data">
					<form action="#" method="post">
            <?php

$conn = new mysqli('127.0.0.1', 'anjit11', '', 'car_rental') 
or die ('Cannot connect to db');

    $result = $conn->query("select DISTINCT Car_Make from car order by Car_Make asc");
    
    echo "<select name='car_id'>";
echo " <option selected>-- Choose a Brand --</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['car_id'];
                  $name = $row['Car_Make']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
  
?>
  

            

        
					</form>
					<form action="#" method="post">
										 <?php

$conn = new mysqli('127.0.0.1', 'anjit11', '', 'car_rental') 
or die ('Cannot connect to db');

    $result = $conn->query("select DISTINCT Car_Model from car order by Car_Model asc");
    
    echo "<select name='car_id'>";
echo " <option selected>-- Choose a Model --</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['car_id'];
                  $name = $row['Car_Model']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
  
?>
					</form>
					<form action="#" method="post">
									 <?php

$conn = new mysqli('127.0.0.1', 'anjit11', '', 'car_rental') 
or die ('Cannot connect to db');

    $result = $conn->query("select DISTINCT Car_year from car order by Car_year asc");
    
    echo "<select name='car_id'>";
echo " <option selected>-- Choose a Year --</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['car_id'];
                  $name = $row['Car_year']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
  
?>
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="compare-cars w3l">
				<div class="compare-text compare-cars-text">
					<p>Car 2</p>
				</div>
				<div class="compare-form-data compare-cars-form-data">
					<form action="#" method="post">
						 <?php

$conn = new mysqli('127.0.0.1', 'anjit11', '', 'car_rental') 
or die ('Cannot connect to db');

    $result = $conn->query("select DISTINCT Car_Make from car order by Car_Make asc");
    
    echo "<select name='car_id'>";
echo " <option selected>-- Choose a Brand --</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['car_id'];
                  $name = $row['Car_Make']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
  
?>
					</form>
					<form action="#" method="post">
						 <?php

$conn = new mysqli('127.0.0.1', 'anjit11', '', 'car_rental') 
or die ('Cannot connect to db');

    $result = $conn->query("select DISTINCT Car_Model from car order by Car_Model asc");
    
    echo "<select name='car_id'>";
echo " <option selected>-- Choose a Model --</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['car_id'];
                  $name = $row['Car_Model']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
  
?>
					</form>
					<form action="#" method="post">
						 <?php

$conn = new mysqli('127.0.0.1', 'anjit11', '', 'car_rental') 
or die ('Cannot connect to db');

    $result = $conn->query("select DISTINCT Car_year from car order by Car_year asc");
    
    echo "<select name='car_id'>";
echo " <option selected>-- Choose a Year --</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['car_id'];
                  $name = $row['Car_year']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
  
?>
					</form>
					
				
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="compare-cars">
				<div class="compare-text compare-cars-text">
					<p>Car 3</p>
				</div>
				<div class="compare-form-data compare-cars-form-data">
					<form action="#" method="post">
					 <?php

$conn = new mysqli('127.0.0.1', 'anjit11', '', 'car_rental') 
or die ('Cannot connect to db');

    $result = $conn->query("select DISTINCT Car_Make from car order by Car_Make asc");
    
    echo "<select name='car_id'>";
echo " <option selected>-- Choose a Brand --</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['car_id'];
                  $name = $row['Car_Make']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
  
?>
					</form>
									<form action="#" method="post">
						 <?php

$conn = new mysqli('127.0.0.1', 'anjit11', '', 'car_rental') 
or die ('Cannot connect to db');

    $result = $conn->query("select DISTINCT Car_Model from car order by Car_Model asc");
    
    echo "<select name='car_id'>";
echo " <option selected>-- Choose a Model --</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['car_id'];
                  $name = $row['Car_Model']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
  
?>
					</form>
					<form action="#" method="post">
						 <?php

$conn = new mysqli('127.0.0.1', 'anjit11', '', 'car_rental') 
or die ('Cannot connect to db');

    $result = $conn->query("select DISTINCT Car_year from car order by Car_year asc");
    
    echo "<select name='car_id'>";
echo " <option selected>-- Choose a Year --</option>";
    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['car_id'];
                  $name = $row['Car_year']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
  
?>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="value-button">
				<form action="#" method="post">
						<input type="submit" value="COMPARE">
				</form>
			</div>

			<div class="clearfix"></div>

			<div class="new w3-agile">
				<h3>Hot New Car Comparisons</h3>
				<div class="new-car new-car-1">
					<div class="new-car-image">
						<img src="images/new-car-1.jpg">
					</div>
					<div class="new-car-info">
						<h4>Audi A8 W12 Quattro</h4>
						<p>$85000</p>
						<span></span>
						<br>
						<br>
						<a href="news.html">39 Reviews</a>
					</div>
				</div>
				<div class="new-car new-car-2">
					<div class="new-car-image">
						<img src="images/new-car-2.jpg">
					</div>
					<div class="new-car-info">
						<h4>BMW 750Li</h4>
						<p>$89000</p>
						<span></span>
						<br>
						<br>
						<a href="news.html">67 Reviews</a>
					</div>
				</div>
				<div class="new-car new-car-3">
					<div class="new-car-image">
						<img src="images/new-car-3.jpg">
					</div>
					<div class="new-car-info">
						<h4>Mercedes-Benz S500</h4>
						<p>$87000</p>
						<span></span>
						<br>
						<br>
						<a href="news.html">45 Reviews</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			</div>

		</div>
		</div>
	<!--//sell-price-grids -->
	</div>
		<!-- //sell-car -->
<?php include 'footer.php';?>

</body>
</html>