<?php
session_start();

if (empty($_SESSION['email'])) :
    header('Location:index.php');
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <p>Bienvenue <strong><?php echo $_SESSION['email']; ?></strong></p>


</body>

</html>