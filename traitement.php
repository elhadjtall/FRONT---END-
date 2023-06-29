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
