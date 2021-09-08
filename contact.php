<?php
    include("includes/header.php");
 ?>

    <section class="section-background">
		<div class="container1">
			<h2 class="page-header">
				Reach us
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a><i class="fas fa-dove"></i><a href="#">Contact Us</a> </li>
			</ol>
		</div> <!-- /.container -->
    </section> <!-- /.section-background -->
    
    <main class="content">
    	<div class="fullwidth-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInLeft">
                        <h4>Travellust</h4>
                        <ul class="list-fa">
                            <li><i class="fa fa-map-marker"></i> Vision Plaza Mombasa Road</li>
                            <li><i class="fa fa-phone"></i><a href="tel:0726275100">&nbsp;&nbsp;0726275100</a> </li>
                            <li><i class="fa fa-phone"></i><a href="tel:0101235386">&nbsp;&nbsp;0101235386</a> </li>
                            <li><i class="fa fa-phone"></i><a href="tel:+1(720)453-8324">&nbsp;&nbsp;+1(720)453-8324</a> </li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:travellust.tour@gmail.com">travellust.tour@gmail.com</a></li>
                        </ul>

                        <form action="#" id="contact1" method="post">
                            <fieldset>
                            <input type="text" placeholder="Your Name" name="name">
                          </fieldset> 
                            <fieldset> 
                            <input type="text" placeholder="Email Address" name="email" />
                           </fieldset>
                         <fieldset>
                            <input type="text" placeholder="Phone Number" name="subject">
                        </fieldset>
                        <fieldset>
                       <textarea placeholder="Message" name="message" tabindex="5" required></textarea>
                    </fieldset>
                       <fieldset>     
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
                        </form>
                        <?php 
                                  include("includes/db.php");
                                      
                                      if(isset($_POST['submit'])){
                                                                     
                                      /// Admin receives message with this ///
                                                                     
                                       $sender_name = $_POST['name'];
                                                                     
                                        $sender_email = $_POST['email'];
                                                                     
                                         $sender_subject = $_POST['subject'];
                                                                     
                                          $sender_message = $_POST['message'];
                                          
                                          $insert_message = "insert into messages (name,email,subject,message) values ('$sender_name','$sender_email','$sender_subject','$sender_message')";
                                              
                                          $run_message = mysqli_query($con,$insert_message);
                                              
                                          if($run_message){
                                                  
                              echo "<script>alert('Thanks for sending us message. ASAP we will reply your message')</script>";
                              echo "<script>window.open('index.php','_self')</script>";
                                                  
                                              }
                                                                     
                                               }
                                                                 
                                               ?>
                    </div>
                    <div class="col-md-7 col-md-push-1 wow fadeInRight">
                        <div class="map">
                      
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7484568196032!2d36.85050571430547!3d-1.3268901360449687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11ec971ed07b%3A0x794da7f7b0b4e7e6!2sVision%20Plaza%2C%20Mombasa%20Road%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1608151201050!5m2!1sen!2ske" width="700" height="520" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                    
                </div>

            </div>

        </div>
        <section1  id="team"  class="team">
            <div class="container">
                <div class="row text-center">
                    <div class="head_title text-center">
                        <h2 style="margin-top:50px;">OUR TEAM</h2>
                        
                        <hr/>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="single_team">
                            <div class="img_wrap">
                                <img src="images/dickson.jpg" class="img-responsive" alt="">
                                <div class="social_link">
                                    <div class="social_table">
                                        <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3>Dickson Murithi Nkunja</h3>
                            <p>CS (Certified secretary) level 4Lawyer Business management</p>
                            <p>4 years experience</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-3 col-sm-6">
                        <div class="single_team">
                            <div class="img_wrap">
                                <img src="images/ruthrop.jpeg" class="img-responsive" alt="">
                                <div class="social_link">
                                    <div class="social_table">
                                        <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3>Ruth Rop</h3>
                            <p>Bachelor of Science in Procurement and Supply Chain Management</p>
                            <p>10 years experiencer</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-3 col-sm-6">
                        <div class="single_team">
                            <div class="img_wrap">
                                <img src="images/janekirema.jpeg" class="img-responsive" alt="">
                                <div class="social_link">
                                    <div class="social_table">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3>Jane Kirema</h3>
                            <p>Degree in accounting Specialized in tax accounting</p>
                            <p>7 years experience</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-3 col-sm-6">
                        <div class="single_team">
                            <div class="img_wrap">
                                <img src="images/kettu.jpeg" class="img-responsive" alt="">
                                <div class="social_link">
                                    <div class="social_table">
                                        <ul class="list-inline">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3>Kettu chebet Busienei</h3>
                            <p>BA ( Business administration)Procurement </p>
                            <p>2 years experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </section1><!-- End team section -->

    </main>

<?php
    include("includes/footer.php");
 ?>