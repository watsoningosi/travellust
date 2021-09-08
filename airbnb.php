<?php 

include("includes/header.php");
include("includes/db.php");
include("includes/functions.php");

?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/albery.css" type="text/css">
    <script src="js/main1.js"></script>

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

    if($pro_label == ""){

    }else{

        $product_label = "
        
            <a href='#' class='label $pro_label'>
            
                <div class='theLabel'> $pro_label </div>
                <div class='labelBackground'>  </div>
            
            </a>
        
        ";

    }
    
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>

<!-- section -->
<!-- section -->
<div class="section padding_layout_1 product_detail">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="container">
          <div class="row col-md-9">

                <div id="get_product">
							<!--Here we get product jquery Ajax Request-->
		         </div>
			  
              </div>
            </div>
          </div>
        </div>
        

       
      <div class="col-md-3">
        <div class="side_bar">

        <div class="side_bar_blog">
        
            <h4>SEARCH</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" id="search"  placeholder="Enter location / airbnb" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" id="search_btn" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>

        
          <div class="side_bar_blog">
            
            <div class="categary">
              <ul>
              <div id="get_brand">
				       </div>

              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            
            <div class="categary">
              <ul>
              <div id="get_category">
			</div>
           
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
    
