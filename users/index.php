<?php
include("../auth/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users</h1>
    <h1><?php echo $_SESSION['username']; ?></h1>
    <a href="../auth/logout.php">Logout</a>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum repudiandae debitis provident pariatur, quidem eligendi, placeat voluptas ratione laborum voluptate a! Rerum sed quos a eveniet quis? Accusantium, totam ea?</p>

</body>
</html>