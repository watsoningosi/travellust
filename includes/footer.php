<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-9 py-5">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">About us</h2>
                        <p>Travel Lust Tours & Travel offers you a wholesome and distinct insight into the wonders of Kenya’s amazingly diverse landscape, wildlife, history and cultural heritage.</p>
                        <ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">Services</h2>
                                        <ul class="list-unstyled">
                              <li><a href="#" class="py-1 d-block">Hotel Reservations</a></li>
                              <li><a href="#" class="py-1 d-block">Safaris and Tours Packages</a></li>
                              <li><a href="#" class="py-1 d-block">Conference Facilities</a></li>
                              <li><a href="#" class="py-1 d-block">Ticketing</a></li>
                            </ul>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">Home</h2>
                                        <ul class="list-unstyled">
                              <li><a href="about.php" class="py-1 d-block">About us</a></li>
                              <li><a href="contact.php" class="py-1 d-block">Contact us</a></li>
                              <li><a href="services.php" class="py-1 d-block">Services</a></li>
                              <li><a href="book.php" class="py-1 d-block">Book</a></li>
                            </ul>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">Resources</h2>
                                        <ul class="list-unstyled">
                              <li><a href="#" class="py-1 d-block">Vehicles</a></li>
                              <li><a href="#" class="py-1 d-block">Hotels</a></li>
                              <li><a href="#" class="py-1 d-block">Accomodation</a></li>
                              <li><a href="#" class="py-1 d-block">Special Offers</a></li>
                            </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-md-5">
                    <div class="col-md-12">
                        <p class="copyright">
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
              </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-md-5 py-4  aside-stretch-right pl-lg-5">
                <h2 class="footer-heading">Free consultation</h2>
    <form action="#"  method="post" class="form-consultation">
      <div class="form-group">
        <input type="text" id="pwd" class="form-control" placeholder="Your Name" name="name">
      </div>
      <div class="form-group">
        <input type="text" id="pwd" class="form-control" placeholder="Your Email" name="email">
      </div>
      <div class="form-group">
        <input type="text" id="pwd" class="form-control" placeholder="Subject" name="subject">
      </div>
      <div class="form-group">
        <textarea name="message" id="pwd" name="message" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
      </div>
      <div class="form-group">
          <button type="submit" name="submit"  class="form-control submit px-3" onClick="return document.getElementById('pwd').value !=''">Send A Message</button>
      </div>
    </form>
    <?php 
                                  include("includes/db.php");
                                      
                                      if(isset($_POST['submit'])){
                                                                     
                                      /// Admin receives message with this ///
                                     
                                                                     
                                       $sender_name = $_POST['name'];
                                                                     
                                        $sender_email = $_POST['email'];
                                                                     
                                         $sender_subject = $_POST['subject'];
                                                                     
                                          $sender_message = $_POST['message'];
                                          
                                          $insert_message = "insert into messages (name,email,subject,message) values (,'$sender_name','$sender_email','$sender_subject','$sender_message')";
                                              
                                          $run_message = mysqli_query($con,$insert_message);
                                              
                                          if($run_message){
                                                  
                              echo "<script>alert('Thanks for sending us message. ASAP we will reply your message')</script>";
                              echo "<script>window.open('index.php','_self')</script>";
                                                  
                                              }
                                                                     
                                               }
                                                                 
                                               ?>
            </div>
        </div>
    </div>
</footer>


    <script src="js/jquery-1.10.2.min.js"></script>
    
    <script src="js/plugins.js"></script>

    <script src="js/custom.js"></script>


    <script src="js/main.js"></script>

   


</body>
</html>