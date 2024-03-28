<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="icon" type="image/x-icon" href="../api/favicon.png">
    </head>
<body scroll="no" style="overflow: hidden; position:relative; margin:0;">
<div style="position:absolute; left:0; top:0; width:100%; height:100%; overflow:hidden;"></div>
<?php
    require "elements/required.php";
?>


<div class="hero">
    <div class="blurmask">
        <img class="blob" src="assets/svg/blob1.svg" alt="blob" style="scale:60%; left:50%;top:10%">
        <img class="blob" src="assets/svg/blob2.svg" alt="blob" style="scale:40%;">
        <img class="blob" src="assets/svg/blob3.svg" alt="blob" style="scale:30%; left:-50%; top:10%">
    </div>

</div>

<?php
    require "elements/navbar.php";
?>

<div class="center" style="margin-top: 12%">
    <h1 class="greetings" style="margin-bottom: -20px">Andrymas<span class="greetings">Dev</span></h1>
    <h3 class="greetings">Hey there! I'm a 17-year-old Italian student, sharing my journey and passions through this website.</h3>
    <button><a href="projects.php">PROJECTS</a></button>
</div>

</body>
</html>