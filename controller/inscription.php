<?php

if (!empty($_POST)) :

    $aErrors = array();

    if (empty($_POST['name'])) :
        array_push($aErrors, 'Veuillez saisir un nom');
    endif;

    if (empty($_POST['email'])) :
        array_push($aErrors, 'Veuillez saisir une adresse email');
    endif;

    if (empty($_POST['password'])) :
        array_push($aErrors, 'Veuillez saisir un mot de passe');
    endif;

    if (empty($_POST['confirmPassword'])) :
        array_push($aErrors, 'Veuillez saisir une confirmation de mot de passe');
    endif;

    if ($_POST['confirmPassword'] != $_POST['password']) :
        array_push($aErrors, 'Vos mots de passes ne sont pas identiques');
    endif;





    if (empty($aErrors)) :
        session_start(); // demarre la session
        $_SESSION['email'] = $_POST['email'];

    endif;


endif;
