

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="assets/css/master.css" rel="stylesheet" type="text/css" />
 
  </head>
  <body>

    <div class="login-box">
      <img src="assets/images/Logo.png" class="avatar" alt="Avatar Image">
   
      <h1>Login </h1>
      <?php 
      
      ?>
      <form  method="post" action="login.php">
        <!-- USERNAME INPUT -->
        <label for="username">Nombre</label>
        <input type="text" name="username" placeholder="Usuario">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" value="Entrar">
        
      </form>
    </div>
  </body>
</html>
