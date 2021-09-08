<?php 

include("includes/header.php");
include("includes/db.php");
include("includes/functions.php");

?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/albery.css" type="text/css">
    <script src="main.js"></script>
<script src="https://kit.fontawesome.com/d7c3003f21.js" crossorigin="anonymous"></script>
<?php 

if(isset($_GET['pro_id'])){
    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";
    
    $run_product = mysqli_query($con,$get_product);
    
    $row_products = mysqli_fetch_array($run_product);
    
    $p_cat_id = $row_products['p_cat_id'];
    
    $pro_title = $row_products['product_title'];
    
    $pro_price = $row_products['product_price'];

    $pro_sale_price = $row_products['product_sale'];
    
    $pro_desc = $row_products['product_desc'];
    
    $pro_img1 = $row_products['product_img1'];
    
    $pro_img2 = $row_products['product_img2'];
    
    $pro_img3 = $row_products['product_img3'];
        
    $pro_label = $row_products['product_label'];


    
}

?>

<!-- section -->
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-md-9">

      <div class="container1 pull-left">
      <?php 
                   
                   $get_products = "select * from products where product_id='$product_id'";
                  
                   $run_products = mysqli_query($con,$get_products);
                  
                   while($row_products=mysqli_fetch_array($run_products)){
                      
                   $pro_id = $row_products['product_id'];
                   $pro_title = $row_products['product_title'];
                   $pro_price = $row_products['product_price'];
                   $pro_desc = $row_products['product_desc'];
                   $pro_url = $row_products['product_url'];
                   $pro_cat = $row_products['product_cat'];
                   $pro_img1 = $row_products['product_img1'];
                   $pro_img2 = $row_products['product_img2'];
                   $pro_img3 = $row_products['product_img3'];
                   $pro_img4 = $row_products['product_img4'];
                   $pro_img5 = $row_products['product_img5'];
                   $pro_img6 = $row_products['product_img6'];
                   $manufacturer_id = $row_products['manufacturer_id'];
                   ?>
			
		<div class="albery-container">

			<div class="albery-wrapper">
  
      <div class="albery-item">
            <img src="admin_area/product_images/<?php echo $pro_img1; ?>"width="768" height="455" alt="">
          </div>
          <div class="albery-item">
            <img src="admin_area/product_images/<?php echo $pro_img2; ?>" width="768" height="455" alt="">
          </div>
          <div class="albery-item">
            <img src="admin_area/product_images/<?php echo $pro_img3; ?>" width="768" height="455" alt="">
          </div>
          <div class="albery-item">
            <img src="admin_area/product_images/<?php echo $pro_img4; ?>"width="768" height="455" alt="">
          </div>
          <div class="albery-item">
            <img src="admin_area/product_images/<?php echo $pro_img5; ?>"width="768" height="455" alt="">
          </div>
          <div class="albery-item">
            <img src="admin_area/product_images/<?php echo $pro_img6; ?>"width="768" height="455" alt="">
          </div>
          
  
        </div>
  
        <div class="move-right">
          <a href="#" id="rightArrow"></a>
        </div>
        <div class="move-left">
          <a href="#" id="leftArrow"></a>
        </div>
  
      </div>
  
      <div class="pagination-container">
        <div class="pagination-wrapper">
          <div class="pagination-item" data-item="1">
            <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="">
          </div>
          <div class="pagination-item" data-item="2">
            <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="">
          </div>
          <div class="pagination-item" data-item="3">
            <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="">
          </div>
          <div class="pagination-item" data-item="4">
            <img src="admin_area/product_images/<?php echo $pro_img4; ?>" alt="">
          </div>
          <div class="pagination-item" data-item="5">
            <img src="admin_area/product_images/<?php echo $pro_img5; ?>" alt="">
          </div>
          <div class="pagination-item" data-item="6">
            <img src="admin_area/product_images/<?php echo $pro_img6; ?>" alt="">
          </div>
          </div>
          </div>
          </div>
  <script src="js/albery.js"></script>
	<script>
		$(".albery-container").albery({
			speed: 500,
			imgWidth: 600,
		});
	</script>
    
    <div class=" col-md-9 product_detail_side detail_style1">
            <div class="product-heading">
              <h2 class="product-detail-side"><?php echo $pro_title; ?>  <h4><i class="fas fa-map-marker-alt">  <?php echo $pro_url; ?></i></h4></h2>
            
            </div>
           
            <div class="product-detail-side"> <span class="new-price">Sh.<?php echo $pro_price; ?></span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 reviews)</span> </div>
            
            
            <div class="detail-contant">
              <p> <?php echo $pro_desc; ?> <br></p>
              
              <div class="detail-contant1">
                <ul>
                <h4 class="service-heading"><i class="fas fa-broom">  Committed to enhanced cleaning process.</i> </h4> 
                 
                <h4 class="service-heading"><i class="fas fa-wifi"> Available to Customers Exclusively</i> </h4> 

                <h4 class="service-heading"><i class="fas fa-calendar-times">   Add your trip dates to get the cancellation details</i> </h4> 

                <h4 class="service-heading"><i class="fas fa-bookmark"> The host doesn’t allow pets or parties (rules)</i> </h4> 

                </ul>
                </div>
                
            </div>
            <div class="share-post"> <a href="#" class="share-text">Share</a>
              <ul class="social_icons">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            </div>
      

        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="main_heading text_align_left" style="margin-top: 35px;">
                <h3>Related Air-Bnb's in <?php echo $pro_url; ?> </h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        
        <?php        
                   
                   $get_products = "select * from products ORDER BY product_cat asc LIMIT 0,3" ;
                  
                   $run_products = mysqli_query($con,$get_products);
                  
                  while($row_products=mysqli_fetch_array($run_products)){
                      
                   $pro_id = $row_products['product_id'];
       
                   $pro_title = $row_products['product_title'];
                   
                   $pro_price = $row_products['product_price'];
           
                  
                   
                   $pro_img1 = $row_products['product_img1'];
                   
                   
                   
                   $manufacturer_id = $row_products['manufacturer_id'];
           
                   
                   
                   echo "
                   
                   <div class='col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all'>
                   
                       <div class='product_list'>
                       
                           <a href='details.php?pro_id=$pro_id'>
                           
                               <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                           
                           </a>

                           <div class='sale-box'>
                           <span class='on_sale title_shop'>Sh. $pro_price</span>
                           </div>
                           
                           <div class='text'>

                           <center>
                           
                               <p class='btn btn-outline-warning'> $manufacturer_id </p>
                           
                           </center>

                   

                 <div class='center'>

                  <h4><a href='details.php?pro_id=$pro_id'> $pro_title </a></h4>

                </div>
                               
                <p class='button'>
                    
                <a class='p-2 form-control px-3' href='details.php?pro_id=$pro_id'>

                    View Details

                </a>

            
            </p>
                           </div>
                       
                       </div>
                   
                   </div>
                   
                   ";
                      
                  }
                  
                  ?>
        </div>
      </div>
      <div class="col-md-3">
        <div class="side_bar">


        
          <div class="side_bar_blog">
          <h4>OUR SERVICES</h4>
            <div class="categary">
              <ul>
              
              <li><a href="services.php"><i class="fa fa-angle-right"></i> Hotel Reservations</a></li>
                <li><a href="services.php"><i class="fa fa-angle-right"></i> Safari Tours</a></li>
                <li><a href="services.php"><i class="fa fa-angle-right"></i> Conference Facilities</a></li>
                <li><a href="services.php"><i class="fa fa-angle-right"></i> Corporate Incentices</a></li>
                <li><a href="services.php"><i class="fa fa-angle-right"></i> Ticketing</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
          <h4>SAFARI PACKAGES</h4>
            <div class="categary">
              <ul>
            
                <li><a href="accomodation.php"><i class="fa fa-angle-right"></i>A Trip to Diani</a></li>
                <li><a href="accomodation.php"><i class="fa fa-angle-right"></i>Nanyuki daytrip</a></li>
                <li><a href="accomodation.php"><i class="fa fa-angle-right"></i> Amboseli camping trip</a></li>
                <li><a href="accomodation.php"><i class="fa fa-angle-right"></i>Masai Mara</a></li>
                <li><a href="accomodation.php"><i class="fa fa-angle-right"></i>Naivasha day trip</a></li>
                <li><a href="accomodation.php"><i class="fa fa-angle-right"></i>Oldarpoi mara camp</a></li>
                <li><a href="accomodation.php"><i class="fa fa-angle-right"></i>Tsavo West</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>OUR PARTNERS</h4>
            <div class="tags">
              <ul>
                <li><a href="#">ASTA</a></li>
                <li><a href="#">KATO</a></li>
                <li><a href="#">EATN</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src='js/hizoom.js'></script>
<script>
        $('.hi1').hiZoom({
            width: 300,
            position: 'right'
        });
        $('.hi2').hiZoom({
            width: 400,
            position: 'right'
        });
    </script>
    <style>

.sale-box,
.sale-box.two,
.sale-box.three {
  position: absolute;
  top: 0;
  overflow: hidden;
  height: 130px;
  width: 143px;
  text-align: center;
  z-index: 0;
  right: 0;
  border-top-right-radius: 0.7em;
  -o-border-top-right-radius: 0.7em;
  -moz-border-top-right-radius: 0.7em;
  -webkit-border-top-right-radius: 0.7em;
}
.detail-contant1 .service-heading{
  font-family: 'Montserrat', sans-serif;
} 
.product-detail-side .review{
  font-family: 'Montserrat', sans-serif;
}
.sale-box span.on_sale {
  font-size: 14px;
  color: #444;
  background: #ffd400;
  text-transform: uppercase;
  padding: 58px 35px 17px 40px;
  width: 281px;
  text-align: center;
  display: block;
  position: absolute;
  left: -47px;
  top: -41px;
  -moz-transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-transform: rotate(-44deg);
  -ms-transform: rotate(-44deg);
  transform: rotate(40deg);
  box-shadow: 3px -4px 13px 3px rgba(0, 0, 0, 0.75);
}
.sale-box.two.sale-box span.on_sale {
  background: #fa6e6f;
}
.sale-box.three.sale-box span.on_sale {
  background: #05aea7;
}
 .stars{
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .stars i{
    color: #f1c40f;
    font-size: 20px;
  }
.px-3{
    background: #04dbdd none repeat scroll;
    color: #fff;
    font-weight: bolder;
    font-size: 16px;
    text-transform: uppercase;
    -webkit-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
    width: 100%;
    border-radius: 0px;
    text-align: center; margin: auto;
}
.px-3:hover{
    color: #000;
}

</style>

   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
<?php } ?>