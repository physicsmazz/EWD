<?php
require_once 'includes/config.inc.php';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>e-Volution Web Development -> Moving Forward</title>
    <meta name="description" content="Creating a design to best showcase your sites purpose and needs. All projects are approached with the thought of functionality as well. Our team understands the importance of capturing an audience as well as keeping their interest within your site. Each site’s design is tailored to each individual client. Functionality together with a stream line design. Every project is assembled as a group with each lead member and client to assure quality results.">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <!--    <link rel="apple-touch-icon" href="apple-touch-icon.png">-->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/libs/modernizr-2.0.6.min.js"></script>

</head>
<body>
<div id="noJs">
    You must have JavaScript installed.
</div>
<div id="container" class="home">
    <?php
    $page = 'home';
    require_once 'includes/header.inc.php';
    ?>

    <div id="main" role="main">
        <div id="sliderContainer">
            <div id="sliderImg">
                <img src="imgs/a_home.jpg" alt="Our Services">
            </div>
        </div>
        <div id="phoneLine"></div>

    </div>

    <?php
    require_once 'includes/footer.inc.php';
    $admin = false;
    $ui = false;
    require_once('includes/scripts.inc.php');
    ?>
    </div>
    <script defer src="js/plugins.js"></script>
    <script defer src="js/script.js"></script>
    <?php include_once 'includes/analytics.inc.php'; ?>
    <!--[if lt IE 8 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload', function () {
        CFInstall.check({mode:'overlay'})
    })</script>
    <![endif]-->

</body>
</html>