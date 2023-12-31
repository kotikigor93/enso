<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>ENSO</title>
</head>
<body>
<nav class="nav desctop-nav">
    <div class="container">
        <div class="header-nav">
            <a href="/" class="logo">
                <img src="img/logo.png" alt="ENSO">
            </a>
            <ul class="header-nav_items">
                <li <?php if($_SERVER['REQUEST_URI']=='/'){ ?> class="active-menu" <?php } ?>><a href="/">HOME</a></li>
                <li <?php if($_SERVER['REQUEST_URI']=='/services.php'){ ?> class="active-menu" <?php } ?>><a href="services.php">SERVICES</a></li>
                <li <?php if($_SERVER['REQUEST_URI']=='/about.php'){ ?> class="active-menu" <?php } ?>><a href="about.php">ABOUT US</a></li>
                <li <?php if($_SERVER['REQUEST_URI']=='/contact.php'){ ?> class="active-menu" <?php } ?>><a href="contact.php">CONTACT</a></li>
            </ul>
            <div class="website">
                SELECT WEBSITE DESIGN
            </div>
        </div>
    </div>
</nav>
<nav class="nav mobile-nav">
    <div class="container">
        <div class="header-nav">
            <a href="/" class="logo">
                <img src="img/logo.png" alt="ENSO">
            </a>
            <div class="burger">
                <div class="burger-line"></div>
                <div class="burger-line"></div>
                <div class="burger-line"></div>
            </div>
        </div>
        <div class="mobile-block mobile-hide">
            <ul class="header-nav_items">
                <li <?php if($_SERVER['REQUEST_URI']=='/'){ ?> class="active-menu" <?php } ?>><a href="/">HOME</a></li>
                <li <?php if($_SERVER['REQUEST_URI']=='/services.php'){ ?> class="active-menu" <?php } ?>><a href="services.php">SERVICES</a></li>
                <li <?php if($_SERVER['REQUEST_URI']=='/about.php'){ ?> class="active-menu" <?php } ?>><a href="about.php">ABOUT US</a></li>
                <li <?php if($_SERVER['REQUEST_URI']=='/contact.php'){ ?> class="active-menu" <?php } ?>><a href="contact.php">CONTACT</a></li>
            </ul>
            <a href="tel:+19177216123" class="cont"><img src="img/call-mob.png" alt="ENSO">Call us: +1 (917) 721-6123</a>
            <a href="mailto:hello@enso.com" class="cont"><img src="img/mail-mob.png" alt="ENSO">hello@enso.com</a>
            <a href="#" class="start">Start your project now</a>
        </div>

    </div>
</nav>
