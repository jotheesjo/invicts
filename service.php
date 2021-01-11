<?php
include("header.php");
?>



<section id="page-title" class="" data-bg-parallax="img/banner/sky.png">
    <div class="container" style="text-align: center;">
        <a href="index.php"> <img src="img/logo.png" alt="" class="width15"> </a>
        <br>
        <br>
        <div class="page-title">
            <h1 class="banin">Services </h1>
        </div>
    </div>
    <img src="img/banner/cloud.png" alt="" class="w-100">               
</section>







<section class="p-15">
    <img src="img/m1.png" alt="" class="m5">
    <img src="img/mm1.png" alt="" class="mm1">
    <img src="img/roc5.png" alt="" class="m2">
    <img src="img/roc4.png" alt="" class="m2">
    <img src="img/roc3.png" alt="" class="roc3">
    <div class="container">
        <div class="heading-text heading-section ser text-center">
            <h2>What we do</h2>
            <p>Making your first impression in front of the investors is a very crucial part in such scenarios.</p>
        </div>

        <?php $sq=mysqli_query($conn, "SELECT * FROM services WHERE status='1'");
        $i='0';
        while($row=mysqli_fetch_array($sq)){  
            if($i % 2 == 0){ ?>
 <div class="row">
            <div class="col-lg-3 text-md-right">
                <h2 class="processh3 d-block d-md-none mb-0"> <?=$row['title'];?>   </h2>
                <img src="images/service/<?=$row['image'];?>" class="wit100">
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
     <img src="images/service/<?=$row['image'];?>" class="wit100">
 </div>
</div>
         <?php    }
           $i++; }?>
       

    </div>
    <br>
    <!-- <img src="img/prod.png" width="100%" class="serimg"> -->
</section>




 
<section style="background-image: url(img/worldbg.JPG); background-size: cover; padding: 30px;">
    <!-- <img src="img/worldbg - Copy.JPG" class="worldbg"> -->
    <div class="container contains p-0">
        <div class=" heading-text heading-section none text-center">
            <h2 class="p-b-10" style="font-size: 24px; font-weight: 700;"> More than 1000+ Videos for clients all over the world </h2>
            <p class="worldsec" style="color:#ffffff">A good portfolio is more than a long list of good stocks and bonds. It is a balanced whole, providing the investor with protections and opportunities with respect to a wide range of contingencies.
            </p>
        </div>
        <br>

        <div class="row ">
            <div class="col-lg-4 text-center">
                <img src="img/gif/Globe_Section.gif" class="hglobe" >
            </div>
            <div class="col-lg-8">
                <div class="carousel" data-items="1">
                    <div>
                        <a href="#"><img alt="" src="img/clogos.png" width="85%">
                        </a>
                    </div>

                    <div>
                        <a href="#"><img alt="" src="img/clogos.png" width="85%">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php
include("footer.php");
?>