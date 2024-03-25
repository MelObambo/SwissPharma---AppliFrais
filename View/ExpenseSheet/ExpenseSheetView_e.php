<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- <link rel="stylesheet" href="assets/css/login.css"> -->
        <link rel="icon" href="<?php echo ICON; ?>">
        <title>Remplir une fiche de frais</title>
    </head>
    <body>
        <div class="main">
            <a href="index.php?view=menu">
                <button>RETOUR AU MENU</button>
            </a>
            <div class="connexion">
                <h1 class="title">SAISIE DE FRAIS</h1>

                <?php if ($e) { ?>
                    <p><?php echo $e; ?></p>
                <?php } ?>

                <form action="index.php?view=expense_sheet" method="post">
                    <div class="connexion-fields">

                        <label for="period">Période d'engagement</label>
                        <input type="date" name="period">

                        <h2>Frais au forfait</h2>

                        <label for="meal">Repas midi :</label>
                        <input type="text" class="" name="meal">

                        <label for="nights">Nuitées :</label>
                        <input type="text" class="" name="nights">

                        <label for="stage">Etape :</label>
                        <input type="text" class="" name="stage">

                        <label for="kilometer">Kilométrique :</label>
                        <input type="text" class="" name="kilometer">

                        <h2>Hors Forfait</h2>

                            <input type="date" name="dateOutPackage" placeholder="Date" class="">
                            <input type="text" name="label" placeholder="Libellé" class="">
                            <input type="number" name="quantity" placeholder="Quantité" class="">
                            <button><img href="plus.svg" alt="plus"/></button>

                        <h2>Hors Classification</h2>

                        <label for="stage">Nombre justificatifs :</label>
                        <input type="number" class="" name="nbReceipt">

                        <label for="totalAmount">Montant Total :</label>
                        <input type="number" class="" name="totalAmount">

                        <button type="submit" class="text submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>    
    </body>
</html>