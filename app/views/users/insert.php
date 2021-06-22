<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo URLROOT; ?>/UsersController/insert" method="post">

        <label for="user_nom">Nom</label>
        <input type="text" name="user_nom" placeholder="Entrez votre nom ici svp" required>
        <label for="user_prenom">Prenom</label>
        <input type="text" name="user_prenom" placeholder="Entrez votre prenom ici svp" required>
        <label for="Nom">Age</label>
        <input type="text" name="user_age" placeholder="Entrez votre age ici svp" required>

        <input type="submit" value="Ajouter un  Utilisateur" name="submit_add">

    </form>

    <?php
    if (isset($_POST)) {
        var_dump($_POST);
    }

    ?>


</body>

</html>