<?php 
	include("header.php");
?>
<section id="page-title" class="" data-bg-parallax="img/banner/sky.png">
            <div class="container" style="text-align: center;">
            <a href="index.php"> 
                <img src="img/logo.png" alt="" class="width15"> </a>
                <br>
                <br>
                    <div class="page-title">
                        <h1 class="banin">Contact Us  </h1>
                    </div> 
                </div>
                <img src="img/banner/cloud.png" alt="" class="w-100">               
        </section>
 <section id="con p-20">
<img src="img/roc1.png" alt="" class="m2">  
<img src="img/roc.png" alt="" class="m1">
<img src="img/m1.png" alt="" class="m5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Get In Touch</h3>
                <p style="font-size:16px;" ><?=$admininfo['get_in_touch'];?></p>
                <div class="m-t-30">
 <form class="widget-contact-form" novalidate action="contact.php" role="form" method="post">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="name">Name</label>
                                                            <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="email">Email</label>
                                                            <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="subject">Subject</label>
                                                            <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="name">Phone</label>
                                                            <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Phone">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message">Message</label>
                                                        <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div class="form-group col-md-12 text-center">
                                                            <button class="btn btn-light btn-rounded" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                                                        </div>
                                                    </div>
                                                </form>
                    
                    
                </div>
            </div>
            <div class="col-lg-6">
				<h3 class="text-uppercase">Address & Map</h3>
				
				<address>	
                <?=$admininfo['admin_addr1'];?> <br>
                <?=$admininfo['admin_addr2'];?> <br>
PH:<a href="tel:<?=$admininfo['admin_mobile'];?>"> <?=$admininfo['admin_mobile'];?></a><br>
Email:<a href="mailto:<?=$admininfo['admin_email'];?>"><?=$admininfo['admin_email'];?></a>
    </address>
                

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.3347832675377!2d80.1441227141176!3d12.886181390911965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525928facf1711%3A0x367499e28ae99eff!2sExotic%20villas!5e0!3m2!1sen!2sin!4v1598684340293!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
        </div>
    </div>
</section>









        <section class="background-colored text-center" style="background-image: url(img/cbg.JPG); background-size: 100% 100%; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="widget widget-newsletter">
                            <form class="widget-subscribe-form" action="contact.php" role="form" method="post" novalidate="novalidate">
                                <h3 class="text-light">Subscribe to our Newsletter</h3>
                                <div class="input-group mb-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                                    </div>
                                    <input type="email" required name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <div class="input-group-append">
                                        <button type="submit" id="widget-subscribe-submit-button" class="ebtn">Subscribe</button>
                                    </div>
                                </div>
                                <br>
                                <small class="text-light">Stay informed on our latest news!</small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                                    
             



<!-- sidebar -->
<div class="sidebar-contact">
            <div class="toggle"> <span class="contact-text " style="color:#FFFFFF">Free Consultation</span> </div>
            <h4>Share your details to get an animation expert to call you back</h4>
            <div class="scroll">
            <form>
            <input type="text" name="" placeholder="Name">
            <input type="email" name="" placeholder="Email">
            <input type="rel" name="" placeholder="Phone Number">
            <textarea placeholder="Message here.."></textarea>
            <input type="submit" name="" value="send">
            </form>
            </div>
        </div>






        <!-- <section style="padding: 0;"> -->
        <div class="container conts">
            <img src="img/m1.png" class="m12" alt="">
            <div class="row">
                <div class="col-lg-3" style="z-index: 1;">
                    <img src="img/gif/Get_Your_Videos.gif" class="cimg phone">
                </div>

                <div class="col-lg-6" style="padding-top: 26px;padding-bottom: 10px;padding-left: 5px;">
                    <h1 class="stud" style="color: #000000; margin-bottom: 0px; text-align: left;"> Get Your Video Today </h1>
                    <br>
                    <p style="color: #747474;margin-bottom: 0px;text-align: left;font-style: italic;">For further enquiries about our services, you can get in touch with us through call or email. You can also visit our office directly to meet us in person. </p>
                </div>

                <div class="col-lg-2 getquote">
                    <div class="text-center">
                        <a data-target="#modal-3" data-toggle="modal" href="#" data-animate-delay="900" class="btn btn-light btn-rounded" style="text-transform: capitalize; text-align: center;">get a quote </a>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- </section> -->

        <!-- popup banner -->
        <div class="modal" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true" style="padding-right: 0px;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 id="modal-label-3" class="modal-title"> Get Your Video Today </h1>
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    </div>
                    <div class="modal-body">

                                                <form class="widget-contact-form" novalidate action="contact.php" role="form" method="post">
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="name">Name</label>
                                                            <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="email">Email</label>
                                                            <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="subject">Subject</label>
                                                            <input type="text" name="widget-contact-form-subject" required class="form-control required" placeholder="Subject...">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="name">Phone</label>
                                                            <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Phone">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message">Message</label>
                                                        <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                                    </div>
                                                    <br>

                                                    <div class="row">
                                                        <div class="form-group col-md-12 text-center">
                                                            <button class="btn btn-light btn-rounded" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                                                        </div>
                                                    </div>
                                                </form>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer">
            <img src="img/m1.png" class="m10" alt="">
            <img src="img/m2.png" class="m11" alt="">
            <div class="footer-content">
                <div class="container">
                    <div class="row">

                       

                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Company</div>
                                <ul class="list">
                                    <li><a href="index.php">Home</a></li>                            
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="process.php">Process</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title"> </div>
                                <ul class="list">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="service.php">Services</a></li>                                                                                                                                                 
                                    <!-- <li><a href="testimonials.php">Testimonials</a></li>                                                                                                                                                  -->
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">Service </div>
                                <ul class="list">
                                    <li><a href="service.php">  2D & 3D Cartoon Animation </a></li>
                                    <li><a href="service.php"> Business Videos </a></li>
                                    <li><a href="service.php"> Corporate Video Production </a></li>
                                   
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title"> </div>
                                <ul class="list">
                                    <li><a href="service.php">TV Ads Commercials </a></li>
                                    <li><a href="service.php"> Illustration Services </a></li>
                                    <li><a href="service.php"> Animated Social Media Ads </a></li>
                                    <!-- <li><a href="service.php"> More>> </a></li> -->
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="col-lg-3">
                            <div class="widget text-center">
                                <a href="index.php"><img src="img/footlogo.png" alt="" style="padding-top: 40px;" width="80%"></a>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>

            <a href="#" id="scroll" style="display: none;"><span></span></a>
            <a href="https://api.whatsapp.com/send?phone=919952000728&text=Hello%20Invicts!" target="_blank" style="position: relative; " >
                <img src="img/wa.png"  class="watsapp" style="float: right; z-index:2; padding-top: 100px;">
            </a>



            <div class="copyright-content">
                <div class="container contt1150">

                    <div class="copyright-text">
                    <div class="row">   
                        <div class="col-lg-6">
                                &copy; 2020 Invict Studios. All rights Reserved.
                        </div>
                        <div class="col-lg-6">
                             <a style="float: right;" href="https://clouddreams.in/" target="_blank"> Website Designed By Clouddreams </a> 
                        </div>
                    </div>
                </div>
            </div>
        </footer>



    </div>
    <script src="js/jquery.js "></script>
    <script src="js/plugins.js "></script>
    <script src="js/functions.js "></script>
    <script src="css/pageloader/pageloader.js"></script>
    <script src="css/pageloader/pageloader.init.js"></script>
    <!-- <script  src="https://code.jquery.com/jquery-3.3.1.js"></script> -->

        <script>
            $(document).ready(function(){ 
                $(window).scroll(function(){ 
                    if ($(this).scrollTop() > 100) { 
                        $('#scroll').fadeIn(); 
                    } else { 
                        $('#scroll').fadeOut(); 
                    } 
                }); 
                $('#scroll').click(function(){ 
                    $("html, body").animate({ scrollTop: 0 }, 600); 
                    return false; 
                }); 
            });
        </script>

        <script>
            $(document).ready(function(){
            $('.toggle').click(function(){
                $('.sidebar-contact').toggleClass('active')
                $('.toggle').toggleClass('active')
            })
            })
        </script>


        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/5fb367501535bf152a56a9fb/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
                </script>
            <!--End of Tawk.to Script-->


</body>

</html>