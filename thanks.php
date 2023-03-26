<?php

$errors = [];
// if ($_POST) 
// if (!empty ($_POST))
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
        $errors[] = "Le prénom est obligatoire";
    //if (!isset($_POST['user_firstname']) || empty($_POST['user_firstname']))
    if (!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '')
        $errors[] = "L'email est obligatoire";
    if (!isset($_POST['user_phoneNumber']) || trim($_POST['user_phoneNumber']) === '')
        $errors[] = "Le numéro de téléphone est obligatoire";
    if (!isset($_POST['user_equipment']) || trim($_POST['user_equipment']) === '')
        $errors[] = "L'équipement sélectionné est obligatoire";

    // if (empty($errors)) {
    //     // traitement du formulaire
    //     // puis redirection
    //     header('Location: success.php');
    // }

    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas au bon format";
    };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>

<body>

    <?php // Affichage des éventuelles erreurs 
    if (count($errors) > 0) : ?>
        <div class="border border-danger rounded p-3 m-5 bg-danger">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php
    //if count()
    if (!empty($errors)) die();
    ?>

    <div class="containerResponseForm">
        <h1>Vous êtes :</h1>
        <ul>
            <li><span><?= htmlentities($_POST['user_lastname']) ?></span></li>
            <li><span><?= htmlentities($_POST['user_firstname']) ?></span></li>
            <li><span><?= htmlentities($_POST['user_email']) ?></span></li>
            <li><span><?= htmlentities($_POST['user_phoneNumber']) ?></span></li>
            <li><span><?= htmlentities($_POST['user_equipment']) ?></span></li>
        </ul>

        <h1>C'est parti pour l'aventure de votre vie ! 😄</h1>
        <?php
        $fullMessage = ('Merci ' . $_POST['user_lastname'] . "\n" . $_POST['user_firstname'] . "\n" . ' de nous avoir contacté à propos de ' . "\n" . $_POST['user_equipment'] . "\n" . '. Un de nos conseillers vous contactera soit à l’adresse ' . "\n" . $_POST['user_email'] . "\n" . 'ou par téléphone au' . "\n" . $_POST['user_phoneNumber'] . "\n" . ' dans les plus brefs délais pour traiter votre demande : ' . "\n" . $_POST['user_message']);

        echo $fullMessage;
        ?>
    </div>

</body>

</html>