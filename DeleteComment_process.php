<?php
//startar session
session_start();

if(isset($_SESSION['name'])) { 
    echo'<form action="logout_process.php" method="post">
    <button type="submit" class="buttonLogout">Log out</button>
    </form>';
}  
else{
    header("location: index.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Radera kommentarer </title>
        <link rel="stylesheet" type="text/css" href="signedin.css">
         <script type="text/javascript" src="js/validate_delete.js"> </script>
         <link rel="stylesheet" type= "text/css" href="css/stylesheet.css">
    </head>
    <body>  
        
   <a href="index.php" class="backbtn">Tillbaka </a>

    <form method="POST" onsubmit="return ValidateDelete()"action="DeleteComment_process.php" ;>
      
        <label for="delete">Skriv in ID fö att radera kommentar</label><br>
        <input type =" text" id="delete" name= "delete" ><br>
        <input type="submit" value="Submit">
</form>

<br></br>

 <table class ="gridtable" border= "2">
 <tr>
    <th> Från: </th>    
    <th> Meddelande: </th>
     <th> Badplats: </th>
     <th> Id: </th>
     
    </tr>

<?php
$db = new SQLite3("./db/project.db");
//query för att hämta alla kommentarer som finns i databasen för att kunna presentera dem i en tabell
$result = $db->query ("SELECT * From Comments");
while ($row = $result->fetchArray()) //Sa lange som en ny rad kan h¨a mtas som en array kommer den radens namn och meddelande visas i tabellen
 {
        echo "<tr>";
        echo "<td>" . $row["Name"]. "</td>";       
        echo "<td>" . $row["Message"]. "</td>";
           echo "<td>" . $row["Badplats"]. "</td>";
            echo "<td>" . $row["Id"]. "</td>";
        echo "</tr>";
 }
 ?>
 </table>
 <br></br>  

 <form method="POST" onsubmit="return ValidateDelete()"action="DeleteUser_process.php" ;>
      
        <label for="delete">Skriv på ID för att radera användare:</label><br>
        <input type =" text" id="delete" name= "delete" ><br>
        <input type="submit" value="Submit">
</form>

<br></br>

 <table class ="gridtable" border= "2">
 <tr>
    <th> Användare: </th>    
    <th> Email: </th>
     
     <th> Id: </th>
     
    </tr>

<?php

//query för att hämta alla kommentarer som finns i databasen för att kunna presentera dem i en tabell
$result1 = $db->query ("SELECT * From Users");
while ($row1 = $result1->fetchArray()) //Sa lange som en ny rad kan h¨a mtas som en array kommer den radens namn och meddelande visas i tabellen
 {
        echo "<tr>";
        echo "<td>" . $row1["Name"]. "</td>";       
        echo "<td>" . $row1["Email"]. "</td>";
          
            echo "<td>" . $row1["Id"]. "</td>";
        echo "</tr>";
 }

 ?>
 </table>
 <br></br>  
    </body>
</html>