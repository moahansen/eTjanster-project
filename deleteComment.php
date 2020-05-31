
<html>
    <head>
 
  
    </head>
    <body>  
       <?php
       //startar session
session_start();
// om det finns några sessionsvariabler sparade ska den gå vidare (enbart för att slippa undefined index fel)
if(count($_SESSION)>0)
{
    //om usertype är två ska två formulär för att radera kommentarer och användare visaas
    if($_SESSION['userType'] == 2)
    {
    ?>
        <title> labb 1 </title>
        <link rel="stylesheet" type="text/css" href="signedin.css">
         <script type="text/javascript" src="js/validate_delete.js"> </script>
         
   <a href="logOut_process.php" class="btn">Logga ut </a>
   <a href="index.php" class="btn">Tillbaka </a>
 
   <br><br> <br> 
<a href="index.php" class="btn">Tillbaka </a>

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
}
//annars skickas användaren till inloggningssidan
else
{
     header('Location: login.php');
}
}
 ?>
 </table>
 <br></br>  
    </body>
</html>