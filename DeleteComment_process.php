<html>
<head>
<title>Badväder</title>


<script type="text/javascript" src="js/deleteValidation.js"></script>
</head>
<?php
session_start();
//kollar om det finns sessionsvariabler sparade
if(count($_SESSION)>0)
{
    //om userype = 2 körs denna kod
    if($_SESSION['userType'] == 2)
    {
    ?>

<body>

<?php
$db = new SQLite3("./db/project.db");
//sparar input i variabel
$delete=$_POST['delete'];

    //query för att ta bort kommentar med samma id som input
            $sql = "DELETE FROM Comments WHERE (Id LIKE '%".$delete."%')";
            $stmt = $db -> prepare ($sql); //H¨ar f¨o rbereds v˚ar query

 
 $stmt->execute();
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

