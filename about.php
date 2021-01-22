<?php
include('header.php');
$about=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM about WHERE about_id='1'"))
?>


<section id="page-title" class="" data-bg-parallax="img/banner/sky.png">
    <div class="container" style="text-align: center;">
        <a href="index.php"> <img src="img/logo.png" alt="" class="width15"> </a>
        <br>
        <br>
        <div class="page-title">
            <h1 class="banin"><?=$titleinfo['about'];?></h1>
        </div>
    </div>
    <img src="img/banner/cloud.png" alt="" class="w-100">               
</section>





<section style="padding-top:20px;padding-bottom:0px">

        <div class="heading-text heading-section ser text-center">
            <h2><?=$about['title1'];?></h2>
            <p><?=$about['subtitle1'];?></p>
        </div>
    <img src="img/mm1.png" alt="" class="mm1">
    <img src="img/4.png" alt="" class="m4">
    <img src="img/roc4.png" alt="" class="m2">
    <div class="container contt">
        <div class="row">
            <div class="col-lg-4">
                <div class="heading-section text-center">

                    <img src="images/about/<?=$about['image'];?>" alt="Invicts company" width="90%" class="mb-4">

                </div>
            </div>
            <div class="col-lg-8">
                <p style="text-align:left; color:#000">
                <?=$about['paragraph'];?>
                </p>
            </div>
        </div>
    </div>
</section>


<br>


<section class="box-fancy section-fullwidth text-light p-b-0 p-t-0">
    <h2 class="heading-text heading-section" style="text-align: center; color: #D5090E!important;"><?=$about['title2'];?></h1>
        <h4 style="text-align: center; color: #000!important;"><?=$about['subtitle2'];?></h4>
        <div class="row">

            <div class="col-lg-3" style="background-color: rgb(37 11 56);">
                <h1 class="text-lg text-uppercase">01.</h1>
                <h3><?=$about['sec1'];?></h3>
                <!-- <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span> -->
            </div>
            <div class="col-lg-3" style="background-color: rgb(47 10 56);">
                <h1 class="text-lg text-uppercase">02.</h1>
                <h3><?=$about['sec2'];?></h3>
                <!-- <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span> -->
            </div>
            <div class="col-lg-3" style="background-color: rgb(51 11 59 / 97%);">
                <h1 class="text-lg text-uppercase">03.</h1>
                <h3><?=$about['sec3'];?></h3>
                <!-- <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span> -->
            </div>
            <div class="col-lg-3" style="background-color: rgb(68 19 78);">
                <h1 class="text-lg text-uppercase">04.</h1>
                <h3><?=$about['sec4'];?></h3>
                <!-- <span>The most happiest time of the day!. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story, that never been told!. </span> -->
            </div>
        </div>
</section>








<?php
include('footer.php');
?>