<?php 
	include("header.php");
?>


        <section id="page-title" class="" data-bg-parallax="img/banner/sky.png">
            <div class="container" style="text-align: center;">
            <a href="index.php"> <img src="img/logo.png" alt="" class="width15"> </a>
                <br>
                <br>
                    <div class="page-title">
                        <h1 class="banin">Packages </h1>
                    </div>                      
            </div>
    <img src="img/banner/cloud.png" alt="" class="w-100">               
</section>


<section id="section3" class="p-t-15 p-b-20">
<img src="img/m3.png" alt="" class="m3">
<img src="img/4.png" alt="" class="m4">
    <div class="container">
        <div class="col-lg-8 m-b-100  center">
            <div class="heading-text heading-section pack text-center">
                <!-- <h5>See by yourself</h5> -->
                <h2>The Most Affordable Pricing</h2>
                <p>Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. Fusce id mi diam, non ornare.</p>
            </div>
        </div>
        <!-- <hr class="space"> -->
        
        <div class="row pricing-table">
        <?php $packages= mysqli_query($conn,"SELECT * FROM packages WHERE status='1'");
        $i=0;
        while($row=mysqli_fetch_array($packages)){
            $i++; ?>

<div class="col-lg-4 col-md-12 col-12">
                <div class="plan <?php if($i=='2'){ echo " featured";}?>">
                    <div class="plan-header">
                        <h4><?=$row['title'];?></h4>
                        <p class="text-muted"><?=$row['subtitle'];?></p>
                        <div class="plan-price">0<?=$i;?>.</div>
                    </div>
                    <div class="plan-list">
                        <ul>            <?php $features = json_decode($row['package_info'], true);
                                        foreach ($features as $key => $value) { ?>
                                        <li><?php if($value=='1'){ echo '<i class="icon-x-circle red"> </i> '; }else{ echo '<i class="icon-check-circle green"> </i> ';} ?><?=$key;?></li>
                                        
                                        <?php } ?>
                        </ul>
                        <div class="plan-button">
                        <a href="contact.php#con" class="btn btn-rounded btn-light">Contact </a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
            
            
        </div>
    </div>

    <img src="img/roc.png" class="m10" alt="">
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


