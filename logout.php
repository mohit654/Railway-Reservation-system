<?php
   session_start();
   
   if(session_destroy()) {
      header("Location:reg10.php");
   }
?>