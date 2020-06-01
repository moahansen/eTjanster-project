<?php
//startar session
session_start();
 
//lagrar vilken badplats användaren kommer ifårn i variabel
$badplats = $_POST['badplats'];
 
//skriver ut badplatsen
echo($badplats);
echo('<br>');
 
?>
 
<html>
    <head>
       <script type="text/javascript" src="js/comment_validation.js"> </script>
       <link rel="stylesheet" type= "text/css" href="css/stylesheet.css">
    </head>
</html>
<p id="buss"></p>
<p id="grill"></p>
<p id="hopp"></p>
 
<script>
    src="https://kartor.uppsala.se/ags02/rest/services/iExternaKartan/ParkNaturFriluft/MapServer/0/query?where==1%3D1&outFields=*&outSR=4326&f=json";
    alert(src);
    var attribut = JSON.parse(info);
    document.getElementById("buss").innerHTML = attribut.fields[0].BUSSHALLPLATS;
    document.getElementById("grill").innerHTML = attribut.info[0].GRILLPLATS;
    document.getElementById("hopp").innerHTML = attribut.info[0].HOPPTORN;
</script>
 
<noscript><a href="https://opendata.arcgis.com/datasets/aadc5420e8884d32b2efe0d10fbfdfe5_99.geojson"></a></noscript>
 
<script src="https://www.yr.no/place/Sweden/Uppsala/Uppsala_Municipality/external_box_hour_by_hour.js"></script>
<noscript><a href="https://www.yr.no/place/Sweden/Uppsala/Uppsala_Municipality/">yr.no: Forecast for Uppsala Municipality</a></noscript>
 
<?php 
  //om antalet sessionsvariabler är större än noll visas logga ut samt tillbaka knapp samt ett form för att posta kommentar
if(count($_SESSION)>0)
{
 
  ?>
 
<ul id="meny">
    <a href="logout_process.php" class="btn">Logga ut </a>
   <a href="index.php" class="btn">Tillbaka </a>
</ul>
 
    <form method="POST" onsubmit="return ValidateComment()"action="comment_process.php" ;>
        <label for="message">Lämna en kommentar:</label><br>
        <p>Inloggad som <?php $_SESSION['name']?></p>
        <textarea id="message" name= "message" rows="10" cols="50"> </textarea><br>
        <input type='hidden' name='badplats' id = 'badplats' value= "<?php echo $badplats?>";><br> 
        <input type="submit" value="Submit">
        
</form>
 
<br></br>
<p><b>Kommentarer</b></p>
<?php
// instansierar db objekt
$db = new SQLite3("./db/project.db");
//query för att hämta alla kommentarer som finns i databasen för att kunna presentera dem i en tabell
$result = $db->query ("SELECT * FROM Comments WHERE Badplats = '".$_POST['badplats']."'");
while ($row = $result->fetchArray()) //Sa lange som en ny rad kan h¨a mtas som en array kommer den radens namn och meddelande visas i tabellen
 {      
        echo("Användare: ");
        echo($row["Name"]);
        echo("<br>");
        echo("Kommentar: ");
        echo($row["Message"]);
        echo "<br><br>";
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
 
<?php
//query för att hämta alla kommentarer som finns i databasen för att kunna presentera dem i en tabell
$result = $db->query ("SELECT * From Comments  WHERE Badplats = '".$_POST['badplats']."'");
while ($row = $result->fetchArray()) //Sa lange som en ny rad kan h¨a mtas som en array kommer den radens namn och meddelande visas i tabellen
 {
    echo("Användare: ");
    echo($row["Name"]);
    echo("<br>");
    echo("Kommentar: ");
    echo($row["Message"]);
    echo "<br><br>";
 }
 
}
?>
 
</html>

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


