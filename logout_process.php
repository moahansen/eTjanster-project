<?php 
  //instansierar ett sqlite objekt för att koppla med databasen
$db = new SQLite3("./db/project.db");
session_start();

//Kollar om användaren är inloggad för att veta om denne får se sidan eller ska redirectas till inloggningsidan
if($_SESSION['loggedIn'])
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
   session_start();
   unset($_SESSION['loggedIn']);
   unset($_SESSION['name']);
   unset($_SESSION['email']);
   session_destroy();
    header('Location: index.php');
    ?>
    <?php
}
//om användaren inte var inloggad skickas denne här till inloggningssidan
else
{
    header('Location: loginView.php');
}
?>