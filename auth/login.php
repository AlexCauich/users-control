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
        $password = md5($password);

        $query = "SELECT * FROM admin WHERE username = '$username' AND password='$password' ";
        $result = mysqli_query($db, $query) or die(mysql_error());

        $users = "SELECT * FROM users WHERE username = '$username' AND password='$password' ";
        $result_users = mysqli_query($db, $users) or die(mysql_error());

        $rows = mysqli_num_rows($result);
        $rows_users = mysqli_num_rows($result_users);

        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ../admin/index.php");

            exit();
        } 
        
        if ($rows_users == 1) {
          $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ../users/index.php");

            exit();
        }

        else {
            echo 'user not already execho' ;
        }
    }
    ?>