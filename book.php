<?php
    include("includes/header.php");
 ?>

    <section class="section-background">
		<div class="container1">
			<h2 class="page-header">
				Book to assure satisfaction !
			</h2>
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a><i class="fas fa-dove"></i><a href="#">Book with us</a> </li>
			</ol>
		</div> <!-- /.container -->
    </section> <!-- /.section-background -->
     

					<div class="booking-form">
						<div class="booking-bg"></div>
						<form action="#" method="post">
							<div class="form-header">
								<h2>Make your reservation</h2>
							</div>
							<div class="form-group">
								<span class="form-label">Name</span>
								<input class="form-control" name="name" type=text placeholder="Enter your Name">
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" name="phone" placeholder="Enter your phone number">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" name="datein" type="date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check Out</span>
										<input class="form-control" name="dateout" type="date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Price Range</span>
										<select name="budget" class="form-control">
											<option>5000 - 10000 </option>
                                            <option>10000 - 20000</option>
                                            <option>21000 - 30000</option>
                                            <option>31000 - 50000</option>
                                            <option>51000 - 70000</option>
                                            <option>70000 - 100000</option>
                                            <option>more than 100k</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Service</span>
										<select name="package" class="form-control">
											<option>Ticketing</option>
									<option>Hotel Reservations</option>
                                    <option>Safaris and Tours Packages</option>
                                    <option>Conference Facilities</option>
                                    <option>Corporate Group Discount</option>
                                    <option>Complementary Packages</option>
                                    <option>Special Packages</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Children</span>
										<input class="form-control" type="number" name="children" placeholder="Number of Children">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adult(s)</span>
										<input class="form-control" type="number" name="adults" placeholder="Number of adults">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" type="email" name="email" placeholder="Enter your email">
							</div>
							<div class="form-group">
								<span class="form-label">Nationality</span>
								<input class="form-control" type="tel" name="nationality" placeholder="Enter your Nationality">
							</div>
							<div class="form-group">
								<span class="form-label">Describe Details</span>
							
								<textarea class="form-control" type="text" name="message" tabindex="5" placeholder="Describe expected results"></textarea>
							</div>
							<div class="form-btn">
								<button name="submit1" class="submit-btn">Book Now</button>
							</div>
                        </form>
                        <?php 
                                  include("includes/db.php");
                                      
                                      if(isset($_POST['submit1'])){
                                                                     
                                      /// Admin receives message with this ///
                                                                     
                                       $sender_name = $_POST['name'];
                                                                     
                                        $sender_email = $_POST['email'];
                                                                     
                                         $sender_phone = $_POST['phone'];

                                         $sender_datein = $_POST['datein'];

                                         $sender_dateout = $_POST['dateout'];

                                         $sender_children = $_POST['children'];

                                         $sender_adults = $_POST['adults'];

                                         $sender_nationality = $_POST['nationality'];

                                         $sender_package = $_POST['package'];

                                         $sender_budget = $_POST['budget'];
                                                                     
                                          $sender_message = $_POST['message'];
                                          
                                          $insert_booking = "insert into bookings (name,email,phone,datein,dateout,children,adults,nationality,package,budget,message) values ('$sender_name','$sender_email','$sender_phone','$sender_datein','$sender_dateout','$sender_children','$sender_adults','$sender_nationality','$sender_package','$sender_budget','$sender_message')";
                                              
                                          $run_booking = mysqli_query($con,$insert_booking);
                                              
                                          if($run_booking){
                                                  
                              echo "<script>alert('Thanks for Booking with us we will get to you as soon as posible')</script>";
                              echo "<script>window.open('index.php','_self')</script>";
                                                  
                                              }
                                                                     
                                               }
                                                                 
                                               ?>  
                   
					</div>
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
       
    <?php
    include("includes/footer.php");
 ?>    