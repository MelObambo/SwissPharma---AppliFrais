<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="icon" href="<?php echo ICON; ?>">
        <title>Se connecter</title>
    </head>
    <body>
        <div class="main">
            <div class="connexion">
                <h1 class="title">CONNEXION</h1>
                <form action="index.php?view=login" method="post">
                    <div class="connexion-fields">
                        <input type="text" class="text field" name="name" placeholder="nom de l'utilisateur">
                        <input type="password" class="text field" name="password" placeholder="mot de passe">
                        <button type="submit" class="text submit">CONNEXION</button>
                    </div>
                </form>
            </div>
        </div>    
    </body>
</html>