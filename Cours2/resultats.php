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
    $prenom = $nom = $avatar = "";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $nom = trojan($_POST['nom']);
        $prenom = trojan($_POST['prenom']);
        $avatar = trojan($_POST['avatar']);

    ?>
        <h2>Salut <?php echo $prenom . " " . $nom; ?></h2>
        <img src="<?php echo $avatar; ?>" alt="">
        <a href="index.php">Retour au formulaire</a>
    <?php
    }
    else {
        echo "<h2>Vous n'avez pas le droit d'être ici</h2>";
        echo "<h2>Retournez au formulaire...</h2>";

    }
    
    function trojan($data){
        $data = trim($data); //Enleve les caractères invisibles
        $data = addslashes($data); //Mets des backslashs devant les ' et les  "
        $data = htmlspecialchars($data); // Remplace les caractères spéciaux par leurs symboles comme ­< devient &lt;
        
        return $data;
    }

    function deTrojan($data){
        $data = stripslashes($data);
        $data = htmlspecialchars_decode($data);
        
        return $data;
    }
    ?>
    
</body>
</html>