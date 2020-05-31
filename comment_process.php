<?php
session_start();
$db = new SQLite3("./db/project.db");

$_message= isset($_POST['message'])? $_POST['message'] : '';
$_message = trim($_message);

$badplats= isset($_POST['badplats'])? $_POST['badplats'] : '';

if($_message == "")
{
alert("tomt meddelande");

}
 
else
{
 $sql = ' INSERT INTO "Comments" ("Name", "Message", "Badplats") VALUES ( :name, :message, :badplats)';
 $stmt = $db -> prepare ($sql); //H¨ar f¨o rbereds v˚ar query

$stmt -> bindParam (':name', $_SESSION['name'], SQLITE3_TEXT ) ;
 $stmt -> bindParam (':message', $_message , SQLITE3_TEXT ) ;
 $stmt -> bindParam (':badplats', $badplats, SQLITE3_TEXT ) ;
 $stmt->execute();
 $db->close();
 ?>
 <p> Din kommentar har publicerats </p>
<a href="index.php" class="btn">Gå tillbaka till startsidan </a>
<?php
}


function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

 