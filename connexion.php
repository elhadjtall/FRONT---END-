<?php
$is_invalid = false;

// La requette pour la base de donnée 
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // Inclure la base de donnée bdd dans le formulaire
}










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>
    <div class="hero">
        <h1>Connexion securisé !</h1>
        <form action="" method="post">
        <h2>Connexion</h2>
        <div class="connexions">
        <div class="inputgroup">
            <input type="email" name="email" id="" placeholder="Email Address">
        </div>
        <div class="inputgroup">
            <input type="password" name="password" id="" placeholder="Password">
        </div>
        <button class="but2" type="submit" name="submit">Soumettre</button>
        </div>
        </form>

    </div>
</body>
</html>