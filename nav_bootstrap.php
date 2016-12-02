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
        <div class="headerHeightWrapper">
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
            </div>
        </div>
        <div class="dropdown">
            <div class="dropdownLinksContainer">
                <div class="textLinksContainer">
                    <a href="preorder/index.php">Shop</a>
                    <a href="preorder/about.php">About</a>

                    
                    <!--
                    <a href="javascript:goToCheckout();">Cart</a>
                    <a href="preorder/login.php">Account</a>
                    -->
                    <a class="iconWrapper" href="javascript:goToCheckout();">
                        <i class="icon-basket"></i>
                    </a>           
                    <a class="iconWrapper" href="preorder/login.php">
                        <i class="icon-torso"></i>
                    </a>


                </div>
            </div>
        </div>
        <script>
            jQuery(function($){
                $( '.icon-menu-1' ).click(function(){
                    $('.dropdown').toggleClass('visible')
                });
            });
        </script>


        <script type="text/javascript">

            //$("body").text("begihnnning");
            //document.body.innerHTML = document.body.innerHTML + 'Extra stuff';

            
            var lastScrollTop = 0;
            var delta = 5;
            var headerHeight = $(".headerContainer").outerHeight();

            var didScroll;
            // on scroll, let the interval function know the user has scrolled
            $(window).scroll(function(event){
                didScroll = true;
            });
            // run hasScrolled() and reset didScroll status
            setInterval(function() {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250);


            /*
            $('body').bind('touchmove', function(e) { 
                //console.log($(this).scrollTop()); // Replace this with your code.
                didScroll = true;
                $("body").text("touchmove");

            });
            document.addEventListener("scroll", scroll, false);
            function scroll(){
                console.log("got this");
                $("body").text("got this");
            }
            */



            function hasScrolled() {
                // do stuff here...

                //console.log("hasScrolled()");
                var st = $(this).scrollTop();
                // console.log("st: " + st);
                if(Math.abs(lastScrollTop - st) <= delta){
                    return;
                }

                // If current position > last position AND scrolled past navbar...
                if (st > lastScrollTop && st > headerHeight){
                    // Scroll Down
                    
                    //console.log("adding headerUp.......");
                    //$(‘headerContainer’).removeClass(‘nav-down’).addClass(‘nav-up’);
                    $(".headerContainer").addClass("headerUp");

                } else {
                    // Scroll Up
                    // If did not scroll past the document (possible on mac)...
                    if(st + $(window).height() < $(document).height()) { 
                        
                        //$(‘header’).removeClass(‘nav-up’).addClass(‘nav-down’);
                        $(".headerContainer").removeClass("headerUp");

                        //$("body").text("up");

                    }
                }
                lastScrollTop = st;
            }
        </script>


        <div class="bottomBorder">
        </div>
    </div>
</div>
<div class="scrollWaypoint"></div>