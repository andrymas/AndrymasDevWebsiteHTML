<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <?php require_once ('elements/dynamic_body.php') ?>
    <?php
            require_once "elements/header.php";
    ?>
</head>
<body style="overflow-x: hidden;">

<?php
    require_once "elements/required.php";
?>
<?php
    require_once "elements/navbar.php";
    echo "<h1 class='proj' style='margin-top: calc(20px + 8vw);'>GAMES</h1>";
    require_once "elements/games_list.php"
?>

<?php
    echo "<h1 class='proj' style='margin-top: calc(25px + 1vw);'>OTHER</h1>";
    require_once "elements/proj_list.php"
?>
    

</body>
</html>