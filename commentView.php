<html>
<head>
   <script type="text/javascript" src="javaScript.js"> </script>
</head>
<body>
 <table class ="gridtable" border= "2">
 <tr>
    <th> Från: </th>
    
    <th> Meddelande: </th>
    </tr>

<?php
$db = new SQLite3("./db/labb1.db");


$query = "SELECT * FROM Comments";
$result = $db->query($query);


while ($row = $result->fetchArray()) //S˚a l¨a nge som en ny rad kan h¨a mtas som en array
 {

        echo "<tr>";
        echo "<td>" . $row["Name"]. "</td>";
     
        echo "<td>" . $row["Message"]. "</td>";
        echo "</tr>";
 }

 ?>

 </table>
 <br></br>

 <form method="POST" onsubmit="return Test()"action="comment.php" ;>
      

        <label for="name">Namn:</label><br>
        <input type = "text" id="name" name="name"><br>

        <label for="message">Meddelande:</label><br>
        <textarea id="message" name= "message" rows="10" cols="50"> </textarea><br>

        <input type="submit" value="Submit">
</form>
<br></br>

    
    

</body>
</html>