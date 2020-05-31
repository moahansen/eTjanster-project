<?php
session_start();
$db = new SQLite3("./db/project.db");

$_message= isset($_POST['message'])? $_POST['message'] : '';
$_message = trim($_message);

if($_message == "")
{
alert("tomt meddelande");

}
 
else
{
 $sql = ' INSERT INTO "Comments" ("Name", "Message") VALUES ( :name, :message)';
 $stmt = $db -> prepare ($sql); //H¨ar f¨o rbereds v˚ar query

 

$stmt -> bindParam (':name', $_SESSION['name'], SQLITE3_TEXT ) ;
 $stmt -> bindParam (':message', $_message , SQLITE3_TEXT ) ;
 $stmt->execute();
 $db->close();

header('Location: loggedInComment.php');
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

 