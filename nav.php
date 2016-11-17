<?php
//include "/incs/session_detect.php"; 
$rootpath = $_SERVER['DOCUMENT_ROOT'];
require_once $rootpath . "/classes/Cart.class.php";
require_once $rootpath . "/classes/Product.class.php";
if (!isset($_SESSION)) {
    session_start();
}
$UsrPriv = $_SESSION["UsrPriv"];
$login =  $_SESSION["login"];
$rootpath = $_SERVER['DOCUMENT_ROOT'];
?>

<div class="navBgWrapper">
    <div class='desktop-burger'><i class='icon-menu-1'></i></div>
    <div class="navWidthWrapper">


        <div class="logoWrapper">
            <a class="logoLink" href="preorder/index.php"><img class="navLogo" src="../images/VJ_logo_black.png" alt="Virgil James" /></a>
        </div>

        
        <div class="rightItemsContainer">
            <div class="textLinksContainer">
                <a href="preorder/index.php">Shop</a>
                <a href="preorder/about.php">About</a>
            </div>
            <div id="CartNavContainer" class="iconWrapper cartIconWrapper cartDropdownWrapper">
                <?php include $rootpath.'/incs/navCart.php'; ?>
            </div>
            <div class="iconWrapper userDropdownWrapper">
                <?php include $rootpath.'/incs/navUser.php'; ?>
            </div>
        </div>


        <div class="bottomBorder">
        </div>


    </div>
</div>

<!-- <div class="navPlaceholder"></div> -->

<div class="scrollWaypoint"></div>