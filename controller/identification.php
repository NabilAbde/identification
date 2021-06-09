<?php
session_start();
$error = true;

if (!empty($_POST)) :
    if (!empty($_POST['email']) and !empty($_POST['password'])) :
        $error = false;
        $msg = 'Bravo vous êtes connecté.';

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        header("Location:index.php?action=welcome");

    else :
        $error = true;
        $msg = 'Adresse email ou mot de passe incorrect.';
    endif;
endif;
