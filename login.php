<html>
    <head>
        <title> labb 1 </title>
        <link rel="stylesheet" type="text/css" href="signedin.css">
         <script type="text/javascript" src="js/login_validation.js"> </script>
         
<a href="index.php" class="btn">Tillbaka</a> <br> 
  
    </head>
    <body>

    <form method="POST" onsubmit="return LoginValidation()"action="login_process.php" ;>
        <h2> Logga in </h2>
      
        <label for="email">Mailadress</label><br>
        <input type = "text" id="email" name="email"><br>

        <label for="password">Lösenord:</label><br>
        <input type = "text" id="password" name="password"><br>

        <input type="submit" value="Submit">
</form>
</body>
</html>