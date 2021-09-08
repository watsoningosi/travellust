<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_quote'])){
        
        $delete_id = $_GET['delete_quote'];
        
        $delete_quote = "delete from quotes where id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_quote);
        
        if($run_delete){
            
            echo "<script>alert('One of your quote has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_quotes','_self')</script>";
            
        }
        
    }

?>

<?php } ?>