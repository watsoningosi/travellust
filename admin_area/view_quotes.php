<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Quotes
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View View Quotes
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                 <th>No.</th>
                                <th>First Name: </th>
                                <th> Last name: </th>
                                <th> email: </th>
                                <th> phone </th>
                                <th> check-in date </th>
                                <th> Check-out date</th>
                                <th> Number </th>
                                <th> Message</th>
                                <th>Delete</th>
                                
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_quote = "select * from quotes";
                                
                                $run_quote = mysqli_query($con,$get_quote);
          
                                while($row_quote=mysqli_fetch_array($run_quote)){

                                    $sender_id = $row_quote['id'];
                                    
                                    $sender_fname = $row_quote['fname'];
                                                                     
                                    $sender_lname = $row_quote['lname'];
                         
                                    $sender_email = $row_quote['email'];
                         
                                    $sender_phone = $row_quote['phone'];
                         
                                    $sender_datein = $row_quote['datein'];
                                     
                                    $sender_dateout = $row_quote['dateout'];

                                    $sender_number = $row_quote['number'];
                                                                   
                                    $sender_message = $row_quote['message'];   

                        
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                            <td> <?php echo $i; ?></td>
                                <td> <?php echo $sender_fname; ?> </td>
                                <td> <?php echo $sender_lname; ?> </td>
                                <td> <?php echo $sender_email; ?></td>
                                <td> <?php echo $sender_phone; ?> </td>
                                <td> <?php echo $sender_datein; ?> </td>
                                <td> <?php echo $sender_dateout; ?> </td>
                                <td> <?php echo $sender_number; ?> </td>
                                <td> <?php echo $sender_message; ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_quote=<?php echo $sender_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td> 
                                
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>