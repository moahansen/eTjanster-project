<html>
<head>
<?php
session_start();
// kollar om det finns sessionsvariabler sparade innan vi använder dem för att slippa undefined index fel
if(count($_SESSION)>0)
{
    //om usertype= 2 
    if($_SESSION['userType'] == 2)
    {
    ?>
<title>Badväder</title>


<script type="text/javascript" src="js/deleteValidation.js"></script>
</head>


<body>

<?php

$db = new SQLite3("./db/project.db");
//sparar input i en variabel
$delete=$_POST['delete'];

    //query för att ta bort användar med samma id som input
            $sql = "DELETE FROM Users WHERE (Id LIKE '%".$delete."%')";
            $stmt = $db -> prepare ($sql); //H¨ar f¨o rbereds v˚ar query

 $stmt->execute();
 //om det lyckasskickas admin tillbaka till granskningssida
             if($stmt)
            {
               header('Location: deleteComment.php');
            }
           
            }
            else
            {
                header('Location: login.php');
            }
            }

            ?>

		</body>
        </html>