<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="icon" href="<?php echo ICON; ?>">
    <title>Renseigner une fiche de frais</title>
</head>
<body>
    <form action="index.php?view=expense_sheet" method="post">
        <label for="type">Mois :</label>
        <input type="month" class="text field" name="type" placeholder="MM/AAAA">

        <label for="type">Type de frais :</label>
        <input type="month" class="text field" name="type" placeholder="">
        <label for="type">Type de frais :</label>
        <input type="amount" class="text field" name="type" placeholder="">
        <label for="type">Type de frais :</label>
        <input type="month" class="text field" name="type" placeholder="">
    </form>
    </body>
</html>