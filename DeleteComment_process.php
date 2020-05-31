<html>
<head>
<title>Badväder</title>


<script type="text/javascript" src="js/deleteValidation.js"></script>
</head>


<body>

<?php
session_start();
$db = new SQLite3("./db/project.db");
//Funktion för att ta bort ett meddelande genom att skriva det namn som meddelandet är adresserat till
$delete=$_POST['delete'];



    //Validering av att det bara är en adminanvändare som kan radera ett meddelande

            $sql = "DELETE FROM Comments WHERE (Id LIKE '%".$delete."%')";
            $stmt = $db -> prepare ($sql); //H¨ar f¨o rbereds v˚ar query

 
 $stmt->execute();
             if($stmt)
            {
                echo "Meddelande raderat";
            }
            else
            {
                echo "ingen anslutning";
            }
		
			
	

	    
        


        





?>
</body>
</html>

