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
    <h1><?php echo $_SESSION['username']; ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo illo quidem iusto voluptatem perferendis minima reiciendis at ut. Sapiente reprehenderit natus quam repellendus aut sequi, quod sed non perferendis fugit!</p>

</body>
</html>