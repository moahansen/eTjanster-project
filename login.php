<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
        <link rel="stylesheet" type="text/css" href="signedin.css">
         <script type="text/javascript" src="js/login_validation.js"> </script>
         <link rel="stylesheet" type= "text/css" href="css/login-register.css">
</head>
<body>
<ul id="meny">
  <a href="index.php" class="btn">Tillbaka</a> <br> 
</ul>

<div class="form">
    <form method="POST" onsubmit="return LoginValidation()"action="login_process.php" ;>
        <h2> Logga in </h2>
        <hr><br>
      
        <label for="email">Mailadress</label><br>
        <input type = "text" id="email" placeholder="Email" required name="email"><br><br>

        <label for="password">Lösenord:</label><br>
        <input type = "password" placeholder="Password" required id="password" name="password"><br><br>

        <input type="submit" value="Submit">
</form>
</div>
</body>
</html>