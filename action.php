<?php
session_start();
include "includes/db.php";
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Destinations</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
			echo "
					<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["brand"])){
	$brand_query = "SELECT * FROM brands";
	$run_query = mysqli_query($con,$brand_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Accomodations.</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$bid = $row["brand_id"];
			$brand_name = $row["brand_title"];
			echo "
					<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page'>$i</a></li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 50;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM products LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
            $pro_img1 = $row['product_img1'];
            $manufacturer_id = $row['manufacturer_id'];
            
            echo "
            <div class='col-md-4'>
                   
            <div class='product_list'>
            
                <a href='details.php?pro_id=$pro_id'>
                
                    <img class='img-fluid img' src='admin_area/product_images/$pro_img1'></img>
                
                </a>
    
                <div class='sale-box'>
                <span class='on_sale title_shop'>Sh. $pro_price </span>
                </div>
                
                <div class='text'>
    
                <center>
                
                    <p class='btn btn-outline-warning mfg'> $manufacturer_id  </p>
                
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
	}
}
if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products WHERE product_cat = '$id'";
	}else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$id'";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
	}
	
	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
        $pro_id    = $row['product_id'];
        $pro_cat   = $row['product_cat'];
        $pro_brand = $row['product_brand'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        $pro_img1 = $row['product_img1'];
        $manufacturer_id = $row['manufacturer_id'];
        
        echo "
        <div class='col-md-4'>
               
        <div class='product_list'>
        
            <a href='details.php?pro_id=$pro_id'>
            
                <img class='img-fluid img' src='admin_area/product_images/$pro_img1'></img>
            
            </a>

            <div class='sale-box'>
            <span class='on_sale title_shop'>Sh. $pro_price </span>
            </div>
            
            <div class='text'>

            <center>
            
                <p class='btn btn-outline-warning mfg'> $manufacturer_id  </p>
            
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
	}
	



?>