<?php

session_start();
if(isset($_POST["user_id"])){
    
    $mysqli = require __DIR__ . "/bdd.php";

    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";


    $resultat = $mysqli->query($sql);

    $user = $resultat->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Afichage</title>
</head>
<body>
    
    <h1>BIENVENU SUR LA PAGE</h1>
    
</body>
</html>