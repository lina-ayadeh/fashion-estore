<?php 
include('include/mainheader.php');?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/a1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2 style="color: yellow;">Product Catagori</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Latest Products Start -->
        <section class="latest-product-area latest-padding">
            <div class="container">
                
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            
                             <?php
                $query="SELECT * FROM category ";
                $result=mysqli_query($database->conn,$query);
                while ( $row=mysqli_fetch_assoc($result)) {
                echo '<div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">';
                                    echo "<img src='mainimg/{$row["cat_img"]}'>";
                                    echo '  
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>';
                                        echo " <h4><a href='product_list.php?catid={$row["cat_id"]}'>{$row["cat_name"]}</a></h4>";
                                        echo ' </div>
                                </div>
                            </div>';
                                     
}
                ?>
                
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->

        <!-- Latest Offers Start -->
        <div class="latest-wrapper lf-padding">
            <div class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/latest-offer.png">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="latest-caption">
                                <h2>Get Our<br>Latest Offers News</h2>
                                <p>Subscribe news latter</p>
                            </div>
                        </div>
                            <div class="col-xl-5 col-lg-5 col-md-6 ">
                            <div class="latest-subscribe">
                                <form action="index.php">

                                    <button type="submit" >Shop Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- man Shape -->
                <div class="man-shape">
                    <img src="assets/img/collection/latest-man.png" alt="">
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->
        <!-- Shop Method Start-->
        <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>Free Shipping Method</h6>
                            <p> shipping to all jordan countries, in safe ways and at the lowest costs.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Secure Payment System</h6>
                            <p>Safe, easy and accessible payment method for all jordan countries.</p>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Replacement of parts</h6>
                            <p>Ensure the arrival of high-quality parts with the possibility of easy replacement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
        <!-- Gallery Start-->
          <div class="gallery-wrapper lf-padding">
            <div class="gallery-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="gallery-items">
                            <img src="assets/img/gallery/r1.jpg" style="width:270px;height: 300px;"alt="">
                        </div> 
                        <div class="gallery-items">
                            <img src="assets/img/gallery/r2.jpg" style="width:270px;height: 300px;"alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/r3.jpg" style="width:270px;height: 300px;"alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/r4.jpg" style="width:270px;height: 300px;"alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="assets/img/gallery/r5.jpg" style="width:270px;height: 300px;"alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End-->

    </main>
   <?php include('include/mainfooter.php');?>