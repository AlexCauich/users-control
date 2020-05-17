<?php 
require('../auth/connection.php');

session_start();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $surnames = $_POST['surnames'];
    $matricula = mt_srand(10);

    function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
       }
        
       //Ejemplo de uso
        
       $m = generarCodigo(16); // genera un código de 6 caracteres de longitud.


    $sql = "INSERT INTO informatica (matricula, name, last_name, surnames) VALUES ('$m', '$name', '$last_name', '$surnames')";
    $result_users = mysqli_query($db, $sql);
    header("Location: ../subjects/info.php");
    die();
}

?>
