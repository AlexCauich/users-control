<?php
    require('connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($db, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db, $password);
        // Check user is exist in the database
        /*$password_encript = md5($password);*/

        $query = "SELECT * FROM admin WHERE username = '$username' AND password='$password' ";
        $result = mysqli_query($db, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ../admin/index.php");
        } else {
            echo 'user not already execho' ;
        }
    }
    ?>