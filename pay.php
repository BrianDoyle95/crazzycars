<?php
include('connect/connect.php');
$cus_id=$_GET["x"];
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Crazzy Carz</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">
	
	<!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
	<style>
	.creditCardForm {
    max-width: 700px;
    background-color:#efeff4;
    margin: 100px auto;
    overflow: hidden;
    padding: 25px;
    color: #4c4e56;
}
	.input_mng{
		
    height: 35px;
	}
	
	
	</style>
	
</head> 
<body class="header-sticky">
    <div class="windows8">
        <div class="preload-inner">
            <div class="wBall" id="wBall_1">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_2">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_3">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_4">
                <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_5">
                <div class="wInnerBall"></div>
            </div>
        </div>
    </div>
    
    
    
	<?php include('header.php'); ?>
   <div class="page-title parallax parallax4"> 
    	<div class="overlay"></div>            
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h2 class="title"></h2>
                    </div><!-- /.page-title-heading -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Booking</li>
                        </ul>                   
                    </div><!-- /.breadcrumbs --> 
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /page-title parallax -->
	
      <section class="flat-row contact-page pad-top-134">
            <div class="container">
                <div class="row">
                    <div class="flat-spacer"></div>
                   </div>

                <div id="respond" class="comment-respond contact style2">
                   
			 <div class="creditCardForm">
            <div class="heading">
              <center>  <h1>Confirm Booking</h1>   </center>
            </div>
            <div class="payment">
                <form method="post">
				<div class="form-group" id="credit_cards">
                        <img src="images/3logo.png" id="visa">
                        
                    </div>
                    <div class="form-group owner">
                        <label for="owner">Name</label>
                        <input required class="input_mng" type="text" name="name" class="form-control" id="owner">
                    </div>
                    
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input required class="input_mng" type="text" maxlength="16" name="card_no" class="form-control" id="cardNumber">
                    </div>
					<div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input required  class="input_mng" type="text" maxlength="3" name="cvv" class="form-control" id="cvv">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
						<div class="row">
						<div class="col-md-6">
                        <select required type="text" name="month" >
                            <option value="January">January</option>
                            <option value="February">February </option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
						</div>
						<div class="col-md-6">
                        <select required type="text" name="year">
                            
                            <option value="2017"> 2017</option>
                            <option value="2018"> 2018</option>
                            <option value="2019"> 2019</option>
                            <option value="2020"> 2020</option>
                            <option value="2021"> 2021</option>
							<option value="2022"> 2022</option>
                            <option value="2023"> 2023</option>
                            <option value="2024"> 2024</option>
                            <option value="2025"> 2025</option>
							<option value="2026"> 2026</option>
                        </select>
						</div>
                    </div>
                    </div>
                    <div class="form-group" id="pay-now">
                     <center>   <input  type="submit" value="Confirm" name="submit" class="btn btn-default" >
					 </center>
                    </div>
                </form>
				<?php
                                            if(isset($_POST["submit"]))
											{
												 
						
						
						
			                                     $name=$_POST["name"];
												 $card_no=$_POST["card_no"];
												 $cvv=$_POST["cvv"];
												 $month=$_POST["month"];
												 
												 $year=$_POST["year"];
												 

											  $query="update booking set credit_name='$name',card_no='$card_no',cvv='$cvv',exp_month='$month',exp_year='$year' where customer_id='$cus_id'";
											 
												$query_exe=mysql_query($query);
												 if($query_exe>0)
												 {
													 echo "<script>alert('Payment Done Sucessfully')</script>";
													 echo "<script>window.location.href='courses-grid.php</script>";
	
												 }
												 
												 else
												 {
													  echo "<script>alert('Payment Not Done Sucessfully')</script>";
												 }
												 
												 
											}
                                           ?>	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="crazzycars@gmail.com">
<input type="hidden" name="lc" value="GB">
<input type="hidden" name="item_name" value="Car_Rental">
<input type="hidden" name="item_number" value="#001">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="src" value="1">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="bn" value="PP-SubscriptionsBF:btn_subscribeCC_LG.gif:NonHostedGuest">
<table>
<tr><td><input type="hidden" name="on0" value="Car Rent Prices">Car Rent Prices</td></tr><tr><td><select name="os0">
	<option value="Rent per day">Rent per day : €75.00 EUR - daily</option>
	<option value="Rent per week">Rent per week : €240.00 EUR - weekly</option>
	<option value="Rent per month">Rent per month : €450.00 EUR - monthly</option>
	<option value="Special offer">Special offer : €100.00 EUR - monthly</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="option_select0" value="Rent per day">
<input type="hidden" name="option_amount0" value="75.00">
<input type="hidden" name="option_period0" value="D">
<input type="hidden" name="option_frequency0" value="1">
<input type="hidden" name="option_select1" value="Rent per week">
<input type="hidden" name="option_amount1" value="240.00">
<input type="hidden" name="option_period1" value="W">
<input type="hidden" name="option_frequency1" value="1">
<input type="hidden" name="option_select2" value="Rent per month">
<input type="hidden" name="option_amount2" value="450.00">
<input type="hidden" name="option_period2" value="M">
<input type="hidden" name="option_frequency2" value="1">
<input type="hidden" name="option_select3" value="Special offer">
<input type="hidden" name="option_amount3" value="100.00">
<input type="hidden" name="option_period3" value="M">
<input type="hidden" name="option_frequency3" value="1">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.sandbox.paypal.com/en_US/GB/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" id="paypal-button">
 <script> 
 paypal.Button.render({

        env: 'production',

        locale: 'fr_FR',

        style: {
            size: 'small',
            color: 'gold',
            shape: 'pill',
            label: 'Rent'
        },

        // Pass all other options that the button requires here
    });
    </script>

</form>

            </div>
        </div>
        </div><!-- /#respond -->
            </div><!-- /.container -->   
        </section>

        

    <!-- Footer -->
   <?php include('footer.php'); ?>
        <!-- Javascript -->
    <script type="text/javascript" src="javascript/jquery.min.js"></script>
    <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="javascript/parallax.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="javascript/gmap3.min.js"></script> 
    <script type="text/javascript" src="javascript/jquery-validate.js"></script> 
    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    
    <script type="text/javascript" src="javascript/main.js"></script>

</body>
</html>