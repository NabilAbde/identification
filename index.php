<?php


if (!empty($_GET['action'])) :
    switch ($_GET['action']):

        case 'inscription':
            include('view/inscription.php');
            break;

        case 'welcome':
            include('view/welcome.php');
            break;

        default:
            include('view/identification.php');
            break;

    endswitch;
else :
    include("view/identification.php");
endif;
