<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="icon" type="image/x-icon" href="../favicon.png">
        <script src="./assets/scripts/menu.js"></script>
    </head>
<body scroll="no" style="overflow: hidden; position:relative; margin:0;">
    <div style="position:absolute; left:0; top:0; width:100%; height:100%; overflow:hidden;"></div>
    <?php
        require_once "elements/required.php";
    ?>

    <?php
        require_once "elements/navbar.php";
    ?>

<div class="hero">
    <div class="blurmask">
        <img class="blob" src="../assets/svg/blob1.svg" alt="blob" style="scale:60%; left:50%;top:10%">
        <img class="blob" src="../assets/svg/blob2.svg" alt="blob" style="scale:40%;">
        <img class="blob" src="../assets/svg/blob3.svg" alt="blob" style="scale:30%; left:-50%; top:10%">
    </div>
</div>

</body>
</html>