<html>
    <head>
        <title> labb 1 </title>
        <link rel="stylesheet" type="text/css" href="signedin.css">
         <script type="text/javascript" src="js/validate_commentjs"> </script>
         
   <a href="logOut_process.php" class="btn">Logga ut </a>
   <a href="index.php" class="btn">Tillbaka </a>
 
   <br><br> <br> 
<a href="index.php" class="btn">Tillbaka </a>
  
    </head>
    <body>  
    <form method="POST" onsubmit="return ValidateDelete()"action="DeleteComment_process.php" ;>
      
        <label for="delete">Sök:</label><br>
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
    </body>
</html>