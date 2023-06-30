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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Afichage</title>
</head>
<body>
<div class="navbar">
     <div class="container">
        <nav>
            <img src="logo.png" alt="">
            <ul>
                <li><a href="#" class="active">Nos produits</a></li>
                <li><a href="#">Jeux</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Aide?</a></li>
            </ul>
        <div class="button">
            <button type="submit" name="connexion" class="but2"><a href="deconnexion.php">Deconnecter</a></button>
        </div>
        </nav>
     </div>
    </div><br><br>


    <h1>BIENVENU SUR LA PAGE</h1>
    







    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="informations">
        <h3><a href="#">Mobile app</a></h3>
        <h3><a href="#">Community</a></h3>
        <h3><a href="#">Légal</a></h3>
        <a href=""><img src="logo.png" alt=""></a>
        <h3><a href="contact.php">Contactez-nous</a></h3>
        <h3><a href="#">A propos</a></h3>
        <h3><a href="#">Rejoignez-nous</a></h3>
    </div>
    <footer>
        <div class="icone">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-snapchat"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </footer>
    <div class="icones">
        <p>© Thé Tip Top,  2023.</p>
    </div>
</body>
</html>