<?php
$is_invalid = false;

// La requette pour la base de donnée 
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    // Inclure la base de donnée bdd dans le formulaire
    $mysqli = require __DIR__ . "/bdd.php";

    //selections toutes les colonnes de la table de user
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST['email']));
    
    $resultat = $mysqli->query($sql);
    $user = $resultat->fetch_assoc();

    //Vérification du mot de pass dans la base de donnée
    if($user){
        if (password_verify($_POST["password"], $user["password"])){
            session_start();

        // Regenere l'identifiant de session en appelant la fonction

        session_regenerate_id();
        $_SESSION["user_id"] = $user["id"];
        header("Location: affichage.php");
        exit();
        }
    }
    $is_invalid = true;
}

?>

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
        <?php if($is_invalid) : ?>
            <em>Connexion invalide</em>
        <?php endif; ?>

        <form action="" method="post">
        <h2>Connexion</h2>
        <div class="connexions">
        <div class="inputgroup">
            <input type="email" name="email" id="email" 
                value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" placeholder="Email Address">

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