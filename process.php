<?php
include("header.php");
?>

<section id="page-title" class="" data-bg-parallax="img/banner/sky.png">
            <div class="container" style="text-align: center;">
            <a href="index.php"> <img src="img/logo.png" alt="" class="width15"> </a>
                <br>
                <br>
                    <div class="page-title">
                        <h1 class="banin">Process </h1>
                    </div>                      
            </div>
    <img src="img/banner/cloud.png" alt="" class="w-100">               
</section>













<section class="p-15">


    <img src="img/roc2.png" alt="" class="m2">
    <img src="img/roc.png" alt="" class="m1">
    <img src="img/roc3.png" alt="" class="roc13">
    <img src="img/roc6.png" alt="" class="roc6">
    <img src="img/m1.png" alt="" class="m5">


    <img src="img/m2.png" class="m11" alt="">
    <div class="container">
        <div class="heading-text heading-section proo text-center">
            <h2>How we do</h2>
            <p>Discover our creative and unique video production process.</p>
        </div>

        <img src="img/gif/Our_Process.gif" width="100%" class="dprocess">
    </div>



    <div class="container">

    <?php $sq=mysqli_query($conn, "SELECT * FROM process WHERE status='1'");
        $i='0';
        while($row=mysqli_fetch_array($sq)){  
            if($i % 2 == 0){ ?>
 <div class="row">
            <div class="col-lg-3 text-md-right">
                <h2 class="processh3 d-block d-md-none mb-0"> <?=$row['title'];?>   </h2>
                <img src="images/process/<?=$row['image'];?>" class="wit100">
            </div>

            <div class="col-lg-9">
                <h2 class="processh3 d-none d-md-block"> <?=$row['title'];?> </h2>
                <p class="processp text-left"><?=$row['description'];?></p>
            </div>
        </div>
             <?php }else{ ?>
 <div class="row">
 <div class="col-lg-9">
     <h2 class="processh3 d-none d-md-block"> <?=$row['title'];?> </h2>
     <p class="processp text-left"><?=$row['description'];?></p>
 </div>
 <div class="col-lg-3 text-md-right">
     <h2 class="processh3 d-block d-md-none mb-0"> <?=$row['title'];?>   </h2>
     <img src="images/process/<?=$row['image'];?>" class="wit100">
 </div>
</div>
         <?php    }
           $i++; }?>

      
        <br>



    </div>
    <!-- <img src="img/prod.png" width="100%" class="serimg"> -->
</section>



<br>




















<?php
include("footer.php");
?>