<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stick And Platforms</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="icon" type="image/x-icon" href="../../favicon.png">
</head>
<body>
<?php
    require_once __DIR__."/"."../elements/required.php";
?>
<?php
    require_once "../elements/navbar.php";
?>

<div class="center" style='margin-top: calc(20px + 8vw);'>
    <img src="../../assets/images/logos/stickandplatformslogo.webp" alt="" class="logo">
    <h1 class='proj' >STICK AND PLATFORMS</h1>
    <h2 class="proj_sub">Cartoony platformer with combat mechanics</h2>

    <div class="screenshotcontainer">

        <a href="../../assets/images/screenshots/stickandplatformsscreenshot1.webp">
            <img src="../../assets/images/screenshots/stickandplatformsscreenshot1.webp" alt="" class="screenshot">
        </a>

        <a href="../../assets/images/screenshots/stickandplatformsscreenshot2.webp">
            <img src="../../assets/images/screenshots/stickandplatformsscreenshot2.webp" alt="" class="screenshot">
        </a>

        <a href="../../assets/images/screenshots/stickandplatformsscreenshot3.webp">
            <img src="../../assets/images/screenshots/stickandplatformsscreenshot3.webp" alt="" class="screenshot">
        </a>

    </div>

    <button>
        <a href="https://drive.usercontent.google.com/download?id=11m4i9Rhp9Ibbxy3VfRK-7nO_eWiq_dUb&export=download&authuser=0" target="_blank">
            DOWNLOAD
        </a>
        <img src="../../assets/images/logos/windows.webp" alt="" class="proj_platform_dl">
    </button>
    
</div>

<div class="center_meter">
    <div class="column">
        <h1><?php echo $sap_percentage ?>% completed</h1>
        <meter id="completition" min="0" max="100" low="33" high="66" optimum="90" value=<?php echo $sap_percentage ?>></meter>
        <h2>Last update:</h2>
        <p><?php echo $sap_last_update ?></p>
    </div>
</div>
    
</body>
</html>