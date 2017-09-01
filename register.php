<?php
$page_title = 'Register' ;
//include ('includes/header.html');

if($_SERVER['REQUEST_METHOD']=='POST')
{
    require ('config.php');
    $errors =array();
    
     if(empty($_POST['first_name']))
    {
        $errors[] = 'Enter your first name.' ;}
        else
        {
            $fn = mysqli_real_escape_string($dbc, trim($_POST['user_name']));
            
        } 
        
        if(empty($_POST['last_name']))
    {
        $errors[] = 'Enter your last name.' ;}
        else
        {
            $ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
            
        }
    if(empty($_POST['user_name']))
    {
        $errors[] = 'Enter your user name.' ;}
        else
        {
            $un = mysqli_real_escape_string($dbc, trim($_POST['user_name']));
            
        }
            
     
            
    if(empty($_POST['email']))
    {
        $errors[] = 'Enter your email address.' ;}
        else
       { $e = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid email format"; 
    }
  }
         
         if(!empty($_POST['p_word1']))    
         {
             if($_POST['p_word1'] != $_POST['p_word2'])
             {$errors[] = 'Passwords do not match' ;}
            else if (strlen($_POST['password1']) <= 8) {
        $errors[] = "Your Password Must Contain At Least 8 Characters!";
    }
    else if(!preg_match('#[0-9]+#',$_POST['p_word1'])) {
        $errors[] = "Your Password Must Contain At Least 1 Number!";
    }
    else if(!preg_match('#[A-Z]+#',$_POST['p_word1'])) {
        $errors[] = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    else if(!preg_match('#[a-z]+#',$_POST['p_word1'])) {
        $errors[] = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }

                     
             else
             { 
                 $p = $_POST['p_word1'];//mysqli_real_escape_string($dbc,
            //     trim($_POST['password1'])) ;
                 
             }
                                    
         }
        else{$errors[] = 'Enter your password' ;}
        
         if(empty($_POST['billing_address']))
    {
        $errors[] = 'Enter your billing address.' ;}
        else
        {
            $ba = mysqli_real_escape_string($dbc, trim($_POST['billing_address']));
            
        } 
        
        if(empty($_POST['City']))
    {
        $errors[] = 'Enter a city.' ;}
        else
        {
            $City = mysqli_real_escape_string($dbc, trim($_POST['City']));
            
        } 
        
        if(empty($_POST['Country']))
    {
        $errors[] = 'Enter a Country.' ;}
        else
        {
            $Country = mysqli_real_escape_string($dbc, trim($_POST['Country']));
            
        }
        
        if(empty ($errors))
        {
            $q = "SELECT user_id FROM user_details WHERE email='$e'";
            $r =mysqli_query($dbc, $q);
            if(mysqli_num_rows($r)!=0)
            {$errors[] = 'Email address already registered. <a href="index.php"> Login</a>';}
        }
        if(empty($errors))
        {
            
           $password = $password1;
            //echo "The original password is $p"."<br />";
           // echo "The encrypted password is $password"."<br />";
            $q = "INSERT INTO user_details (`first_name`,`last_name`,`user_name`, `email`, `p_word`, `billing_address`, `City`, `Country` ) VALUES ('$fn','$ln','$un', '$e' , '$p', '$ba','$City','$Country')";
            echo "The query that is being run against the database is :".$q."<br />";
            
            $r = mysqli_query ($dbc, $q);
            
        //    echo "The value being returned is : ".$r;
            
            if($r)
            {
               header ("location : index.php");
            }
            
            mysqli_close($dbc);
           // include('includes/footer.html');
            exit();
        }
        else
        {
            echo '<h1> Error!</h1>
            <p id="err_msg">The following error(s) occured:<br>';
            foreach ($errors as $msg)
            {
                echo "- $msg <br>" ;
                
            }
            echo 'please try again </p>';
            mysqli_close($dbc);
        }
    }
    function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
        
?>
 