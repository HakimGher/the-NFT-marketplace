<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://kit.fontawesome.com/b6b9586b26.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/style.css" />
    <!-- <script src="../JS/script.js" defer></script> -->
  </head>
  <body>
    <div id="sign_in">
      <form action="login.php" method="post">
        <span>Login</span>
        	<!-- notification message -->
	      <?php if (isset($_SESSION['success'])) : ?>
          <div class="success">
            <p>
              <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
              ?>
            </p>
          </div>
      	<?php endif ?>
        <?php include('errors.php'); ?>
        <div id="field">
          <label><i class="fas fa-user"></i></label>
          <input type="text" name="username" placeholder="Nom utilisateur" />
        </div>

        <div id="field">
          <label><i class="fas fa-lock"></i></label>
          <input type="password" name="password" placeholder="Mot de passe" />
        </div>

        <div id="field">
          <input type="submit" name="login_user" value="Login" />
        </div>
      </form>

      <p> Vous n'avez pas un compte?
        <button><a href="register.php">Register</a></button>
      </p>
    </div>
  </body>
</html>
