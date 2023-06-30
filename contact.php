<?php
if(isset($_POST["submit"])){
    if(empty($_POST["nom"]) || empty($_POST["numero"]) || empty($_POST["email"]) || empty($_POST["objet"]) || empty($_POST["message"])){
        echo "Les champs sont vides";
    } else {
        $nom = $_POST["nom"];
        $numero = $_POST["numero"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $to = "elhadjoumartall10@gmail.com";
        $subject = $_POST["objet"]; // Utiliser l'objet du formulaire pour le sujet de l'e-mail

        $message = "Email: {$email}\nNumero: {$numero}\n" . $message; // Ajouter une nouvelle ligne après l'e-mail et le numéro

        // Toujours définir le type de contenu lors de l'envoi d'un e-mail HTML
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Ajouter l'adresse e-mail de l'expéditeur dans les en-têtes
        $headers .= "From: $email" . "\r\n";

        $emailSent = mail($to, $subject, $message, $headers);

        if ($emailSent) {
            echo "<script>alert('Message envoyé');</script>";
        } else {
            echo "<script>alert('Message non envoyé');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contactez-nous</title>
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
            <button type="submit" name="connexion" class="but1"><a href="connexion.html">connexion</a></button>
            <button type="submit" name="inscription" class="but2"><a href="inscription.html">inscription</a></button>
        </div>
        </nav>
     </div>
    </div> <br><br><br><br>
    <div class="hero">
        <form action="" method="POST">
        <h1>Contactez-nous</h1>
        <p>Chattez avec nous via Whatsapp ou complétez ce formulaire pour recevoir des informations sur les apps Odoo, sur nos services et sur notre entreprise.</p> 
        <div class="row">
        <div class="inputgroup">
            <input type="text" name="nom" id="" placeholder="Nom">
        </div>
        <div class="inputgroup">
            <input type="number" name="numero" id="" placeholder="Tel +33">
        </div>
        </div>
        <div class="inputgroup">
            <input type="email" name="email" id="" placeholder="Email Address">
        </div>
        <div class="inputgroup">
            <input type="text" name="objet" id="" placeholder="Objet">
        </div>
        <div class="inputgroup">
            <textarea id="message" rows="8" name="message" placeholder="Your message"></textarea>
        </div>
        <div class="prive">
        <p>Nous traiterons vos données à caractère personnel de la manière décrite dans notre Politique vie privée, pour répondre à vos questions et vous fournir plus d'informations sur nos produits et nos services.</p>
        </div>
        <button class="but2" type="submit" name="submit">Soumettre</button>
        </form>
    </div><br><br><br><br><br>
    <div class="informations">
        <h3><a href="#">Mobile app</a></h3>
        <h3><a href="#">Community</a></h3>
        <h3><a href="#">Légal</a></h3>
        <a href=""><img src="logo.png" alt=""></a>
        <h3><a href="#">Contactez-nous</a></h3>
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
    <script></script>
</body>
</html>