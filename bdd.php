<?php
$host = "localhost";
$username = "root";
$dbname = "projetissa";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_errno){
    die("Erreur de connexion : " . $mysqli->connect_error);
}
return $mysqli;
?>
