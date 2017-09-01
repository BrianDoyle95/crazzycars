<?php

function load ($page = 'logintest.php')
{

$url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
$url = rtrim( $url , '/\\');
$url .= '/'.$page;

header("Location:$url");
exit();

}
function validate($dbc, $username = '' , $password = '')
{
    $errors = array();
    
    echo "The value of the username is ".$username;
    
    echo "The value of the password is : ".$password;
    if(empty($username))
    {$errors[]='Enter your username.';}
     else
     {$e = mysqli_real_escape_string($dbc, trim($username));}
     
     
     if(empty($password))
    {
        $errors[]='Enter your password.';
    }
    
     else
     {
         $p = mysqli_real_escape_string($dbc, trim($password));}
    
     if(empty($errors))
     {
        $var = $password;
        $q = "SELECT * 
            FROM user_details
            WHERE user_name = '$username'
            AND p_word = '$var'";
            
        
        echo "The value of the variable is : ".$var."<br />";
        echo "The query being run is : ".$q;    
        $r = mysqli_query($dbc , $q);
         
         if($r){
             echo "We are getting a response from the DB";
         }
         $output = mysqli_fetch_row($r);
         
        echo  "The value of the result is ".$output;
            
        if ( mysqli_num_rows($r)==1)
        {
        $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
        return array(true, $row);
        
        }
        
        else
        {$errors[] = 'Username and password not found.' ;}
    }
    
    
    return array (false, $errors) ; }
    
    
    ?>