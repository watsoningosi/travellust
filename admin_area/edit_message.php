<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_message'])){
        
        $edit_id = $_GET['edit_message'];
        
        $edit_message_query = "select * from messages where id='$edit_id'";
        
        $run_edit = mysqli_query($con,$edit_message_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $sender_name = $row_edit['name'];
        
        $sender_email = $row_edit['email'];
        
        $sender_subject = $row_edit['subject'];
        
        $sender_message = $row_edit['message'];
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Message
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Edit Message
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" action="#" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Name </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="name" type="text" class="form-control" value=" <?php echo $sender_name;?>" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> E-mail</label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="email" type="text" class="form-control" value=" <?php echo $sender_email;?>" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Subject </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="subject" type="text" class="form-control" value=" <?php echo $sender_subject; ?>" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Message </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="message" value=" <?php echo $sender_message; ?>" class="form-control" rows="3"></textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update"  type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
            
         

<?php  

    if(isset($_POST['update'])){

     $sender_name = $_POST['name'];
                                                                     
     $sender_email = $_POST['email'];
                                         
     $sender_subject = $_POST['subject'];
                                         
     $sender_message = $_POST['message'];

     $insert_message = "insert into messages (name,email,subject,message) values ('$sender_name','$sender_email','$sender_subject','$sender_message')";
                                              
     $run_message = mysqli_query($con,$insert_message);
         
     if($run_message){
             
echo "<script>alert('message Has Been Updated ASAP ')</script>";
echo "<script>window.open('index.php','_self')</script>";

                }

              }else{
                
                $update_message = "update messages set name='$sender_name',email='$sender_email',subject="$sender_subject",message="$sender_message" where id='$id'";
                
                $run_message = mysqli_query($con,$update_message);
                
                if($run_message){
                    
                    echo "<script>alert('Your Product Category Has Been Updated')</script>";
                    
                    echo "<script>window.open('index.php?view_message','_self')</script>";
                    
                }

              }
              
          }

?>



<?php } ?> 