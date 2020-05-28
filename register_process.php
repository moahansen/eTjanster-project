<html>
    <head>
        <title> labb 1 </title>
        <link rel="stylesheet" type="text/css" href="signedin.css">
         <script type="text/javascript" src="javascript.js"> </script>
         
    </head>
<?php
//databas connection
$db = new SQLite3("./db/project.db");
//lagrar inputen från registreringsformet i variabler
	$email= isset($_POST['email'])? $_POST['email'] : '';
    $name= isset($_POST['name'])? $_POST['name'] : '';
    $password= isset($_POST['password'])? $_POST['password'] : '';

//query för att hämta rader med samma email som angetts, resultat sparas i result
$query = "SELECT  Email FROM Users where Email = '".$email."'";
$rows = $db->query($query);
 $result = $rows->fetchArray();
//om $result är null fanns det ingen registrerad användare med samma mail och isåfall körs detta kodblock
if($result == null)
{
  //lösenordet hashas
      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);    


 $sql = ' INSERT INTO "Users" ("Email", "Name", "Password") VALUES (:email, :name, :password)';
 $stmt = $db -> prepare ($sql); //förbereder queryn
 $stmt -> bindParam (':email', $email, SQLITE3_TEXT );//binder $email till queryn
 $stmt -> bindParam (':name', $name , SQLITE3_TEXT ) ;// binder $name till queryn
 $stmt -> bindParam (':password', $hashedPwd , SQLITE3_TEXT ) ;//bindedr hashat lösenord till queryn
 $stmt->execute(); //kör queryn
 //om stmt== true lyckades querin och användaren redirectas till inloggningsidan
if($stmt)
{
    
    header('Location: login.php');
}
}
//om $result != null finns emailadressen redan i databasen och är alltså upptagen. felmeddelande och tillbaka knkapp visas
else
{
    alert( "Emailadress upptagen, välj en annan");
    ?>
 <a href="register.php" class="btn">Tillbaka </a>
 <?php
}
//funktion för att visa javascipt alerts.
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}



        



	
?>