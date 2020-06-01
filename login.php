<html>
    <head>
        <title> labb 1 </title>
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
         <script type="text/javascript" src="js/login_validation.js"> </script>
  
    </head>
    <body>
    
    <div class="header">
        <a id="tillbakaBtn" href="index.php" class="btn">Tillbaka</a>
    </div>

    <div class="wrapper">
    <form class="Register-loginForm" method="POST" onsubmit="return LoginValidation()"action="login_process.php" ;>
    <br>
        <h3> Logga in </h3>
        <hr>
      
        <label for="email">Mailadress</label><br>
        <input type = "text" id="email" required name="email"><br><br>

        <label for="password">Lösenord:</label><br>
        <input type = "password" required id="password" name="password"><br><br>

        <button type="submit" value="Submit">Submit</button><br><br>
</div>
</form>
</body>
</html>