<?php
session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['users'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("location: ./index.html"); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome users</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum repudiandae debitis provident pariatur, quidem eligendi, placeat voluptas ratione laborum voluptate a! Rerum sed quos a eveniet quis? Accusantium, totam ea?</p>

</body>
</html>