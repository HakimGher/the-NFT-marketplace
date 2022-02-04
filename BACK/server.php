<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'benaissa23012002', 'ihm');

// register user
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    /* form validation: ensure that the form is correctly filled
     by adding (array_push()) corresponding error into $errors array */
    if (empty($username)) { array_push($errors, "Nom utilisateur obligatoire"); }
    if (empty($email)) { array_push($errors, "Email obligatoire"); }
    if (empty($password_1)) { array_push($errors, "Mot de passe obligatoire"); }
    if($password_1 < '8'){array_push($errors, "Mot de passe faible");}
    if ($password_1 != $password_2) {
        array_push($errors, "Les mots de passe ne correspondent pas");
    }

    /* first check in database to make sure 
     a user does not already exist with the same username and/or email */
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
          array_push($errors, "Nom utilisateur existe déja");
        }
    
        if ($user['email'] === $email) {
          array_push($errors, "Email existe déja");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
    $password = md5($password_1); // encrypt password before saving it in database

    $query = "INSERT INTO users (username, email, password) 
              VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Votre compte a été crée avec succés";
    header('location: login.php');
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Nom utilisateur obligatoire");
    }
    if (empty($password)) {
        array_push($errors, "Mot de passe obligatoire");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "Vous etes connecté";
          header('location: index.php');
        }else {
            array_push($errors, "Mauvaise combinaison nom d'utilisateur/mot de passe");
        }
    }
}

