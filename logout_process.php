<?php 
  //instansierar ett sqlite objekt för att koppla med databasen


//Kollar om användaren är inloggad för att veta om denne får se sidan eller ska redirectas till inloggningsidan


  ?>
<html>
    <head>
        <title> labb 1 </title>
        <link rel="stylesheet" type="text/css" href="myStyle.css">
         <script type="text/javascript" src="javascript.js"> </script>
         
    </head>
    </html>
    <?php
    //unsetar för destroyar sessionen och redirectar användaren till startsidan
    
   session_start();
   unset($_SESSION['loggedIn']);
   unset($_SESSION['name']);
   unset($_SESSION['email']);
   unset($_SESSION['userType']);
   session_destroy();
    header('Location: index.php');
    
    ?>
    <?php

//om användaren inte var inloggad skickas denne här till inloggningssidan

?>