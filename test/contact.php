<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Index</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <div>
        <form method="GET" action="coucou.php">
            <div>
                <label for="name">Votre nom</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="mail">Votre mail</label>
                <input type="email" name="mail" id="name">
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
        </form>

    </div>
</body>
</html>