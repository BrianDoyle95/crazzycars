<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
  require ('config.php');
  require ('login_tools.php');
  
  list($check, $data) = validate($dbc, $_POST['user_name'], $_POST['p_word']);
  
  echo "The variable check is : ".$check;
  
  echo "The variable $data is : ".$data;
  if($check)
  {
    echo ("We are inside the check function");
    session_start(); 
  
    $_SESSION['user_id'] = $data['user_id'];
  
    $_SESSION['user_name'] = $data['user_name'];
  
    load ('index.php');
  }
  else {
    $errors = $data ;
    
  }
  
    mysqli_close($dbc);
}

include('logintest.php');

?>