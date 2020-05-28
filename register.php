<html>
    <head>
        <title> labb 1 </title>
        <link rel="stylesheet" type="text/css" href="myStyle.css">
         <script type="text/javascript" src="js/register_validation.js"> </script>
        
  <a href="index.php" class="btn">Tillbaka</a> <br>

          
    </head>
    <body>
        
    <form method="POST" onsubmit="return ValidateRegister()"action="register_process.php" ;>
      

        <label for="name">Namn:</label><br>
        <input type = "text" id="name" name="name"><br>

        <label for="email">Mailadress</label><br>
        <input type = "text" id="email" name="email"><br>

        <label for="password">Lösenord:</label><br>
        <input type = "text" id="password" name="password"><br>

        <input type="submit" value="Submit">
</form>
</body>
</html>
