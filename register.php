<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type= "text/css" href="css/login-register.css">
         <script type="text/javascript" src="js/register_validation.js"> </script>
   
          
    </head>
    <body>
    <ul id="meny">
  <a href="index.php" class="btn">Tillbaka</a> <br> 
</ul>
       
    <div class="form">
    <form method="POST" onsubmit="return ValidateRegister()"action="register_process.php" ;>
      <h4>Registrera dig</h4>
      <hr>
        <label for="name">Namn:</label><br>
        <input type = "text" id="name" name="name" required placeholder="Name"><br><br>

        <label for="email">Mailadress</label><br>
        <input type = "text" id="email" name="email" required placeholder="Email"><br><br>

        <label for="password">Lösenord:</label><br>
        <input type = "text" id="password" name="password" required placeholder="Password"><br><br>

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
