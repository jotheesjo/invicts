<?php 
	include("header.php");
?>




        <section id="page-title" class="" data-bg-parallax="img/banner/sky.png">
            <div class="container" style="text-align: center;">
            <a href="index.php"> <img src="img/logo.png" alt="" class="width15"> </a>
                <br>
                <br>
                    <div class="page-title">
                        <h1 class="banin">Portfolio </h1>
                    </div>                      
            </div>
    <img src="img/banner/cloud.png" alt="" class="w-100">               
</section> 
   <section class="pb-5 pt-0">
            <img src="img/m3.png" alt="" class="m3">
            <img src="img/4.png" alt="" class="m4">

            <div class="container">
                <div class="heading-text heading-section Portfolio text-center">
                    <h2>Our Portfolio</h2>
                    <p>These are just a few glimpses of creative work we’ve created but not an indication of all that we can do. </p>
                </div>




                <div data-lightbox="gallery" class="row">
                <?php $sq=mysqli_query($conn, "SELECT * FROM portfolio WHERE status='1'");
                while($row=mysqli_fetch_array($sq)){   ?>
                 <div class="col-lg-4" style="padding: 0 35px 35px;">
                    <div class="grid-item">
                        <div class="grid-item-wrap" style=" box-shadow: 0px 1px 20px 0px #ebebeb; border-radius: 15px;">
                            <div class="grid-image"> <img alt="Image Lightbox" src="images/portfolio/<?=$row['image'];?>" />
                            </div>
                            <div class="oport">
                                <h5 style="margin-bottom: 0px;"><?=$row['title'];?></h5>
                                <p><?=$row['description'];?></p>
                                <hr>
                            </div>
                            <div class="grid-description">
                                <a href="<?=$row['link'];?>" data-lightbox="iframe"><i class="icon-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                </div>

                <div class="text-center" style=" margin-top: -20px;">
                    <a target="_blank" href="https://www.youtube.com/channel/UCgNrXsZgFEtDz3nZ753kcag/videos" data-animate="fadeInUp" data-animate-delay="900" class="btn btn-light btn-rounded" style="text-transform: capitalize; text-align: center;"> View all </a>
                </div>



            </div>

            <img src="img/roc.png" class="m10" alt="">
            <img src="img/roc1.png" class="m11" alt="">
            <!-- <img src="img/portd.png" width="100%" class="portd"> -->
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


        



<?php 
	include("footer.php");
?>


