<!DOCTYPE html>
<html lang="en">
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
    <?php if ($_SESSION['role'] = 2){ echo $_SESSION['name'];?>

        
        <h1>SERVICES COMPTABLES</h1>


        <a href="" class="">Valider les fiches de frais</a>
        <a href="" class="">Suivre le paiement</a>
        <a href="" class="">Affichage des fiches de frais</a>

        <form action="index.php?view=logout" method="post">
            <input type="submit" value="Déconnexion">
        </form>
    <?php } else { ?>

        <h1>VISITEURS MEDICAUX</h1>
        <a href="" class="">Saisir une fiche de frais</a>
        <a href="" class="">Mes fiches de frais</a>

        <button>Déconnexion</button>
    <?php } ?>
    
</body>
</html>