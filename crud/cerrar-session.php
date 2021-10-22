<?php
  session_start();
   

  unset($_SESSION['usuario']); 
 

  session_destroy();
   
  // Redirecciona a la página de login.
  header("HTTP/1.1 302 Moved Temporarily"); 
  header("Location: wp-content/index.php");
?>