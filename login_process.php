<html>
    <head>
        <title> labb 1 </title>
        <link rel="stylesheet" type="text/css" href="signedin.css">
         <script type="text/javascript" src="javascript.js"> </script>
         
    </head>
    </html>
    <?php
    
session_start();
//instansierar ett sqlite ojekt för att connecta med databasen
$db = new SQLite3("./db/project.db");

//lagrar och trimmar emailen från användaresn input i loginformet i variabeln $email
    $email= isset($_POST['email'])? $_POST['email'] : '';
    $email= trim($email);
  
  //lagrar och trimmar lösenordet från användaresn input i loginformet i variabeln $password
    $password= isset($_POST['password'])? $_POST['password'] : '';
    $password= trim($password);

//deklarerar variabel som senare ska användas för att ev. directa användarern tillbaka till loginsidan om inputen är felaktig
    $goBack = false;

   //Kollar om lösenordsfältet är tomt eller eialadressen i felaktigt format och ästter isåfall $goBack till true    
if($password == " " || $password == "")
{
    alert("Ange lösenord");
    $goBack=true;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
      $validEmail = false;
      alert("inkorrekt mailadress");
      $goBack= true;            
    }
    //om $goBack är true visas en tillbaka knapp som skickar användaren tillbaka till inloggningssidan
if($goBack)
{
    ?>
		<a href="index.php" class="btn">Tillbaka</a>
		<?php
}
//om $goBack inte är true görs en query till dtaabasen där Email som är = $email väljd
    else 
    {    
 $query = "SELECT  Email FROM Users where Email = '".$email."'";    
 $rows = $db->query($query);
 $result = $rows->fetchArray();

//om $result == null fanns det ingen användare registrerad med den mailadressen. isåfall visas felmeddaland eoch knapp till regetsreringen
if($result == null)
{
alert("Det finns ingen användare registrerad med den mailadressen");

?>
 <a href="register.php" class="btn">Registrera dig </a>
 <?php
}

//annars, om mailadrerssen alltså finns, hämtas det hashade lösenordet från db och jämförs med $password
else
{
    $query = "SELECT  Password FROM Users where Email = '".$email."'";
    $row = $db->query($query);
    $hashedPwdArr = $row-> fetchArray();
    $hashedPwd = $hashedPwdArr['Password'];
    
   
//om det hashade lösenordet i databasen matchar med $password sätts sessionsvariablen loggedIn till true och email till användarens mail.
if (password_verify($password, $hashedPwd)) 
{
    session_start();
    $_SESSION['loggedIn'] = true;
    $_SESSION['email'] = $email;
    
    //query för att hämta användarens namn och spara i sessionvaribeln name
    $query = "SELECT  Name FROM Users where Email = '".$email."'";    
    $rows = $db->querySingle($query);
    $_SESSION['name'] = $rows;  

    //användaren skcikas till menyView
header('Location: index.php');

} 

//om det hashade lösenordet och $password inte matchar så visas ett felmeddelande och tillbaka knapp
else
 {
    echo 'Fel lösenord';
    ?>
 <a href="loginView.php" class="btn">Tillbaka </a>
 <?php
}
    
}
}

//funktion för att kunna visa javascript alerts.
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

    ?>