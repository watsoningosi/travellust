<?php 
    error_reporting(0);
    session_start();
    
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_country = $row_admin['admin_country'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_customers = "select * from customers";
        
        $run_customers = mysqli_query($con,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        $get_p_categories = "select * from product_categories";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
        $count_p_categories = mysqli_num_rows($run_p_categories);
        
        $get_pending_orders = "select * from pending_orders";
        
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="900;url=logout.php" />
    <title>Travellust Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../images/about.jpg" type="image/gif" />
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }    if(isset($_GET['view_messages'])){
                        
                    include("view_messages.php");
                    
            }   if(isset($_GET['delete_message'])){
                        
                include("delete_message.php");
                
        } if(isset($_GET['insert_message'])){
                        
            include("insert_message.php");
            
    } if(isset($_GET['edit_message'])){
                        
        include("edit_message.php");
        
}
            if(isset($_GET['insert_quote'])){
                        
                include("insert_quote.php");
                
        }if(isset($_GET['edit_message'])){
                        
            include("edit_message.php");
            
    } 
    if(isset($_GET['view_bookings'])){
                    
        include("view_bookings.php");
        
}
        if(isset($_GET['delete_booking'])){
                        
            include("delete_booking.php");
            
    }if(isset($_GET['insert_booking'])){
                        
        include("insert_booking.php");
        
}
         if(isset($_GET['view_quotes'])){
                        
            include("view_quotes.php");
            
             }if(isset($_GET['delete_quote'])){
                        
                include("delete_quote.php");
                
        }
        if(isset($_GET['view_airbnb'])){
                        
            include("view_airbnb.php");
            
             }if(isset($_GET['delete_airbnb'])){
                        
                include("delete_airbnb.php");
                
        }   if(isset($_GET['insert_airbnb'])){
                        
            include("insert_airbnb.php");
            
    }      if(isset($_GET['edit_airbnb'])){
                        
        include("edit_airbnb.php");
        
}
        
             if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                }   if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                        
                }   if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }   if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                }     if(isset($_GET['edit_css'])){
                        
                        include("edit_css.php");
                        
                }  
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>       
</body>
</html>



<?php } ?>