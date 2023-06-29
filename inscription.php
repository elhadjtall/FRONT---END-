<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>inscription</title>
</head>
<body>
    <div class="hero">
        <h1>Prêt à nous rejoindre?</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        <form action="traitement.php" method="POST"  id="inscrire" novalidate>
        <h2>inscription gratuite</h2>
        <div class="row">
        <div class="inputgroup">
            <input type="text" name="nom" id="" placeholder="Nom">
        </div>
        <div class="inputgroup">
            <input type="text" name="prenom" id="" placeholder="Prenom">
        </div>
        </div>
        <div class="inputgroup">
            <input type="email" name="email" id="" placeholder="Email Address">
        </div>
        <div class="inputgroup">
            <input type="password" name="password" id="" placeholder="Password">
        </div>
        <div class="inputgroup">
            <input type="password" name="confirm_password" id="" placeholder="Confirmez Password">
        </div>
        <button class="but2" type="submit" name="submit">Soumettre</button>
        </form>

    </div>
</body>
</html>