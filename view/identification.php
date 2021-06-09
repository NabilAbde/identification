<?php require_once('controller/identification.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identification</title>
</head>

<body>
    <?php
    if (!empty($msg)) :
    ?>
        <p><?php echo $msg; ?></p>
    <?php
    endif;

    if (!empty($error) or $error) :
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; //adresse de la page en cours pout tout traiter sur cette page
                        ?>" method="POST">
            <p>
                <label for="email">Votre email</label>
                <input type="email" id="email" name="email" />
            </p>
            <p>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" />
            </p>
            <p>
                <input type="submit" value="connexion" />
            </p>
        </form>
    <?php
    endif;

    ?>
    <a href="index.php?action=inscription" title="Créer un compte">Créer un compte</a>
</body>

</html>