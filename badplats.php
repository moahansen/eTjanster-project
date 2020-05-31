<html>
    <head>
       <script type="text/javascript" src="js/comment_validation.js"> </script>
    </head>
</html>

<?php
//startar session
session_start();
//lagrar vilken badplats användaren kommer ifårn i variabel
$badplats = $_POST['badplats'];
//skriver ut badplatsen
echo($badplats);
echo('<br>');

?>

<p>Attribut:</p>


<script>
    var badplats = <?php echo json_encode($badplats) ?>
    alert(badplats);

    src="https://kartor.uppsala.se/ags02/rest/services/iExternaKartan/ParkNaturFriluft/MapServer/0/query?where=NAMN='badplats'&outFields=*&outSR=4326&f=json";
  
    <noscript><a href="https://opendata.arcgis.com/datasets/aadc5420e8884d32b2efe0d10fbfdfe5_99.geojson"></a></noscript>
</script>

<script src="https://www.yr.no/place/Sweden/Uppsala/Uppsala_Municipality/external_box_hour_by_hour.js"></script>
<noscript><a href="https://www.yr.no/place/Sweden/Uppsala/Uppsala_Municipality/">yr.no: Forecast for Uppsala Municipality</a></noscript>

<p>Kommentarer:</p>

<?php 
  //om antalet sessionsvariabler är större än noll visas logga ut samt tillbaka knapp samt ett form för att posta kommentar
if(count($_SESSION)>0)
{

  ?>
 
<ul id="meny">
    <a href="logOut_process.php" class="btn">Logga ut </a>
   <a href="index.php" class="btn">Tillbaka </a>
</ul>


   
 
    <form method="POST" onsubmit="return ValidateComment()"action="comment_process.php" ;>
      
        <label for="message">Meddelande:</label><br>
        <textarea id="message" name= "message" rows="10" cols="50"> </textarea><br>
        <input type='hidden' name='badplats' id = 'badplats' value= "<?php echo $badplats?>";> 
        <input type="submit" value="Submit">
        
</form>

<br></br>

 <table class ="gridtable" border= "2">
 <tr>
    <th> Från: </th>    
    <th> Meddelande: </th>
    </tr>

<?php
// instansierar db objekt
$db = new SQLite3("./db/project.db");
//query för att hämta alla kommentarer som finns i databasen för att kunna presentera dem i en tabell
$result = $db->query ("SELECT * FROM Comments WHERE Badplats = '".$_POST['badplats']."'");
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
// om antalet sessionsvariabler inte är större än 0 visas enbart de postade kommentarerna + logga in för att lämna kommentar och tillbaka knapp.
else
{
    
$db = new SQLite3("./db/project.db");
 ?>
 <ul id="meny">
    <a href="login.php" class="btn">Logga in för att lämna en kommentar </a>

</ul>



<table class ="gridtable" border= "2">
 <tr>
    <th> Från: </th>    
    <th> Meddelande: </th>
    </tr>

<?php
//query för att hämta alla kommentarer som finns i databasen för att kunna presentera dem i en tabell
$result = $db->query ("SELECT * From Comments  WHERE Badplats = '".$_POST['badplats']."'");
while ($row = $result->fetchArray()) //Sa lange som en ny rad kan h¨a mtas som en array kommer den radens namn och meddelande visas i tabellen
 {
        echo "<tr>";
        echo "<td>" . $row["Name"]. "</td>";       
        echo "<td>" . $row["Message"]. "</td>";
        echo "</tr>";
 }

}
?>

</html>


