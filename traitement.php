<?php
if(isset($_POST['submit'])){
    if(empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["email"]) || empty($_POST["password"]))
    echo "Les chamaps sont vide";
}
//la longueur du mot de passe
if (strlen($_POST['password']) <8){
    die ("Le mot de passe est trop court");
}
//le mot de passe doit contenir une lettre 
if(! preg_match("/[a-z]/i", $_POST["password"])){
    die("le mot de passe doit contenir une lettre alphabetique");
}
//Le mot de passe doit contenir un chiffre
if (! preg_match("/[1-9]/i", $_POST["password"])){
    die("le mot de passe doit contenir un chiffre");
}
//Les mot de passes doit être correspondre
if($_POST['password'] !== $_POST["confirm_password"]){
    die('Le mot de passe doit correspondre');
}
// Hachage du mot de passe
$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/bdd.php";
//Insertion des donnée dans la base de données
$sql = "INSERT INTO user (nom, prenom, email, password) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->stmt_init();
if( ! $stmt->prepare($sql)){
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("ssss", 
                   $_POST["nom"],
                   $_POST["prenom"],
                   $_POST["email"],
                   $password);
if ($stmt->execute()) {
    header("Location: inscription-success.html");
}else {
    if ($mysqli->errno === 1062) {
        die ("couriel déjà reçu");
    }else {
        die($mysqli->error ." " .$mysqli->errno);
    }
}