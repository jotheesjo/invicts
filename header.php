<?php include("admin/db.php");
$admininfo=mysqli_fetch_assoc(mysqli_query($conn,"select admin_email,admin_mobile,admin_addr1,admin_addr2,get_in_touch FROM admin_profile WHERE admin_id='5'"));?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Invict" />
    <meta name="description" content="Invict Studios">
    <link rel="icon" type="image/png" href="img/logo/slogo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Invict Studios </title>
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pageloader/pageloader.css" rel="stylesheet">
</head>
<!--  class="" -->
<body data-icon="8" >                  
    <div class="body-inner">
        <header id="header" data-transparent="true" data-fullwidth="true" class="header-always-fixed dark submenu-light">
            <div class="header-inner">
                <div class="container">


                <div class="float-left m-t-30 social-icons social-icons-rounded social-icons-colored-hover social-icons-colored">
                    <ul>
                    <li class="social-facebook"><a href="https://www.facebook.com/invicts.s/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-youtube"><a href="https://www.youtube.com/channel/UCgNrXsZgFEtDz3nZ753kcag/featured" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li class="social-vimeo"><a href="https://vimeo.com/user129174218" target="_blank"><i class="fab fa-vimeo"></i></a></li>
                    <li class="social-instagram"><a href="https://www.instagram.com/invictsstudios/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="social-linkedin"><a href="https://www.linkedin.com/in/invicts-studios-598087202/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                    <div class="header-extras float-right">
                        <ul>

                            <li class="hnum hicons"  style="color: #ffffff;" ><?=$admininfo['admin_mobile'];?></li>
                            <li>
                                <a id="menu-overlay-trigger" href="#" class="lines-button x toggle-item" data-target="body" data-class="menu-overlay-active">
                                    <span class="lines"></span>
                                </a>
                            </li>
                        </ul>
                    </div>



                    <div id="mainMenu" class="menu-overlay">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="packages.php">Packages</a></li>
                                    <li><a href="process.php">Process</a></li>
                                    <!-- <li><a href="testimonials.php">Testimonials</a></li> -->
                                    <li><a href="service.php">Services</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>