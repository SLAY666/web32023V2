<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $avatar = $_GET['avatar'];
    ?>
    <h2>Salut <?php echo $prenom . " " . $nom; ?></h2>
    <img src="<?php echo $avatar; ?>" alt="">
    <a href="index.php">Retour au formulaire</a>
</body>
</html>