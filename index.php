<?php
    //imports the files here
    include_once "Include/Links.php";
    include_once "Include/Header.php";
    include_once "Include/Footer.php";
    include_once "Include/Main.php";
    include_once "Include/Hero.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<!------Place CSS links, and JS links here------->
    <?php CSSLinks(); ?>
</head>
<body>
    <?php headers(); ?>
    <?php mainhero(); ?>
    <?php main(); ?>
    <!-------Place the whole body of the website here  and the footer-------->

    <?php footer(); ?>
    <?php JSLinks(); ?>
</body>
</html>