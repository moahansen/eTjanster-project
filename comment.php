 <html>
<head>
   <script type="text/javascript" src="js/comment_validation.js"> </script>
   <a href="index.php" class="btn">Tillbaka </a>
</head>
<body>
 <br></br>
    <?php
$db = new SQLite3("./db/project.db");

$query = "SELECT * FROM Comments";

 ?>
<a href="login.php" class="btn">Logga in för att lämna en kommentar </a>


</body>
</html>

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
