
<?php 

include('include/mainheader.php');
?>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/a5.jpg">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>product Details</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row justify-content-center">
        <?php   $query="SELECT * FROM product  WHERE pro_id={$_GET['proid']}";
                $result=mysqli_query($database->conn,$query);
                while ( $row=mysqli_fetch_assoc($result)) {
      echo'  <div class="col-lg-12">
          <div class="product_img_slide owl-carousel">
            <div class="single_product_img">';
              echo"<img src='mainimg/{$row["pro_img"]}' alt='#' class='img-fluid'>";
            echo'</div>
            
          </div>
        </div>
        <div class="col-lg-8">
          <div class="single_product_text text-center">';
            echo"<h3>{$row['pro_name']}</h3>";
            echo"<p>
                {$row['pro_desc']}
            </p>";
         
             echo"<form action='favert.php?pid={$_GET["proid"]}' method='post'>";
echo"<div class='add_to_cart'>
                  <button type='submit' class='btn_3' name='addtofavert'>add to favert</a>
              </div>";
             echo"</form>";

         echo" </div>
        </div>";}
      echo"</div>
    </div>
  </div>";
  ?>
  <!--================End Single Product Area =================-->
   <!-- subscribe part here -->
   
  <!-- subscribe part end -->

  
    <!-- Footer End-->
      <?php include('include/mainfooter.php');?>