<?php

$db = new SQLite3("./db/labb1.db");

$_name= isset($_POST['name'])? $_POST['name'] : '';
$_message= isset($_POST['message'])? $_POST['message'] : '';


$_message = trim($_message);
$_name = trim($_name);

$validName=true;
$validMessage=true;
$validEmail = true;


if($_name == "")
{
$validName=false;
alert("tomt namnfält");


}


if($_message == "")
{
$validMessage=false;
alert("tomt meddelande");


}
 
if($validName == true && $validMessage == true)
{
 $sql = ' INSERT INTO "Comments" ("Name", "Message") VALUES ( :name, :message)';
 $stmt = $db -> prepare ($sql); //H¨ar f¨o rbereds v˚ar query

 $stmt -> bindParam (':name', $_name , SQLITE3_TEXT ) ;
 $stmt -> bindParam (':message', $_message , SQLITE3_TEXT ) ;
 $stmt->execute();
 $db->close();

header('Location: index.php');
}
else
{
?>
		<a href="index.php" class="btn">Tillbaka</a>
		<?php
}
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>

 