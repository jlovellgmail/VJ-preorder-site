
<?php
    $rootpath_preorder = $_SERVER['DOCUMENT_ROOT']."/preorder/";
?>

<!doctype html>
<?php $page = "login"; ?>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Login | Virgil James</title>
        
        <?php include '/incs/head-links.php'; ?>
        
        <link rel="stylesheet" href="/css/forms.css">
        <link rel="stylesheet" href="../css/preorder.css" />

        <script src="/js/login_validation.js"></script>
    </head>
    <body>
        <?php include 'nav.php'; ?>



        <div class="loginPage">
            <div class="mainFrame">
                <div class="contentContainer">
                    <div class="md-five lg-five leftCol">
                        <?php include $rootpath_preorder.'incs/login.php'; ?>
                    </div>
                    <div class="md-one lg-one">
                    </div>
                    <div class="md-five lg-five rightCol">
                        <?php  include $rootpath_preorder.'incs/signUp.php'; ?>
                    </div>
                </div>
            </div>
        </div>



        <?php include '/incs/footer.php'; ?>
        <?php 
            //include '/incs/footer-links.php'; 
        ?>
    </body>
</html>