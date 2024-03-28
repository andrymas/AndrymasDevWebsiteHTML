<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <?php require ('elements/dynamic_body.php') ?>
</head>
<body>
<?php
    require "elements/required.php";
?>
<?php
    require "elements/navbar.php";
    echo "<h1 class='proj' style='margin-top: calc(20px + 8vw);'>GAMES</h1>";
    require "elements/games_list.php"
?>

<?php
    echo "<h1 class='proj' style='margin-top: calc(25px + 1vw);'>OTHER</h1>";
    require "elements/proj_list.php"
?>
    
</body>
</html>