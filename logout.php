<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: index.php");
   }
   $page_title = 'logout' ;

$_SESSION = array();

session_destroy();

echo '<h1> logged out</h1>
<p> You are now logged out.</p>
<p><a href = "index.php"> Login </a></p>';

?>
