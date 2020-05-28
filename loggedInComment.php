<?php 
  //instansierar ett sqlite objekt för att koppla med databasen
$db = new SQLite3("./db/project.db");
session_start();

//Kollar om användaren är inloggad för att veta om denne får se sidan eller ska redirectas till inloggningsidan
//om användaren är inloggad visas ett form för att skriva kommentarer samt tidigare publicerade kommentarer
if($_SESSION['loggedIn'])
{
  ?>
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
    <form method="POST" onsubmit="return ValidateComment()"action="comment.php" ;>
      
        <label for="message">Meddelande:</label><br>
        <textarea id="message" name= "message" rows="10" cols="50"> </textarea><br>
        <input type="submit" value="Submit">
</form>

<br></br>

 <table class ="gridtable" border= "2">
 <tr>
    <th> Från: </th>    
    <th> Meddelande: </th>
    </tr>

<?php
//query för att hämta alla kommentarer som finns i databasen för att kunna presentera dem i en tabell
$result = $db->query ("SELECT * From Comments");
while ($row = $result->fetchArray()) //Sa lange som en ny rad kan h¨a mtas som en array kommer den radens namn och meddelande visas i tabellen
 {
        echo "<tr>";
        echo "<td>" . $row["Name"]. "</td>";       
        echo "<td>" . $row["Message"]. "</td>";
        echo "</tr>";
 }
 ?>
 </table>
 <br></br>    
    </body>
</html>
<?php
}
//om användaren inte var inloggad skickas denne här till inloggningssidan
else
{
    header('Location: comment.php');
}
?>