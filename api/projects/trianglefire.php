<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Fire</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="icon" type="image/x-icon" href="../../favicon.png">
    <script src="../assets/scripts/menu.js"></script>
</head>
<body>
<?php
    require_once __DIR__."/"."../elements/required.php";
?>
<?php
    require_once __DIR__."/"."../elements/navbar.php";
?>

<div class="center" style='margin-top: calc(20px + 8vw);'>
    <img src="../../assets/images/logos/TriangleFireLogo.webp" alt="" class="logo">
    <h1 class='proj' >TRIANGLE FIRE</h1>
    <h2 class="proj_sub">Top-down shooter with various enemy types and an upgradable character</h2>

    <div class="screenshotcontainer">

        <a href="../../assets/images/screenshots/trianglefirescreenshot1.webp">
            <img src="../../assets/images/screenshots/trianglefirescreenshot1.webp" alt="" class="screenshot">
        </a>

        <a href="../../assets/images/screenshots/trianglefirescreenshot2.webp">
            <img src="../../assets/images/screenshots/trianglefirescreenshot2.webp" alt="" class="screenshot">
        </a>

        <a href="../../assets/images/screenshots/trianglefirescreenshot3.webp">
            <img src="../../assets/images/screenshots/trianglefirescreenshot3.webp" alt="" class="screenshot">
        </a>

        <a href="../../assets/images/screenshots/trianglefirescreenshot4.webp">
            <img src="../../assets/images/screenshots/trianglefirescreenshot4.webp" alt="" class="screenshot">
        </a>

    </div>

    <button>
        <a href="https://play.google.com/store/apps/details?id=com.Andrymas.TriangleFire" target="_blank">
            DOWNLOAD
        </a>
        <img src="../../assets/images/logos/android.webp" alt="" class="proj_platform_dl">
    </button>
    
</div>

<div class="center_meter">
    <div class="column">
        <h1><?php echo $tf_percentage ?>% completed</h1>
        <meter id="completition" min="0" max="100" low="33" high="66" optimum="90" value=<?php echo $tf_percentage ?>></meter>
        <h2>Last update:</h2>
        <p><?php echo $tf_last_update ?></p>
    </div>
</div>
    
</body>
</html>