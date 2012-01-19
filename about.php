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
    <meta name="description" content="">
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
<div id="container" class="about">
    <?php
    $page = 'about';
    require_once 'includes/header.inc.php';
    ?>

    <div id="main" role="main">
        <div id="sliderContainer">
            <div id="sliderImg">
                <img src="imgs/c_about_us.jpg" alt="About Us">

                <div id="aboutText">
                    <h3>The e-Volution Web Development Team</h3>

                    <p>Understanding the importance of quality and performance. Our team works for the client, listening
                        to their needs and transforming that into a system that performs and meets, if not exceeds their
                        expectations. We do not use templates, each project is built from the ground up. Designed and
                        built to meet the needs of our clients along with clear functionality to offer your attended
                        audience a pleasurable, professional, and direct visit. </p>

                    <p>All of our clients share the same goals, but have individual needs. We meet with each client
                        whether it be in person, or via internet consultation. Our clients have direct contact with each
                        lead member. This means if you need coding information, you do not talk to our designer. Our
                        team is built of individuals that excel in their field. At e-Volution Web Development we
                        understand how difficult it is to go it alone, but when you create a great team, you accomplish
                        great things. Let us be a part of your team. There are great opportunities out there, there are
                        just as many web development companies as well. Who’s on your team?</p>

                    <p>Our goals are set high, but our standards are set even higher. Our team works hard to create
                        development systems that we are proud to put our name on. The better your site performs, the
                        better it reflects our workmanship. We are a company that was created solely by word of mouth
                        and hard work. We continue to perform this way with each project and evolve our skills and
                        knowledge every day. Passion is what drives our company. Great people is what moves us forward.
                        Keeping with upcoming trends and understanding the latest advances in technology. Looking to the
                        future, e-Volution Web Development’s team is working together to not only have the ability to
                        design and create the website that you desire, but also to build you a website that will hold
                        weight on the internet and will serve it’s intended purpose, giving your site an edge. We’re not
                        satisfied until you’re satisfied, that’s our promise.</p>
                </div>
            </div>
        </div>
        <div id="phoneLine"></div>
        <div id="tagLine">The future in business is the Internet,...the future is now.</div>
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

<script> // Change UA-XXXXX-X to be your site's ID
//  window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
//  Modernizr.load({
//    load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
//  });
</script>


<!--[if lt IE 8 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload', function () {
    CFInstall.check({mode:'overlay'})
})</script>
<![endif]-->

</body>
</html>