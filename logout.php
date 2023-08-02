<?php
   session_start();
   unset($_SESSION["username1"]);
 
   
   
   header('Refresh: 2; URL = login.php');
?>