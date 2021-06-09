<?php
require_once('controller/inscription.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>

    <?php
    if (!empty($aErrors)) :
    ?>
        <div style="color:red;border:1px solid red;">
            <?php
            foreach ($aErrors as $error) :
            ?>
                <p>- <?php echo $error; ?></p>
            <?php
            endforeach;
            ?>
        </div>
    <?php
    endif;
    ?>

    <?php
    if (!empty($aErrors) or empty($_POST)) :
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?action=inscription" method="POST">
            <p>
                <label for="name">Votre nom</label>
                <input type="text" id="name" name="name" <?php if (!empty($_POST['name'])) : ?> value="<?php echo $_POST['name'];  ?>" <?php endif; ?> />
            </p>
            <p>
                <label for="email">Votre email</label>
                <input type="email" id="email" name="email" <?php if (!empty($_POST['email'])) : ?>value="<?php echo $_POST['email']; ?>" <?php endif; ?> />
            </p>
            <p>
                <label for="password">Votre mot de passe</label>
                <input type="password" id="password" name="password" <?php if (!empty($_POST['password'])) : ?>value="<?php echo $_POST['password']; ?>" <?php endif; ?> />
            </p>
            <p>
                <label for="confirmPassword">Confirmation de mot de passe</label>
                <input type="password" id="confirmPassword" name="confirmPassword" />
            </p>
            <p>
                <input type="submit" value="Je m'inscris" />
            </p>
        </form>
    <?php
    else :
    ?>
        <div style="color:green;">Votre compte a bien été créer</div>
        <a href="index.php?action=identification" title="Identifiez-vous">Identifiez-vous</a>

    <?php
    endif;
    ?>

</body>

</html>