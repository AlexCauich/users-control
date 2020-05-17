<?php 
require('connection.php');

session_start();

$username = "";
$email    = "";
$errors = array(); 

if (isset($_POST['reg_admin'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);

    if ($password != $pass) {
        array_push($errors, "las contraseñas no coinciden");
    }

    $admin_check_query = "SELECT * FROM admin WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($db, $admin_check_query);
    $admin = mysqli_fetch_assoc($result);

    if ($admin) { // if user exists
        if ($admin['username'] === $username) {
          array_push($errors, "this is username exists as administrator");
        }
    
        if ($admin['email'] === $email) {
          array_push($errors, "this is email exists as administrator");
        }
    }

    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result_users = mysqli_query($db, $user_check_query);
    $users = mysqli_fetch_assoc($result_users);

    if ($users) { // if user exists
        if ($users['username'] === $username) {
          array_push($errors, "this username is registered");
        }
    
        if ($users['email'] === $email) {
          array_push($errors, "this email is registered");
        }
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database
        $query = "INSERT INTO admin (username, email, password, repead_password) VALUES('$username', '$email', '$password', '$password')";
        mysqli_query($db, $query);

        $_SESSION['username'] = $username;
        // Redirect to user dashboard page
        header("Location: ./users/index.php");
    }
  
}


else if (isset($_POST['reg_users'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);

    if ($password != $pass) {
        array_push($errors, "las contraseñas no coinciden");
    }

    $admin_check_query = "SELECT * FROM admin WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($db, $admin_check_query);
    $admin = mysqli_fetch_assoc($result);

    if ($admin) { // if user exists
        if ($admin['username'] === $username) {
          array_push($errors, "this is username exists as administrator");
        }
    
        if ($admin['email'] === $email) {
          array_push($errors, "this is email exists as administrator");
        }
    }

    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result_users = mysqli_query($db, $user_check_query);
    $users = mysqli_fetch_assoc($result_users);

    if ($users) { // if user exists
        if ($users['username'] === $username) {
          array_push($errors, "this username is registered");
        }
    
        if ($users['email'] === $email) {
          array_push($errors, "this email is registered");
        }
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database
        $query = "INSERT INTO users (username, email, password, repead_password) VALUES('$username', '$email', '$password', '$password')";
        mysqli_query($db, $query);

        $_SESSION['username'] = $username;
        // Redirect to user dashboard page
        header("Location: ./admin/index.php");
    }
  
}

?>
