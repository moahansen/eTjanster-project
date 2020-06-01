<html>
    <head>
        <title>Registrering</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
         <script type="text/javascript" src="js/register_validation.js"> </script>
        
  

          
    </head>
    <body>

    <div class="header">
        <a href="index.php" class="btn">Tillbaka</a> <br>
    </div>

    <div class="wrapper">
          <form class="Register-loginForm" method="POST" onsubmit="return ValidateRegister()"action="register_process.php" ;>
      <h3>Registrera dig!</h3>
      <hr>

        <label for="name">Namn:</label><br>
        <input type = "text" id="name" name="name"><br><br>

        <label for="email">Mailadress</label><br>
        <input type = "text" id="email" name="email"><br><br>

        <label for="password">Lösenord:</label><br>
        <input type = "text" id="password" name="password"><br><br>

        <button type="submit" value="Submit">Submit</button>
</form>
    </div>
        
  
</body>
</html>
