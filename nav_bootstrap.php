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

<div class="headerContainer">
    <div class="navWidthWrapper">
        <div class="logoWrapper">
            <a class="logoLink" href="preorder/index.php">
                <img class="navLogo" src="../images/VJ_logo.svg" alt="Virgil James" />
            </a>
        </div>
        <div class="rightItemsContainer">
            <div class="desktopLinksContainer">
                <div class="textLinksContainer">
                    <a href="preorder/index.php">Shop</a>
                    <a href="preorder/about.php">About</a>
                </div>
                <a class="iconWrapper" href="javascript:goToCheckout();">
                    <i class="icon-basket"></i>
                </a>           
                <a class="iconWrapper" href="preorder/login.php">
                    <i class="icon-torso"></i>
                </a>
            </div>
            <div class='burgerContainer'>
                <i class='icon-menu-1'></i>
            </div>


            
            <div class="dropdown">
                <div class="dropdownLinksContainer">
                    <div class="textLinksContainer">
                        <a href="preorder/index.php">Shop</a>
                        <a href="preorder/about.php">About</a>

                        <a href="javascript:goToCheckout();">Basket</a>
                        <a href="preorder/login.php">Account</a>

                    </div>


                    <!--
                    <a class="iconWrapper" href="javascript:goToCheckout();">
                        <i class="icon-basket"></i>
                    </a>           
                    <a class="iconWrapper" href="preorder/login.php">
                        <i class="icon-torso"></i>
                    </a>
                    -->


                </div>
            </div>
            <script>
                jQuery(function($){
                    $( '.icon-menu-1' ).click(function(){
                        $('.dropdown').toggleClass('visible')
                    });
                });
            </script>




        </div>
        <div class="bottomBorder">
        </div>
    </div>
</div>
<div class="scrollWaypoint"></div>