<header>
    <nav>
        <ul>
            <li <?php if($page=='home') echo 'class="active"'; ?>><a href="index.php">HOME</a></li>
            <li <?php if($page=='portfolio') echo 'class="active"'; ?>><a href="portfolio.php">PORTFOLIO</a></li>
            <li <?php if($page=='services') echo 'class="active"'; ?>><a href="services.php">SERVICES</a></li>
            <li <?php if($page=='about') echo 'class="active"'; ?>><a href="about.php">ABOUT US</a></li>
            <li <?php if($page=='contact') echo 'class="active"'; ?>><a href="contact.php">CONTACT US</a></li>
        </ul>
    </nav>
    <div id="logo"></div>
</header>
