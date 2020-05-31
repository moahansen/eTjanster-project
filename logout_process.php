<?php 
 session_start()
//Kollar om användaren är inloggad för att veta om denne får se sidan eller ska redirectas till inloggningsidan

//kollar om det finns sessionsvariabler sparade
if(count($_SESSION)>0)
{
    

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
    
   unset($_SESSION['loggedIn']);
   unset($_SESSION['name']);
   unset($_SESSION['email']);
   unset($_SESSION['userType']);
   session_destroy();
    header('Location: index.php');
    
    ?>
    <?php
}
else
{
   header('Location: login.php');
}
//om användaren inte var inloggad skickas denne här till inloggningssidan

?>