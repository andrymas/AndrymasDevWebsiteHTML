<?php 
    include $_SERVER['DOCUMENT_ROOT']."/api/assets/scripts/global_variables.php";
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="center_navbar">
    <div class="main_navbar_desktop">
        <a href=<?php echo $home_add ?> class="navbar_item_desktop">Home</a>
        <a href=<?php echo $proj_add ?> class="navbar_item_desktop">Projects</a>
        <!-- <a href=<?php echo $port_add ?> class="navbar_item_desktop">Portfolio</a> -->
        <!--<a href="../api/info.php" class="navbar_item_desktop">Info</a>-->
    </div>

    <div class="main_navbar_mobile">
        <a href="javascript:void(0);" class="menu_icon" onclick="openMenu()">
            <i class="fa fa-bars"></i>
        </a>
        <div id="link_home_mobile_menu">
            <a href=<?php echo $home_add ?> class="navbar_item_mobile">Home</a>
            <a href=<?php echo $proj_add ?> class="navbar_item_mobile">Projects</a>
            <!-- <a href=<?php echo $port_add ?> class="navbar_item_mobile">Portfolio</a> -->
            <!--<a href="../api/info.php" class="navbar_item_mobile">Info</a>-->
        </div>
    </div>

    
</div>
