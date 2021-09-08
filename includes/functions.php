<?php

$db = mysqli_connect("localhost", "root", "", "travellustcopy");

/// begin getPro functions ///

function getPro()
{

    global $db;

    $get_products = "select * from products order by 1 DESC LIMIT 0,8";

    $run_products = mysqli_query($db, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];

        $pro_title = $row_products['product_title'];

        $pro_price = $row_products['product_price'];

        $pro_img1 = $row_products['product_img1'];

        $manufacturer_id = $row_products['manufacturer_id'];

        echo "
        <div class='col-md-3'>
                   
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

/// finish getPro functions ///
