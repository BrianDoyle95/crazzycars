<?php
 /*require('config.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['user_name']);
      $password = mysqli_real_escape_string($db,$_POST['p_word']); 
      
      $sql = "SELECT user_id FROM car_rental WHERE user_name = '$username' and p_word = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("username");
         $_SESSION['user_name'] = $myusername;
         
         header("location: index.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
      }
   }
*/
?>
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

   
   <head>
      <title>Login Page</title>
           <meta charset="utf-8">
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
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "login_action.php" method = "post">
                 <p>
    Username: <input type="text" name="user_name">
</p><p>
    Password: <input type="password" name = "p_word">
</p><p>
    <input type ="submit" value ="Login">
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
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
            </div>
				
         </div>
			
      </div>

   </body>

 