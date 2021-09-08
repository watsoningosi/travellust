<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_booking'])){
        
        $delete_id = $_GET['delete_booking'];
        
        $delete_booking = "delete from bookings where id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_booking);
        
        if($run_delete){
            
            echo "<script>alert('One of your booking has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_bookings','_self')</script>";
            
        }
        
    }

?>

<?php } ?>