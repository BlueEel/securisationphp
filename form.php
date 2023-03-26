<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/thanks.php" method="post">
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_lastname" required>
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="user_firstname" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="user_email" required>
        </div>
        <div>
            <label for="phoneNumber">Téléphone</label>
            <input type="tel" id="phoneNumber" name="user_phoneNumber" pattern="[0-9]{10}" required>
        </div>
        <div>
            <label for="equipment">Choisissez votre équipement:</label>
            <select id="equipment" name="user_equipment" required>
                <option value="">--Choisissez parmi les équipements suivants--</option>
                <option value="Épée">Épée</option>
                <option value="Bouclier">Bouclier</option>
                <option value="Baguette">Baguette</option>
                <option value="Fouet">Fouet</option>
                <option value="Arc">Arc</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>


        <?php
        // var_dump($_GET);
        // echo $_GET['user_name'];
        ?>
        <!--<a href="article.php?key=value&other_key=other_value">link</a>-->
    </form>
</body>

</html>